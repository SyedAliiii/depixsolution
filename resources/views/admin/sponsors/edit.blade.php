@extends('admin.layout')

@section('title', 'Edit Sponsor')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Edit Sponsor</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.sponsors.update', $sponsor->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="name" class="form-label">Name (Optional)</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $sponsor->name }}">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
                @if($sponsor->image)
                    <div class="mt-2">
                        <img src="{{ asset($sponsor->image) }}" alt="Current Image" class="img-thumbnail" style="height: 100px;">
                    </div>
                @endif
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="order" class="form-label">Order</label>
                    <input type="number" class="form-control" id="order" name="order" value="{{ $sponsor->order }}">
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-check mt-4">
                        <input class="form-check-input" type="checkbox" id="is_active" name="is_active" {{ $sponsor->is_active ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_active">
                            Is Active
                        </label>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Update Sponsor</button>
            <a href="{{ route('admin.sponsors.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
