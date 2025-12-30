@extends('admin.layout')
@section('title', 'Settings')
@section('content')
<div class="top-bar">
    <h1>Site Settings</h1>
</div>
<form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    
    @foreach($settings as $group => $items)
    <div class="card mb-4">
        <div class="card-header text-capitalize">{{ $group }} Settings</div>
        <div class="card-body">
            <div class="row">
                @foreach($items as $setting)
                <div class="col-md-6 mb-3">
                    <label class="form-label text-capitalize">{{ str_replace('_', ' ', $setting->key) }}</label>
                    @if($setting->type === 'image')
                        @if($setting->value)
                        <div class="mb-2"><img src="{{ asset($setting->value) }}" alt="" style="max-height: 50px;"></div>
                        @endif
                        <input type="file" name="settings[{{ $setting->key }}]" class="form-control" accept="image/*">
                    @elseif($setting->type === 'textarea')
                        <textarea name="settings[{{ $setting->key }}]" class="form-control" rows="3">{{ $setting->value }}</textarea>
                    @else
                        <input type="text" name="settings[{{ $setting->key }}]" class="form-control" value="{{ $setting->value }}">
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endforeach
    
    <button type="submit" class="btn btn-primary">Save Settings</button>
</form>
@endsection
