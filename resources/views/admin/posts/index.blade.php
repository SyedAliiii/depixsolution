@extends('admin.layout')

@section('title', 'Blog Posts')

@section('content')
<div class="mb-3 text-end">
    <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">
        <i class="fa-solid fa-plus me-1"></i> Add New Post
    </a>
</div>

<div class="table-responsive">
    <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark">
            <tr>
                <th style="width: 50px;">#</th>
                <th style="width: 100px;">Image</th>
                <th>Title</th>
                <th>Author</th>
                <th>Status</th>
                <th style="width: 150px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <img src="{{ asset($post->image) }}" alt="Post" class="img-thumbnail" style="height: 50px;">
                </td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->author }}</td>
                <td>
                    @if($post->is_published)
                        <span class="badge bg-success">Published</span>
                    @else
                        <span class="badge bg-secondary">Draft</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-sm btn-info text-white">
                        <i class="fa-solid fa-pen"></i>
                    </a>
                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
