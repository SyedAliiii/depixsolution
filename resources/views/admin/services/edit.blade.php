@extends('admin.layout')

@section('title', 'Edit Service')

@section('content')
<form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-8">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required value="{{ old('title', $service->title) }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" required>{{ old('description', $service->description) }}</textarea>
            </div>

             <div class="mb-3">
                <label for="features" class="form-label">Features (Comma Separated)</label>
                <textarea class="form-control" id="features" name="features" rows="2">{{ old('features', is_array($service->features) ? implode(', ', $service->features) : $service->features) }}</textarea>
                 <small class="text-muted">Enter features separated by commas</small>
            </div>
            
            <h5 class="mt-4 mb-3 border-bottom pb-2">Why do we use it? (Details)</h5>
            <div class="mb-3">
                <label for="details_title" class="form-label">Details Title</label>
                <input type="text" class="form-control" id="details_title" name="details_title" value="{{ old('details_title', $service->details_title) }}">
            </div>
            <div class="mb-3">
                <label for="details_description" class="form-label">Details Description</label>
                <textarea class="form-control" id="details_description" name="details_description" rows="4">{{ old('details_description', $service->details_description) }}</textarea>
            </div>

            <h5 class="mt-4 mb-3 border-bottom pb-2">Our Approach</h5>
            <div class="mb-3">
                <label for="approach_title" class="form-label">Approach Title</label>
                <input type="text" class="form-control" id="approach_title" name="approach_title" value="{{ old('approach_title', $service->approach_title) }}">
            </div>
            <div class="mb-3">
                <label for="approach_description" class="form-label">Approach Description</label>
                <textarea class="form-control" id="approach_description" name="approach_description" rows="4">{{ old('approach_description', $service->approach_description) }}</textarea>
            </div>
            <div class="mb-3">
                <label for="approach_image" class="form-label">Approach Image</label>
                <input type="file" class="form-control" id="approach_image" name="approach_image" accept="image/*">
                 @if($service->approach_image)
                    <div class="mt-2">
                        <img src="{{ asset($service->approach_image) }}" alt="Approach Image" class="img-fluid rounded" style="max-height: 100px;">
                    </div>
                @endif
            </div>

            <h5 class="mt-4 mb-3 border-bottom pb-2">UX Process (Steps)</h5>
            <div id="processes-wrapper">
                @foreach($service->processes as $index => $process)
                <div class="card mb-3 process-item" id="process-{{ $index }}">
                    <input type="hidden" name="processes[{{ $index }}][id]" value="{{ $process->id }}">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h6>Step {{ $index + 1 }}</h6>
                            <button type="button" class="btn btn-danger btn-sm" onclick="removeProcess({{ $index }})">Remove</button>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="processes[{{ $index }}][title]" required value="{{ $process->title }}">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" name="processes[{{ $index }}][description]" rows="2">{{ $process->description }}</textarea>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <button type="button" class="btn btn-secondary btn-sm" onclick="addProcess()">+ Add Process Step</button>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="image" class="form-label">Icon / Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                @if($service->image)
                    <div class="mt-2">
                        <img src="{{ asset($service->image) }}" alt="Current Icon" class="img-fluid rounded" style="max-height: 100px;">
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="order" class="form-label">Order</label>
                <input type="number" class="form-control" id="order" name="order" value="{{ old('order', $service->order) }}">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" {{ $service->is_active ? 'checked' : '' }}>
                <label class="form-check-label" for="is_active">Active</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Update Service</button>
        </div>
    </div>
</form>
@endsection

@push('scripts')
<script>
    let processCount = {{ $service->processes->count() }};

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
