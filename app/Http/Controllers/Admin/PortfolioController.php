<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Http\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    use FileUploadTrait;

    public function index()
    {
        $portfolios = Portfolio::orderBy('order')->get();
        return view('admin.portfolios.index', compact('portfolios'));
    }

    public function create()
    {
        return view('admin.portfolios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required',
            'image' => 'required|image|max:2048',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $data['image'] = $this->uploadFile($request, 'image', 'portfolios');

        $portfolio = Portfolio::create($data);

        // Handle Details
        if ($request->has('details')) {
            foreach ($request->details as $index => $detail) {
                if (isset($detail['image']) || isset($detail['text'])) {
                    $detailData = [
                        'text' => $detail['text'] ?? null,
                        'order' => $index,
                    ];

                    if (isset($detail['image']) && $detail['image'] instanceof \Illuminate\Http\UploadedFile) {
                        $file = $detail['image'];
                        $filename = time() . '_' . $file->getClientOriginalName();
                        $file->move(public_path('uploads/portfolios'), $filename);
                        $detailData['image_path'] = 'uploads/portfolios/' . $filename;
                    }

                    $portfolio->details()->create($detailData);
                }
            }
        }

        return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio created successfully.');
    }

    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolios.edit', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('image')) {
            $this->deleteFile($portfolio->image);
            $data['image'] = $this->uploadFile($request, 'image', 'portfolios');
        }

        $portfolio->update($data);

        // Handle Details Update
        // Simpler approach: Delete old details and recreate (except images needed careful handling if not re-uploaded)
        // Better approach: Sync. But for now, let's try to update logic carefully or simple replace if logic allows.
        // Given complexity of managing existing images without IDs in the form easily, let's assume we might need to handle existing ones.
        
        // HOWEVER, to keep it simple and effective if the UI sends everything back:
        // If we want to support editing existing details, we need to know their IDs.
        // Let's assume the UI will send IDs for existing items.
        
        // Revised Strategy: 
        // 1. Get all submitted details.
        // 2. Identify IDs to keep.
        // 3. Delete details NOT in the submitted IDs.
        // 4. Update/Create.

        $submittedIds = [];
        if ($request->has('details')) {
            foreach ($request->details as $index => $detail) {
                $detailModel = null;
                if (isset($detail['id'])) {
                    $detailModel = $portfolio->details()->find($detail['id']);
                    if ($detailModel) {
                        $submittedIds[] = $detail['id'];
                    }
                }

                $detailData = [
                    'text' => $detail['text'] ?? null,
                    'order' => $index,
                ];

                if (isset($detail['image']) && $detail['image'] instanceof \Illuminate\Http\UploadedFile) {
                     // Upload new image
                     $file = $detail['image'];
                     $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                     $file->move(public_path('uploads/portfolios'), $filename);
                     $detailData['image_path'] = 'uploads/portfolios/' . $filename;
                     
                     // Delete old image if updating
                     if ($detailModel && $detailModel->image_path) {
                         if (file_exists(public_path($detailModel->image_path))) {
                             unlink(public_path($detailModel->image_path));
                         }
                     }
                }

                if ($detailModel) {
                    $detailModel->update($detailData);
                } else {
                    $newDetail = $portfolio->details()->create($detailData);
                    $submittedIds[] = $newDetail->id;
                }
            }
        }

        // Delete removed details
        $portfolio->details()->whereNotIn('id', $submittedIds)->get()->each(function($det) {
            if ($det->image_path && file_exists(public_path($det->image_path))) {
                unlink(public_path($det->image_path));
            }
            $det->delete();
        });

        return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio updated successfully.');
    }

    public function destroy(Portfolio $portfolio)
    {
        $this->deleteFile($portfolio->image);
        foreach($portfolio->details as $detail) {
             if ($detail->image_path && file_exists(public_path($detail->image_path))) {
                unlink(public_path($detail->image_path));
            }
            $detail->delete();
        }
        $portfolio->delete();

        return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio deleted successfully.');
    }
}
