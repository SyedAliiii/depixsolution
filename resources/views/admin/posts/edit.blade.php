@extends('admin.layout')
@section('title', 'Edit Post')
@section('content')
<div class="top-bar">
    <h1>Edit Post</h1>
    <a href="{{ route('admin.posts.index') }}" class="btn btn-outline-secondary">Back</a>
</div>
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="row">
                <div class="col-md-8">
                    <div class="mb-3">
                        <label class="form-label">Title *</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title', $post->title) }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Excerpt</label>
                        <textarea name="excerpt" class="form-control" rows="2">{{ old('excerpt', $post->excerpt) }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Content *</label>
                        <textarea name="content" class="form-control" rows="12" required>{{ old('content', $post->content) }}</textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    @if($post->image)
                    <div class="mb-3">
                        <label class="form-label">Current Image</label>
                        <img src="{{ asset($post->image) }}" alt="" class="img-fluid rounded">
                    </div>
                    @endif
                    <div class="mb-3">
                        <label class="form-label">{{ $post->image ? 'New Image' : 'Featured Image' }}</label>
                        <input type="file" name="image" class="form-control" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <input type="text" name="category" class="form-control" value="{{ old('category', $post->category) }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Author</label>
                        <input type="text" name="author" class="form-control" value="{{ old('author', $post->author) }}">
                    </div>
                    <div class="mb-3">
                        <div class="form-check form-switch">
                            <input type="checkbox" name="is_published" value="1" class="form-check-input" id="is_published" {{ $post->is_published ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_published">Published</label>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
    </div>
</div>
@endsection
