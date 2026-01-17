@extends('admin.layout')

@section('title', 'Add Project')

@section('content')
<form action="{{ route('admin.portfolios.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-8">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required value="{{ old('title') }}">
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <input type="text" class="form-control" id="category" name="category" required value="{{ old('category') }}" placeholder="e.g. Web Design">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4">{{ old('description') }}</textarea>
            </div>

             <div class="mb-3">
                <label class="form-label">Portfolio Details (Multiple Image & Text)</label>
                <div id="details-container">
                    <!-- Repeater Interface -->
                </div>
                <button type="button" class="btn btn-secondary mt-2" onclick="addDetail()">+ Add Detail Block</button>
            </div>

            <script>
                let detailIndex = 0;
                function addDetail() {
                    const container = document.getElementById('details-container');
                    const html = `
                        <div class="card mb-3 p-3 detail-block" id="detail-${detailIndex}">
                            <div class="d-flex justify-content-between">
                                <h5>Detail Block ${detailIndex + 1}</h5>
                                <button type="button" class="btn btn-danger btn-sm" onclick="removeDetail(${detailIndex})">Remove</button>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" name="details[${detailIndex}][image]" accept="image/*">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Text</label>
                                <textarea class="form-control" name="details[${detailIndex}][text]" rows="3"></textarea>
                            </div>
                        </div>
                    `;
                    container.insertAdjacentHTML('beforeend', html);
                    detailIndex++;
                }
                function removeDetail(index) {
                     document.getElementById(`detail-${index}`).remove();
                }
            </script>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="image" class="form-label">Main Image</label>
                <input type="file" class="form-control" id="image" name="image" required accept="image/*">
            </div>
            <div class="mb-3">
                <label for="order" class="form-label">Order</label>
                <input type="number" class="form-control" id="order" name="order" value="{{ old('order', 0) }}">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" checked>
                <label class="form-check-label" for="is_active">Active</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Create Project</button>
        </div>
    </div>
</form>
@endsection
