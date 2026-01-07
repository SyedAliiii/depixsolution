@extends('admin.layout')

@section('title', 'Portfolios')

@section('content')
<div class="mb-3 text-end">
    <a href="{{ route('admin.portfolios.create') }}" class="btn btn-primary">
        <i class="fa-solid fa-plus me-1"></i> Add New Project
    </a>
</div>

<div class="table-responsive">
    <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark">
            <tr>
                <th style="width: 50px;">#</th>
                <th style="width: 100px;">Image</th>
                <th>Title</th>
                <th>Category</th>
                <th style="width: 80px;">Order</th>
                <th style="width: 150px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($portfolios as $portfolio)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <img src="{{ asset($portfolio->image) }}" alt="Project" class="img-thumbnail" style="height: 50px;">
                </td>
                <td>{{ $portfolio->title }}</td>
                <td>{{ $portfolio->category }}</td>
                <td>{{ $portfolio->order }}</td>
                <td>
                    <a href="{{ route('admin.portfolios.edit', $portfolio->id) }}" class="btn btn-sm btn-info text-white">
                        <i class="fa-solid fa-pen"></i>
                    </a>
                    <form action="{{ route('admin.portfolios.destroy', $portfolio->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure?');">
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
