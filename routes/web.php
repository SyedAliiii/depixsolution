<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SettingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// =============================================
// ADMIN ROUTES
// =============================================

// Admin Auth
Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// Admin Protected Routes
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index']);
    
    Route::resource('sliders', SliderController::class)->except(['show']);
    Route::resource('portfolios', PortfolioController::class)->except(['show']);
    Route::resource('posts', PostController::class)->except(['show']);
    
    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::put('/settings', [SettingController::class, 'update'])->name('settings.update');
});

// =============================================
// FRONTEND ROUTES
// =============================================

// Home Pages
Route::get('/', function () {
    $sliders = \App\Models\Slider::active()->ordered()->get();
    return view('pages.index', compact('sliders'));
})->name('home');

Route::get('/slider-parallax', function () {
    $sliders = \App\Models\Slider::active()->ordered()->get();
    return view('pages.slider-parallax', compact('sliders'));
})->name('slider.parallax');

Route::get('/slider-carousel', function () {
    $sliders = \App\Models\Slider::active()->ordered()->get();
    return view('pages.slider-carousel', compact('sliders'));
})->name('slider.carousel');

// Portfolio Pages
Route::get('/portfolio-1', function () {
    $portfolios = \App\Models\Portfolio::active()->ordered()->get();
    return view('pages.portfolio-1', compact('portfolios'));
})->name('portfolio.1');

Route::get('/portfolio-2', function () {
    $portfolios = \App\Models\Portfolio::active()->ordered()->get();
    return view('pages.portfolio-2', compact('portfolios'));
})->name('portfolio.2');

Route::get('/portfolio-3', function () {
    $portfolios = \App\Models\Portfolio::active()->ordered()->get();
    return view('pages.portfolio-3', compact('portfolios'));
})->name('portfolio.3');

Route::get('/portfolio-4', function () {
    $portfolios = \App\Models\Portfolio::active()->ordered()->get();
    return view('pages.portfolio-4', compact('portfolios'));
})->name('portfolio.4');

Route::get('/portfolio-5', function () {
    $portfolios = \App\Models\Portfolio::active()->ordered()->get();
    return view('pages.portfolio-5', compact('portfolios'));
})->name('portfolio.5');

Route::get('/portfolio/{portfolio:slug}', function (\App\Models\Portfolio $portfolio) {
    $nextPortfolio = \App\Models\Portfolio::active()->where('order', '>', $portfolio->order)->first() 
        ?? \App\Models\Portfolio::active()->first();
    return view('pages.single-portfolio', compact('portfolio', 'nextPortfolio'));
})->name('portfolio.single');

// Blog Pages
Route::get('/blog', function () {
    $posts = \App\Models\Post::published()->latest()->paginate(10);
    $recentPosts = \App\Models\Post::published()->latest()->take(5)->get();
    return view('pages.blog-sidebar', compact('posts', 'recentPosts'));
})->name('blog.sidebar');

Route::get('/blog-no-sidebar', function () {
    $posts = \App\Models\Post::published()->latest()->paginate(10);
    $recentPosts = \App\Models\Post::published()->latest()->take(5)->get();
    return view('pages.blog-no-sidebar', compact('posts', 'recentPosts'));
})->name('blog.no-sidebar');

Route::get('/blog-list', function () {
    $posts = \App\Models\Post::published()->latest()->paginate(10);
    $recentPosts = \App\Models\Post::published()->latest()->take(5)->get();
    return view('pages.blog-list', compact('posts', 'recentPosts'));
})->name('blog.list');

Route::get('/blog-card', function () {
    $posts = \App\Models\Post::published()->latest()->paginate(10);
    $recentPosts = \App\Models\Post::published()->latest()->take(5)->get();
    return view('pages.blog-card', compact('posts', 'recentPosts'));
})->name('blog.card');

Route::get('/blog/{post:slug}', function (\App\Models\Post $post) {
    $recentPosts = \App\Models\Post::published()->where('id', '!=', $post->id)->latest()->take(5)->get();
    return view('pages.single-post', compact('post', 'recentPosts'));
})->name('blog.post');

// Other Pages
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contacts', function () {
    return view('pages.contacts');
})->name('contacts');

Route::get('/404', function () {
    return view('errors.404');
})->name('error.404');
