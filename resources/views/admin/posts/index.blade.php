@extends('admin.layout')
@section('title', 'Blog Posts')
@section('content')
<div class="top-bar">
    <h1>Blog Posts</h1>
    <a href="{{ route('admin.posts.create') }}" class="btn btn-primary"><i class="bi bi-plus-lg me-1"></i>Add Post</a>
</div>
<div class="card">
    <div class="card-body p-0">
        <table class="table table-hover mb-0">
            <thead><tr><th>Title</th><th>Category</th><th>Author</th><th>Date</th><th>Status</th><th class="text-end">Actions</th></tr></thead>
            <tbody>
                @forelse($posts as $post)
                <tr>
                    <td><strong>{{ $post->title }}</strong></td>
                    <td>{{ $post->category }}</td>
                    <td>{{ $post->author }}</td>
                    <td>{{ $post->created_at->format('M d, Y') }}</td>
                    <td>@if($post->is_published)<span class="badge bg-success">Published</span>@else<span class="badge bg-secondary">Draft</span>@endif</td>
                    <td class="text-end">
                        <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                        <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this post?')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger">Delete</button></form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="6" class="text-center py-4 text-muted">No posts yet</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
