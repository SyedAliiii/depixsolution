@extends('admin.layout')

@section('title', 'Create Skill')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Create New Skill</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.skills.store') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="percent" class="form-label">Percent (0-100)</label>
                <input type="number" class="form-control" id="percent" name="percent" min="0" max="100" required>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="order" class="form-label">Order</label>
                    <input type="number" class="form-control" id="order" name="order" value="0">
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-check mt-4">
                        <input type="hidden" name="is_active" value="0">
                        <input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active" checked>
                        <label class="form-check-label" for="is_active">
                            Is Active
                        </label>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Create Skill</button>
            <a href="{{ route('admin.skills.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
