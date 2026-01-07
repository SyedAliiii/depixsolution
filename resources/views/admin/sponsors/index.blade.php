@extends('admin.layout')

@section('title', 'Sponsors')

@section('content')
<div class="mb-3 text-end">
    <a href="{{ route('admin.sponsors.create') }}" class="btn btn-primary">
        <i class="fa-solid fa-plus me-1"></i> Add New Sponsor
    </a>
</div>

<div class="table-responsive">
    <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark">
            <tr>
                <th style="width: 50px;">#</th>
                <th style="width: 150px;">Image</th>
                <th>Name</th>
                <th style="width: 80px;">Order</th>
                <th style="width: 150px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sponsors as $sponsor)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                     <img src="{{ asset($sponsor->image) }}" alt="Sponsor" class="img-thumbnail" style="height: 50px;">
                </td>
                <td>{{ $sponsor->name }}</td>
                <td>{{ $sponsor->order }}</td>
                <td>
                    <a href="{{ route('admin.sponsors.edit', $sponsor->id) }}" class="btn btn-sm btn-info text-white">
                        <i class="fa-solid fa-pen"></i>
                    </a>
                    <form action="{{ route('admin.sponsors.destroy', $sponsor->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure?');">
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
