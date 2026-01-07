@extends('admin.layout')

@section('title', 'Edit Testimonial')

@section('content')
<form action="{{ route('admin.testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-8">
            <div class="mb-3">
                <label for="name" class="form-label">Client Name</label>
                <input type="text" class="form-control" id="name" name="name" required value="{{ old('name', $testimonial->name) }}">
            </div>
            <div class="mb-3">
                <label for="designation" class="form-label">Designation</label>
                <input type="text" class="form-control" id="designation" name="designation" value="{{ old('designation', $testimonial->designation) }}">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Feedback</label>
                <textarea class="form-control" id="content" name="content" rows="4" required>{{ old('content', $testimonial->content) }}</textarea>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="image" class="form-label">Client Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                @if($testimonial->image)
                    <div class="mt-2">
                        <img src="{{ asset($testimonial->image) }}" alt="Current Image" class="img-fluid rounded" style="max-height: 100px;">
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Rating (1-5)</label>
                <input type="number" class="form-control" id="rating" name="rating" min="1" max="5" value="{{ old('rating', $testimonial->rating) }}">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" {{ $testimonial->is_active ? 'checked' : '' }}>
                <label class="form-check-label" for="is_active">Active</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Update Testimonial</button>
        </div>
    </div>
</form>
@endsection
