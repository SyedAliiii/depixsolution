@extends('admin.layout')

@section('title', 'Edit FAQ')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Edit FAQ</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.faqs.update', $faq->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="question" class="form-label">Question</label>
                <input type="text" class="form-control" id="question" name="question" value="{{ $faq->question }}" required>
            </div>

            <div class="mb-3">
                <label for="answer" class="form-label">Answer</label>
                <textarea class="form-control" id="answer" name="answer" rows="5" required>{{ $faq->answer }}</textarea>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="order" class="form-label">Order</label>
                    <input type="number" class="form-control" id="order" name="order" value="{{ $faq->order }}">
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-check mt-4">
                        <input class="form-check-input" type="checkbox" id="is_active" name="is_active" {{ $faq->is_active ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_active">
                            Is Active
                        </label>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Update FAQ</button>
            <a href="{{ route('admin.faqs.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
