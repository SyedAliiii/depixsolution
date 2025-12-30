<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin') - Depix Solution</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --sidebar-width: 250px;
            --primary-color: #6366f1;
            --dark-bg: #1e1e2d;
            --darker-bg: #151521;
        }
        body { background: #f5f5f9; min-height: 100vh; }
        .sidebar {
            position: fixed; left: 0; top: 0; bottom: 0;
            width: var(--sidebar-width); background: var(--dark-bg);
            padding: 1rem 0; z-index: 1000;
        }
        .sidebar-brand {
            padding: 1rem 1.5rem; margin-bottom: 1rem;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        .sidebar-brand h4 { color: #fff; margin: 0; font-weight: 600; }
        .sidebar-nav { list-style: none; padding: 0; margin: 0; }
        .sidebar-nav li a {
            display: flex; align-items: center; gap: 0.75rem;
            padding: 0.875rem 1.5rem; color: rgba(255,255,255,0.7);
            text-decoration: none; transition: all 0.2s;
        }
        .sidebar-nav li a:hover, .sidebar-nav li a.active {
            color: #fff; background: rgba(255,255,255,0.08);
        }
        .sidebar-nav li a.active { border-left: 3px solid var(--primary-color); }
        .sidebar-nav li a i { font-size: 1.1rem; }
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 2rem;
        }
        .top-bar {
            display: flex; justify-content: space-between; align-items: center;
            margin-bottom: 2rem; padding-bottom: 1rem;
            border-bottom: 1px solid #e5e5e5;
        }
        .top-bar h1 { font-size: 1.5rem; font-weight: 600; margin: 0; }
        .card { border: none; box-shadow: 0 0 20px rgba(0,0,0,0.05); border-radius: 0.75rem; }
        .card-header { background: #fff; border-bottom: 1px solid #f0f0f0; font-weight: 600; }
        .btn-primary { background: var(--primary-color); border-color: var(--primary-color); }
        .btn-primary:hover { background: #5558e3; border-color: #5558e3; }
        .table th { font-weight: 600; color: #666; font-size: 0.875rem; text-transform: uppercase; }
        .badge { font-weight: 500; }
        .stat-card { padding: 1.5rem; }
        .stat-card .stat-value { font-size: 2rem; font-weight: 700; }
        .stat-card .stat-label { color: #888; font-size: 0.875rem; }
    </style>
    @stack('styles')
</head>
<body>
    <aside class="sidebar">
        <div class="sidebar-brand">
            <h4><i class="bi bi-grid-1x2-fill me-2"></i>Admin</h4>
        </div>
        <ul class="sidebar-nav">
            <li><a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a></li>
            <li><a href="{{ route('admin.sliders.index') }}" class="{{ request()->routeIs('admin.sliders.*') ? 'active' : '' }}">
                <i class="bi bi-images"></i> Sliders
            </a></li>
            <li><a href="{{ route('admin.portfolios.index') }}" class="{{ request()->routeIs('admin.portfolios.*') ? 'active' : '' }}">
                <i class="bi bi-briefcase"></i> Portfolios
            </a></li>
            <li><a href="{{ route('admin.posts.index') }}" class="{{ request()->routeIs('admin.posts.*') ? 'active' : '' }}">
                <i class="bi bi-file-earmark-text"></i> Blog Posts
            </a></li>
            <li><a href="{{ route('admin.settings.index') }}" class="{{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">
                <i class="bi bi-gear"></i> Settings
            </a></li>
            <li><a href="{{ route('home') }}" target="_blank">
                <i class="bi bi-box-arrow-up-right"></i> View Site
            </a></li>
            <li><a href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-left"></i> Logout
            </a></li>
        </ul>
        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">@csrf</form>
    </aside>

    <main class="main-content">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
