@extends('admin.layout')

@section('title', 'Testimonials')

@section('content')
<div class="mb-3 text-end">
    <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary">
        <i class="fa-solid fa-plus me-1"></i> Add New Testimonial
    </a>
</div>

<div class="table-responsive">
    <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark">
            <tr>
                <th style="width: 50px;">#</th>
                <th style="width: 100px;">Image</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Rating</th>
                <th style="width: 150px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($testimonials as $testimonial)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    @if($testimonial->image)
                        <img src="{{ asset($testimonial->image) }}" alt="Client" class="img-thumbnail" style="height: 50px;">
                    @else
                        <span class="badge bg-secondary">No Image</span>
                    @endif
                </td>
                <td>{{ $testimonial->name }}</td>
                <td>{{ $testimonial->designation }}</td>
                <td>{{ $testimonial->rating }} <i class="fa-solid fa-star text-warning"></i></td>
                <td>
                    <a href="{{ route('admin.testimonials.edit', $testimonial->id) }}" class="btn btn-sm btn-info text-white">
                        <i class="fa-solid fa-pen"></i>
                    </a>
                    <form action="{{ route('admin.testimonials.destroy', $testimonial->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure?');">
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
