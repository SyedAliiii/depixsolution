@extends('layouts.app')

@section('title', 'Single Portfolio')

@section('content')
<!--Hero-->
<div class="margin-top-xl"></div>
<section class="hero hero--overlay-layer hero-default">
    <div class="container">
        <div class="hero__content text-left"><span>Single Portfolio Page</span>
            <h1>{{ $portfolio->title }}</h1>
            <p>{{ $portfolio->description }}</p>
        </div>
    </div>
</section>
<div class="container ms-content--portfolio">
    <div class="row grid-content blockgallery">
        @if($portfolio->gallery && count($portfolio->gallery) > 0)
            @foreach($portfolio->gallery as $image)
            <div class="grid-sizer col-xs-12 col-md-4 col-sm-3"></div>
            <div class="grid-item col-xs-12 col-md-4 col-sm-3">
                <a class="mfp-img has-img" href="{{ asset($image) }}">
                    <img src="{{ asset($image) }}" alt="{{ $portfolio->title }}">
                </a>
            </div>
            @endforeach
        @else
            {{-- Fallback if no gallery, show main image multiple times for layout demo --}}
            @for($i = 0; $i < 6; $i++)
            <div class="grid-sizer col-xs-12 col-md-4 col-sm-3"></div>
            <div class="grid-item col-xs-12 col-md-4 col-sm-3">
                <a class="mfp-img has-img" href="{{ asset($portfolio->image) }}">
                    <img src="{{ asset($portfolio->image) }}" alt="{{ $portfolio->title }}">
                </a>
            </div>
            @endfor
        @endif
    </div>
    <div class="ms-next-case">
        <div class="single-portfolio-nav">
            <div class="s-p-next">
                <a href="{{ route('portfolio.single', $nextPortfolio) }}">
                    <img src="{{ asset($nextPortfolio->image) }}" alt="{{ $nextPortfolio->title }}">
                    <div class="container"><span>Next</span>
                        <h1>{{ $nextPortfolio->title }}</h1>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container ms-cta">
        <div class="cta-section"><span class="line"></span>
            <div class="cta-text">
                <p>Ready to create something amazing?</p>
                <h1>Lets Work Together</h1><a class="btn btn--primary" href="{{ route('contacts') }}">Get In Touch</a>
            </div>
        </div>
    </div>
</div>
@endsection
