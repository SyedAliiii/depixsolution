@extends('admin.layout')

@section('title', 'Sliders')

@section('content')
<div class="mb-3 text-end">
    <a href="{{ route('admin.sliders.create') }}" class="btn btn-primary">
        <i class="fa-solid fa-plus me-1"></i> Add New Slider
    </a>
</div>

<div class="table-responsive">
    <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark">
            <tr>
                <th style="width: 50px;">#</th>
                <th style="width: 100px;">Image</th>
                <th>Title</th>
                <th>Subtitle</th>
                <th>Description</th>
                <th style="width: 80px;">Order</th>
                <th style="width: 150px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sliders as $slider)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <img src="{{ asset($slider->image) }}" alt="Slider Image" class="img-thumbnail" style="height: 50px;">
                </td>
                <td>{{ $slider->title }}</td>
                <td>{{ $slider->subtitle }}</td>
                <td>{{ Str::limit($slider->description, 50) }}</td>
                <td>{{ $slider->order }}</td>
                <td>
                    <a href="{{ route('admin.sliders.edit', $slider->id) }}" class="btn btn-sm btn-info text-white">
                        <i class="fa-solid fa-pen"></i>
                    </a>
                    <form action="{{ route('admin.sliders.destroy', $slider->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure?');">
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
