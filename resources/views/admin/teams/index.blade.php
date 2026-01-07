@extends('admin.layout')

@section('title', 'Team Members')

@section('content')
<div class="mb-3 text-end">
    <a href="{{ route('admin.teams.create') }}" class="btn btn-primary">
        <i class="fa-solid fa-plus me-1"></i> Add New Member
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
                <th style="width: 80px;">Order</th>
                <th style="width: 150px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teams as $team)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <img src="{{ asset($team->image) }}" alt="Team" class="img-thumbnail" style="height: 50px;">
                </td>
                <td>{{ $team->name }}</td>
                <td>{{ $team->designation }}</td>
                <td>{{ $team->order }}</td>
                <td>
                    <a href="{{ route('admin.teams.edit', $team->id) }}" class="btn btn-sm btn-info text-white">
                        <i class="fa-solid fa-pen"></i>
                    </a>
                    <form action="{{ route('admin.teams.destroy', $team->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure?');">
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
