@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<div class="top-bar">
    <h1>Dashboard</h1>
    <span class="text-muted">Welcome back, {{ auth()->user()->name }}!</span>
</div>

<div class="row g-4 mb-4">
    <div class="col-md-3">
        <div class="card stat-card">
            <div class="stat-value text-primary">{{ $stats['sliders'] }}</div>
            <div class="stat-label">Sliders</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card stat-card">
            <div class="stat-value text-success">{{ $stats['portfolios'] }}</div>
            <div class="stat-label">Portfolio Items</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card stat-card">
            <div class="stat-value text-info">{{ $stats['posts'] }}</div>
            <div class="stat-label">Blog Posts</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card stat-card">
            <div class="stat-value text-warning">{{ $stats['published_posts'] }}</div>
            <div class="stat-label">Published Posts</div>
        </div>
    </div>
</div>

<div class="row g-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>Recent Portfolios</span>
                <a href="{{ route('admin.portfolios.create') }}" class="btn btn-sm btn-primary">Add New</a>
            </div>
            <div class="card-body p-0">
                <table class="table table-hover mb-0">
                    <tbody>
                        @forelse($recentPortfolios as $portfolio)
                        <tr>
                            <td style="width: 60px;">
                                <img src="{{ asset($portfolio->image) }}" alt="" style="width: 50px; height: 50px; object-fit: cover; border-radius: 0.5rem;">
                            </td>
                            <td>
                                <strong>{{ $portfolio->title }}</strong>
                                <div class="text-muted small">{{ $portfolio->category }}</div>
                            </td>
                            <td class="text-end">
                                <a href="{{ route('admin.portfolios.edit', $portfolio) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                            </td>
                        </tr>
                        @empty
                        <tr><td class="text-center text-muted py-4">No portfolios yet</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>Recent Posts</span>
                <a href="{{ route('admin.posts.create') }}" class="btn btn-sm btn-primary">Add New</a>
            </div>
            <div class="card-body p-0">
                <table class="table table-hover mb-0">
                    <tbody>
                        @forelse($recentPosts as $post)
                        <tr>
                            <td>
                                <strong>{{ $post->title }}</strong>
                                <div class="text-muted small">{{ $post->created_at->format('M d, Y') }}</div>
                            </td>
                            <td class="text-end">
                                @if($post->is_published)
                                    <span class="badge bg-success">Published</span>
                                @else
                                    <span class="badge bg-secondary">Draft</span>
                                @endif
                            </td>
                            <td class="text-end">
                                <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                            </td>
                        </tr>
                        @empty
                        <tr><td class="text-center text-muted py-4">No posts yet</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
