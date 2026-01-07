<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Http\Traits\FileUploadTrait;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    use FileUploadTrait;

    public function index()
    {
        // Fetch all settings as key-value pairs
        $settings = Setting::all()->pluck('value', 'key');
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $data = $request->except(['_token', '_method']);

        foreach ($data as $key => $value) {
            $setting = Setting::where('key', $key)->first();
            
            if ($request->hasFile($key)) {
                // If it's a file, upload it
                if ($setting) {
                    $this->deleteFile($setting->value);
                }
                $value = $this->uploadFile($request, $key, 'settings');
            }

            if ($setting) {
                $setting->update(['value' => $value]);
            } else {
                Setting::create([
                   'key' => $key,
                   'value' => $value,
                   'type' => $request->hasFile($key) ? 'image' : 'text'
                ]);
            }
        }

        return redirect()->back()->with('success', 'Settings updated successfully.');
    }
}
