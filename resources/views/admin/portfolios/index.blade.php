@extends('admin.layout')
@section('title', 'Portfolios')
@section('content')
<div class="top-bar">
    <h1>Portfolios</h1>
    <a href="{{ route('admin.portfolios.create') }}" class="btn btn-primary"><i class="bi bi-plus-lg me-1"></i>Add Portfolio</a>
</div>
<div class="card">
    <div class="card-body p-0">
        <table class="table table-hover mb-0">
            <thead><tr><th style="width:80px">Image</th><th>Title</th><th>Category</th><th>Order</th><th>Status</th><th class="text-end">Actions</th></tr></thead>
            <tbody>
                @forelse($portfolios as $portfolio)
                <tr>
                    <td><img src="{{ asset($portfolio->image) }}" alt="" style="width:60px;height:40px;object-fit:cover;border-radius:4px;"></td>
                    <td><strong>{{ $portfolio->title }}</strong></td>
                    <td><span class="badge bg-primary">{{ $portfolio->category }}</span></td>
                    <td>{{ $portfolio->order }}</td>
                    <td>@if($portfolio->is_active)<span class="badge bg-success">Active</span>@else<span class="badge bg-secondary">Inactive</span>@endif</td>
                    <td class="text-end">
                        <a href="{{ route('admin.portfolios.edit', $portfolio) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                        <form action="{{ route('admin.portfolios.destroy', $portfolio) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this portfolio?')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger">Delete</button></form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="6" class="text-center py-4 text-muted">No portfolios yet</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
