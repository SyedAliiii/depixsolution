@extends('layouts.app')

@section('title', 'Portfolio - DepixStudio Digital Agency')

@section('content')
<!-- ==== banner start ==== -->
<section class="cmn-banner bg-img" data-background="{{ asset('assets/images/banner/cmn-banner-bg.png') }}">
   <div class="container">
      <div class="row gaper align-items-center">
         <div class="col-12 col-lg-5 col-xl-7">
            <div class="text-center text-lg-start">
               <h2 class="title title-anim">Portfolio Gallery</h2>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">
                           <i class="fa-solid fa-house"></i>
                           Home
                        </a>
                     </li>
                     <li class="breadcrumb-item active" aria-current="page">
                        Portfolio Gallery
                     </li>
                  </ol>
               </nav>
            </div>
         </div>
         <div class="col-12 col-lg-7 col-xl-5">
            <div class="text-center text-lg-start">
               <p class="primary-text">We're an UK-based top-notch design agency committed to partnering
                  with good companies and hiring the right people for the right roles.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ==== / banner end ==== -->
<!-- ==== portfolio start ==== -->
<section class="section portfolio-m fade-wrapper">
   <div class="container">
      <div class="row gaper">
         @foreach($portfolios as $index => $portfolio)
            @php
                $patternIndex = $index % 6;
                $colClass = ($patternIndex == 0 || $patternIndex == 1) ? 'col-12 col-lg-6' : 'col-12 col-lg-6 col-xxl-3';
            @endphp
         <div class="{{ $colClass }}">
            <div class="portfolio-m__single topy-tilt fade-top">
               <div class="thumb">
                  <a href="{{ route('portfolio.show', $portfolio->slug) }}">
                     <img src="{{ asset($portfolio->image) }}" alt="Image">
                  </a>
               </div>
               <div class="content">
                  <div class="tr">
                     <a href="{{ route('portfolio.show', $portfolio->slug) }}">
                        <i class="icon-arrow-top-right"></i>
                     </a>
                  </div>
                  <h3 class="light-title-lg">
                     <a href="{{ route('portfolio.show', $portfolio->slug) }}">{{ $portfolio->title }}</a>
                  </h3>
                  <p>{{ $portfolio->category }}</p>
               </div>
            </div>
         </div>
         @endforeach
      </div>
      <div class="row">
         <div class="col-12">
            <div class="section__content-cta text-center">
               <button class="btn btn--secondary">Load More..</button>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ==== portfolio end ==== -->
@endsection
