<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TestimonialController;
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
    Route::resource('services', ServiceController::class)->except(['show']);
    Route::resource('testimonials', TestimonialController::class)->except(['show']);
    Route::resource('teams', \App\Http\Controllers\Admin\TeamController::class);
    Route::resource('faqs', \App\Http\Controllers\Admin\FaqController::class);
    Route::resource('skills', \App\Http\Controllers\Admin\SkillController::class);
    Route::resource('sponsors', \App\Http\Controllers\Admin\SponsorController::class);
    
    Route::get('/settings', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('settings.index');
    Route::put('/settings', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('settings.update');
});

// =============================================
// FRONTEND ROUTES
// =============================================

// =============================================
// FRONTEND ROUTES
// =============================================

use App\Http\Controllers\FrontendController;

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/services', [FrontendController::class, 'services'])->name('services.index');
Route::get('/services/{slug}', [FrontendController::class, 'serviceShow'])->name('services.show');
Route::get('/portfolio', [FrontendController::class, 'portfolio'])->name('portfolio.index');
Route::get('/portfolio/{slug}', [FrontendController::class, 'portfolioShow'])->name('portfolio.show');
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog.index');
Route::get('/blog/{slug}', [FrontendController::class, 'blogPost'])->name('blog.show');
Route::get('/faq', [FrontendController::class, 'faq'])->name('faq');
Route::get('/teams', [FrontendController::class, 'teams'])->name('teams');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
