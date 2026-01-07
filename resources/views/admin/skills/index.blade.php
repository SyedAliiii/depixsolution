@extends('admin.layout')

@section('title', 'Skills')

@section('content')
<div class="mb-3 text-end">
    <a href="{{ route('admin.skills.create') }}" class="btn btn-primary">
        <i class="fa-solid fa-plus me-1"></i> Add New Skill
    </a>
</div>

<div class="table-responsive">
    <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark">
            <tr>
                <th style="width: 50px;">#</th>
                <th>Name</th>
                <th>Percent</th>
                <th style="width: 80px;">Order</th>
                <th style="width: 150px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($skills as $skill)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $skill->name }}</td>
                <td>{{ $skill->percent }}%</td>
                <td>{{ $skill->order }}</td>
                <td>
                    <a href="{{ route('admin.skills.edit', $skill->id) }}" class="btn btn-sm btn-info text-white">
                        <i class="fa-solid fa-pen"></i>
                    </a>
                    <form action="{{ route('admin.skills.destroy', $skill->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure?');">
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
