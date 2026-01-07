@extends('admin.layout')

@section('title', 'FAQs')

@section('content')
<div class="mb-3 text-end">
    <a href="{{ route('admin.faqs.create') }}" class="btn btn-primary">
        <i class="fa-solid fa-plus me-1"></i> Add New FAQ
    </a>
</div>

<div class="table-responsive">
    <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark">
            <tr>
                <th style="width: 50px;">#</th>
                <th>Question</th>
                <th style="width: 80px;">Order</th>
                <th style="width: 150px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($faqs as $faq)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $faq->question }}</td>
                <td>{{ $faq->order }}</td>
                <td>
                    <a href="{{ route('admin.faqs.edit', $faq->id) }}" class="btn btn-sm btn-info text-white">
                        <i class="fa-solid fa-pen"></i>
                    </a>
                    <form action="{{ route('admin.faqs.destroy', $faq->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure?');">
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
