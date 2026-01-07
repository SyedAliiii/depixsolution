@extends('admin.layout')

@section('title', 'Edit Slider')

@section('content')
<form action="{{ route('admin.sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-8">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required value="{{ old('title', $slider->title) }}">
            </div>
            <div class="mb-3">
                <label for="subtitle" class="form-label">Subtitle (Optional)</label>
                <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ old('subtitle', $slider->subtitle) }}">
            </div>
            <div class="mb-3">
                <label for="link" class="form-label">Link (Optional)</label>
                <input type="text" class="form-control" id="link" name="link" value="{{ old('link', $slider->link) }}">
            </div>
            <div class="mb-3">
                <label for="button_text" class="form-label">Button Text</label>
                <input type="text" class="form-control" id="button_text" name="button_text" value="{{ old('button_text', $slider->button_text) }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="image" class="form-label">Image (Leave empty to keep current)</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                @if($slider->image)
                    <div class="mt-2">
                        <img src="{{ asset($slider->image) }}" alt="Current Image" class="img-fluid rounded" style="max-height: 150px;">
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="order" class="form-label">Order</label>
                <input type="number" class="form-control" id="order" name="order" value="{{ old('order', $slider->order) }}">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" {{ $slider->is_active ? 'checked' : '' }}>
                <label class="form-check-label" for="is_active">Active</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Update Slider</button>
        </div>
    </div>
</form>
@endsection
