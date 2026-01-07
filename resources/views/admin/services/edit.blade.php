@extends('admin.layout')

@section('title', 'Edit Service')

@section('content')
<form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-8">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required value="{{ old('title', $service->title) }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" required>{{ old('description', $service->description) }}</textarea>
            </div>
            <div class="mb-3">
                <label for="features" class="form-label">Features</label>
                <textarea class="form-control" id="features" name="features" rows="2">{{ old('features', is_array($service->features) ? json_encode($service->features) : $service->features) }}</textarea>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="image" class="form-label">Icon / Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                @if($service->image)
                    <div class="mt-2">
                        <img src="{{ asset($service->image) }}" alt="Current Icon" class="img-fluid rounded" style="max-height: 100px;">
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="order" class="form-label">Order</label>
                <input type="number" class="form-control" id="order" name="order" value="{{ old('order', $service->order) }}">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" {{ $service->is_active ? 'checked' : '' }}>
                <label class="form-check-label" for="is_active">Active</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Update Service</button>
        </div>
    </div>
</form>
@endsection
