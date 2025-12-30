<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\Portfolio;
use App\Models\Post;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'sliders' => Slider::count(),
            'portfolios' => Portfolio::count(),
            'posts' => Post::count(),
            'published_posts' => Post::published()->count(),
        ];

        $recentPosts = Post::latest('created_at')->take(5)->get();
        $recentPortfolios = Portfolio::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentPosts', 'recentPortfolios'));
    }
}
