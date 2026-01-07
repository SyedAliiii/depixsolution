@extends('admin.layout')

@section('title', 'Add Blog Post')

@section('content')
<form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-8">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required value="{{ old('title') }}">
            </div>
            <div class="mb-3">
                <label for="excerpt" class="form-label">Excerpt</label>
                <textarea class="form-control" id="excerpt" name="excerpt" rows="3">{{ old('excerpt') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="10" required>{{ old('content') }}</textarea>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="image" class="form-label">Featured Image</label>
                <input type="file" class="form-control" id="image" name="image" required accept="image/*">
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <input type="text" class="form-control" id="category" name="category" value="{{ old('category') }}">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="is_published" name="is_published" value="1" checked>
                <label class="form-check-label" for="is_published">Publish Now</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Create Post</button>
        </div>
    </div>
</form>
@endsection
