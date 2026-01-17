@extends('admin.layout')

@section('title', 'Add Slider')

@section('content')
<form action="{{ route('admin.sliders.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-8">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required value="{{ old('title') }}">
            </div>
            <div class="mb-3">
                <label for="subtitle" class="form-label">Subtitle (Optional)</label>
                <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ old('subtitle') }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description (Optional)</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="link" class="form-label">Link (Optional)</label>
                <input type="text" class="form-control" id="link" name="link" value="{{ old('link') }}">
            </div>
            <div class="mb-3">
                <label for="button_text" class="form-label">Button Text</label>
                <input type="text" class="form-control" id="button_text" name="button_text" value="{{ old('button_text', 'View Case') }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image" required accept="image/*">
            </div>
            <div class="mb-3">
                <label for="order" class="form-label">Order</label>
                <input type="number" class="form-control" id="order" name="order" value="{{ old('order', 0) }}">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" checked>
                <label class="form-check-label" for="is_active">Active</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Create Slider</button>
        </div>
    </div>
</form>
@endsection
