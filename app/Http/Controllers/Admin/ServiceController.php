<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Http\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    use FileUploadTrait;

    public function index()
    {
        $services = Service::orderBy('order')->get();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|max:2048',
            'approach_image' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request, 'image', 'services');
        }

        if ($request->hasFile('banner_image')) {
            $data['banner_image'] = $this->uploadFile($request, 'banner_image', 'services/banner');
        }

        if ($request->hasFile('approach_image')) {
            $data['approach_image'] = $this->uploadFile($request, 'approach_image', 'services/approach');
        }

        if ($request->filled('features')) {
            $data['features'] = array_map('trim', explode(',', $request->features));
        }

        $service = Service::create($data);

        // Handle Processes
        if ($request->has('processes')) {
            foreach ($request->processes as $index => $process) {
                if (!empty($process['title'])) {
                    $service->processes()->create([
                        'title' => $process['title'],
                        'description' => $process['description'] ?? null,
                        'order' => $index,
                    ]);
                }
            }
        }

        return redirect()->route('admin.services.index')->with('success', 'Service created successfully.');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('image')) {
            $this->deleteFile($service->image);
            $data['image'] = $this->uploadFile($request, 'image', 'services');
        }

        if ($request->hasFile('banner_image')) {
            $this->deleteFile($service->banner_image);
            $data['banner_image'] = $this->uploadFile($request, 'banner_image', 'services/banner');
        }

        if ($request->hasFile('approach_image')) {
            $this->deleteFile($service->approach_image);
            $data['approach_image'] = $this->uploadFile($request, 'approach_image', 'services/approach');
        }

        if ($request->filled('features')) {
            $data['features'] = array_map('trim', explode(',', $request->features));
        } else {
             $data['features'] = null;
        }

        $service->update($data);

        // Handle Processes
        $submittedIds = [];
        if ($request->has('processes')) {
            foreach ($request->processes as $index => $process) {
                $processData = [
                    'title' => $process['title'],
                    'description' => $process['description'] ?? null,
                    'order' => $index,
                ];

                if (isset($process['id'])) {
                    $processModel = $service->processes()->find($process['id']);
                    if ($processModel) {
                        $processModel->update($processData);
                        $submittedIds[] = $process['id'];
                    }
                } else {
                    if (!empty($process['title'])) {
                        $newProcess = $service->processes()->create($processData);
                        $submittedIds[] = $newProcess->id;
                    }
                }
            }
        }

        // Delete removed processes
        $service->processes()->whereNotIn('id', $submittedIds)->delete();

        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        $this->deleteFile($service->image);
        $this->deleteFile($service->banner_image);
        $this->deleteFile($service->approach_image);
        $service->delete();

        return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully.');
    }
}
