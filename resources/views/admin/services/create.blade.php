@extends('admin.layout')

@section('title', 'Add Service')

@section('content')
<form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-8">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required value="{{ old('title') }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" required>{{ old('description') }}</textarea>
            </div>
            
             <div class="mb-3">
                <label for="features" class="form-label">Features (Comma Separated)</label>
                <textarea class="form-control" id="features" name="features" rows="2">{{ old('features') }}</textarea>
                <small class="text-muted">Enter features separated by commas (e.g. Free Support, 24/7 Access)</small>
            </div>
            
            <h5 class="mt-4 mb-3 border-bottom pb-2">Why do we use it? (Details)</h5>
            <div class="mb-3">
                <label for="details_title" class="form-label">Details Title</label>
                <input type="text" class="form-control" id="details_title" name="details_title" value="{{ old('details_title') }}">
            </div>
            <div class="mb-3">
                <label for="details_description" class="form-label">Details Description</label>
                <textarea class="form-control" id="details_description" name="details_description" rows="4">{{ old('details_description') }}</textarea>
            </div>

            <h5 class="mt-4 mb-3 border-bottom pb-2">Our Approach</h5>
            <div class="mb-3">
                <label for="approach_title" class="form-label">Approach Title</label>
                <input type="text" class="form-control" id="approach_title" name="approach_title" value="{{ old('approach_title') }}">
            </div>
            <div class="mb-3">
                <label for="approach_description" class="form-label">Approach Description</label>
                <textarea class="form-control" id="approach_description" name="approach_description" rows="4">{{ old('approach_description') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="approach_image" class="form-label">Approach Image</label>
                <input type="file" class="form-control" id="approach_image" name="approach_image" accept="image/*">
            </div>

            <h5 class="mt-4 mb-3 border-bottom pb-2">UX Process (Steps)</h5>
            <div id="processes-wrapper">
                {{-- Repeater items will be added here --}}
            </div>
            <button type="button" class="btn btn-secondary btn-sm" onclick="addProcess()">+ Add Process Step</button>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="image" class="form-label">Icon / Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
            </div>
             <div class="mb-3">
                <label for="banner_image" class="form-label">Banner Image (Top)</label>
                <input type="file" class="form-control" id="banner_image" name="banner_image" accept="image/*">
            </div>
            <div class="mb-3">
                <label for="order" class="form-label">Order</label>
                <input type="number" class="form-control" id="order" name="order" value="{{ old('order', 0) }}">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" checked>
                <label class="form-check-label" for="is_active">Active</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Create Service</button>
        </div>
    </div>
</form>
@endsection

@push('scripts')
<script>
    let processCount = 0;

    function addProcess() {
        const wrapper = document.getElementById('processes-wrapper');
        const html = `
            <div class="card mb-3 process-item" id="process-${processCount}">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h6>Step ${processCount + 1}</h6>
                        <button type="button" class="btn btn-danger btn-sm" onclick="removeProcess(${processCount})">Remove</button>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="processes[${processCount}][title]" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="processes[${processCount}][description]" rows="2"></textarea>
                    </div>
                </div>
            </div>
        `;
        wrapper.insertAdjacentHTML('beforeend', html);
        processCount++;
    }

    function removeProcess(id) {
        document.getElementById(`process-${id}`).remove();
    }
</script>
@endpush
