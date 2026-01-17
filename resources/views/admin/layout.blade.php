<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/all.css') }}">
    <style>
        body { min-height: 100vh; display: flex; flex-direction: column; }
        .wrapper { display: flex; flex: 1; }
        .sidebar { width: 250px; background: #343a40; color: #fff; min-height: 100vh; }
        .sidebar a { color: #adb5bd; text-decoration: none; display: block; padding: 10px 20px; }
        .sidebar a:hover, .sidebar a.active { background: #495057; color: #fff; }
        .sidebar .brand { padding: 20px; font-size: 1.5rem; font-weight: bold; text-align: center; border-bottom: 1px solid #4b545c; }
        .main-content { flex: 1; padding: 20px; background: #f8f9fa; }
        .nav-item { border-bottom: 1px solid #3d444b; }
    </style>
</head>
<body>

<div class="wrapper">
    <!-- Sidebar -->
    <nav class="sidebar">
        <div class="brand">Admin Panel</div>
        <div class="nav flex-column">
            <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class="fa-solid fa-gauge me-2"></i> Dashboard
            </a>
            <a href="{{ route('admin.sliders.index') }}" class="{{ request()->routeIs('admin.sliders.*') ? 'active' : '' }}">
                <i class="fa-solid fa-images me-2"></i> Sliders
            </a>
            <a href="{{ route('admin.services.index') }}" class="{{ request()->routeIs('admin.services.*') ? 'active' : '' }}">
                <i class="fa-solid fa-briefcase me-2"></i> Services
            </a>
            <a href="{{ route('admin.portfolios.index') }}" class="{{ request()->routeIs('admin.portfolios.*') ? 'active' : '' }}">
                <i class="fa-solid fa-layer-group me-2"></i> Portfolio
            </a>
            <a href="{{ route('admin.testimonials.index') }}" class="{{ request()->routeIs('admin.testimonials.*') ? 'active' : '' }}">
                <i class="fa-solid fa-comments me-2"></i> Testimonials
            </a>
            <a href="{{ route('admin.teams.index') }}" class="{{ request()->routeIs('admin.teams.*') ? 'active' : '' }}">
                <i class="fa-solid fa-users me-2"></i> Team
            </a>
            <a href="{{ route('admin.skills.index') }}" class="{{ request()->routeIs('admin.skills.*') ? 'active' : '' }}">
                <i class="fa-solid fa-chart-line me-2"></i> Skills
            </a>
            <a href="{{ route('admin.sponsors.index') }}" class="{{ request()->routeIs('admin.sponsors.*') ? 'active' : '' }}">
                <i class="fa-solid fa-handshake me-2"></i> Sponsors
            </a>
            <a href="{{ route('admin.faqs.index') }}" class="{{ request()->routeIs('admin.faqs.*') ? 'active' : '' }}">
                <i class="fa-solid fa-question-circle me-2"></i> FAQs
            </a>
            {{-- <a href="{{ route('admin.posts.index') }}" class="{{ request()->routeIs('admin.posts.*') ? 'active' : '' }}">
                <i class="fa-solid fa-newspaper me-2"></i> Blog Posts
            </a> --}}
            <a href="{{ route('admin.settings.index') }}" class="{{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">
                <i class="fa-solid fa-gear me-2"></i> Settings
            </a>
            <form action="{{ route('admin.logout') }}" method="POST" class="mt-4">
                @csrf
                <button type="submit" class="btn btn-danger w-100 rounded-0 text-start px-4">
                    <i class="fa-solid fa-sign-out-alt me-2"></i> Logout
                </button>
            </form>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
        <header class="mb-4 d-flex justify-content-between align-items-center">
            <h3>@yield('title')</h3>
            <div>
                <a href="{{ route('home') }}" target="_blank" class="btn btn-outline-primary btn-sm">Visit Site</a>
            </div>
        </header>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card shadow-sm">
            <div class="card-body">
                @yield('content')
            </div>
        </div>
    </main>
</div>

<script src="{{ asset('assets/vendor/jquery/jquery-3.7.0.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
@stack('scripts')
</body>
</html>
