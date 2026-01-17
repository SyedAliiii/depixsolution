@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-md-12">
        <p>Welcome to the Admin Panel. Use the sidebar to manage your website content.</p>
    </div>
    
    <div class="col-md-3 mb-4">
        <div class="card bg-primary text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-uppercase mb-1">Services</h6>
                        <h2 class="mb-0">{{ \App\Models\Service::count() }}</h2>
                    </div>
                    <i class="fa-solid fa-briefcase fa-2x opacity-50"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between small">
                <a class="text-white stretched-link" href="{{ route('admin.services.index') }}">View Details</a>
                <div class="text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 mb-4">
        <div class="card bg-success text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-uppercase mb-1">Projects</h6>
                        <h2 class="mb-0">{{ \App\Models\Portfolio::count() }}</h2>
                    </div>
                    <i class="fa-solid fa-layer-group fa-2x opacity-50"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between small">
                <a class="text-white stretched-link" href="{{ route('admin.portfolios.index') }}">View Details</a>
                <div class="text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 mb-4">
        <div class="card bg-info text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-uppercase mb-1">Posts</h6>
                        <h2 class="mb-0">{{ \App\Models\Post::count() }}</h2>
                    </div>
                    <i class="fa-solid fa-newspaper fa-2x opacity-50"></i>
                </div>
            </div>
            {{-- <div class="card-footer d-flex align-items-center justify-content-between small">
                <a class="text-white stretched-link" href="{{ route('admin.posts.index') }}">View Details</a>
                <div class="text-white"><i class="fas fa-angle-right"></i></div>
            </div> --}}
        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card bg-warning text-dark h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-uppercase mb-1">Messages</h6>
                        <h2 class="mb-0">0</h2> {{-- Placeholder for messages --}}
                    </div>
                    <i class="fa-solid fa-envelope fa-2x opacity-50"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between small">
                <a class="text-dark stretched-link" href="#">View Details</a>
                <div class="text-dark"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>
@endsection
