<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Post;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Team;
use App\Models\Slider;
use App\Models\Portfolio;
use App\Models\Faq;
use App\Models\Skill;
use App\Models\Sponsor;
use App\Models\Setting;

class FrontendController extends Controller
{
    public function home()
    {
        $settings = Setting::all()->pluck('value', 'key')->toArray();
        $sliders = Slider::active()->ordered()->get();
        $services = Service::active()->ordered()->take(6)->get();
        $portfolios = Portfolio::active()->ordered()->take(6)->get();
        $testimonials = Testimonial::active()->get();
// $posts = Post::published()->latest()->take(3)->get();
        $skills = Skill::active()->ordered()->get();
        $sponsors = Sponsor::active()->ordered()->get();
        
return view('pages.home', compact('sliders', 'services', 'portfolios', 'testimonials', 'skills', 'sponsors', 'settings'));
    }

    public function about()
    {
        $teams = Team::active()->ordered()->get();
        $skills = Skill::active()->ordered()->get();
        $testimonials = Testimonial::active()->get(); // If needed for about page
        return view('pages.about', compact('teams', 'skills', 'testimonials'));
    }

    public function services()
    {
        $services = Service::where('is_active', true)->orderBy('order')->get();
        $testimonials = Testimonial::where('is_active', true)->latest()->get();
        return view('pages.services', compact('services', 'testimonials'));
    }

    public function serviceShow($slug)
    {
        $service = Service::where('slug', $slug)->where('is_active', true)->firstOrFail();
        $testimonials = Testimonial::where('is_active', true)->latest()->get();
        return view('pages.single-service', compact('service', 'testimonials'));
    }

    public function portfolio()
    {
        $portfolios = Portfolio::where('is_active', true)->orderBy('order')->get();
        return view('pages.portfolio', compact('portfolios'));
    }

    public function portfolioShow($slug)
    {
        $portfolio = Portfolio::where('slug', $slug)->where('is_active', true)->firstOrFail();
        return view('pages.single-portfolio', compact('portfolio'));
    }

    // public function blog()
    // {
    //     $posts = Post::where('is_published', true)->latest()->paginate(10);
    //     return view('pages.blog', compact('posts'));
    // }

    // public function blogPost($slug)
    // {
    //     $post = Post::where('slug', $slug)->where('is_published', true)->firstOrFail();
    //     return view('pages.single-post', compact('post'));
    // }

    public function faq()
    {
        $faqs = Faq::active()->ordered()->get();
        return view('pages.faq', compact('faqs'));
    }

    public function teams()
    {
        $teams = Team::active()->ordered()->get();
        return view('pages.teams', compact('teams'));
    }

    public function contact()
    {
        // Settings are global usually, but we can pass specific ones if needed
        return view('pages.contact');
    }
}
