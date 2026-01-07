<?php

namespace App\Http\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

trait FileUploadTrait
{
    /**
     * Handle file upload to public/uploads directory.
     * 
     * @param Request $request
     * @param string $inputName
     * @param string $folderName
     * @return string|null
     */
    public function uploadFile(Request $request, $inputName = 'image', $folderName = 'uploads')
    {
        if ($request->hasFile($inputName)) {
            $file = $request->file($inputName);
            $fileName = time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
            
            // Move to public/uploads/{folderName}
            $destinationPath = public_path('uploads/' . $folderName);
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }
            
            $file->move($destinationPath, $fileName);
            
            return 'uploads/' . $folderName . '/' . $fileName;
        }
        
        return null;
    }

    /**
     * Delete file from public directory
     * 
     * @param string $path
     * @return bool
     */
    public function deleteFile($path)
    {
        if ($path && File::exists(public_path($path))) {
            return File::delete(public_path($path));
        }
        return false;
    }
}
