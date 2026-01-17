<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Http\Traits\FileUploadTrait;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    use FileUploadTrait;

    public function index()
    {
        $sliders = Slider::orderBy('order')->get();
        return view('admin.sliders.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.sliders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();
        $data['image'] = $this->uploadFile($request, 'image', 'sliders');

        Slider::create($data);

        return redirect()->route('admin.sliders.index')->with('success', 'Slider created successfully.');
    }

    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();
        
        if ($request->hasFile('image')) {
            $this->deleteFile($slider->image);
            $data['image'] = $this->uploadFile($request, 'image', 'sliders');
        }

        $slider->update($data);

        return redirect()->route('admin.sliders.index')->with('success', 'Slider updated successfully.');
    }

    public function destroy(Slider $slider)
    {
        $this->deleteFile($slider->image);
        $slider->delete();

        return redirect()->route('admin.sliders.index')->with('success', 'Slider deleted successfully.');
    }
}
