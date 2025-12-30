@extends('admin.layout')
@section('title', 'Sliders')
@section('content')
<div class="top-bar">
    <h1>Sliders</h1>
    <a href="{{ route('admin.sliders.create') }}" class="btn btn-primary"><i class="bi bi-plus-lg me-1"></i>Add Slider</a>
</div>
<div class="card">
    <div class="card-body p-0">
        <table class="table table-hover mb-0">
            <thead><tr><th style="width:80px">Image</th><th>Title</th><th>Category</th><th>Order</th><th>Status</th><th class="text-end">Actions</th></tr></thead>
            <tbody>
                @forelse($sliders as $slider)
                <tr>
                    <td><img src="{{ asset($slider->image) }}" alt="" style="width:60px;height:40px;object-fit:cover;border-radius:4px;"></td>
                    <td><strong>{{ $slider->title }}</strong></td>
                    <td>{{ $slider->category }}</td>
                    <td>{{ $slider->order }}</td>
                    <td>@if($slider->is_active)<span class="badge bg-success">Active</span>@else<span class="badge bg-secondary">Inactive</span>@endif</td>
                    <td class="text-end">
                        <a href="{{ route('admin.sliders.edit', $slider) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                        <form action="{{ route('admin.sliders.destroy', $slider) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this slider?')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger">Delete</button></form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="6" class="text-center py-4 text-muted">No sliders yet</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
