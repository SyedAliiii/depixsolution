@extends('layouts.app')

@section('title', $portfolio->title . ' - DepixStudio Digital Agency')

@section('content')
<!-- ==== banner start ==== -->
<section class="cmn-banner bg-img" data-background="{{ asset('assets/images/banner/cmn-banner-bg.png') }}">
   <div class="container">
      <div class="row gaper align-items-center">
         <div class="col-12 col-lg-5 col-xl-7">
            <div class="text-center text-lg-start">
               <h2 class="title title-anim">{{ $portfolio->title }}</h2>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">
                           <i class="fa-solid fa-house"></i>
                           Home
                        </a>
                     </li>
                     <li class="breadcrumb-item">
                        <a href="{{ route('portfolio.index') }}">
                           Projects
                        </a>
                     </li>
                     <li class="breadcrumb-item active" aria-current="page">
                        {{ $portfolio->title }}
                     </li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ==== / banner end ==== -->
<!-- ==== project details start ==== -->
<section class="section project-d">
   <div class="container">
      <div class="row gaper">
         <div class="col-12 col-lg-6">
            <div class="project-d-group">
               <h3 class="light-title-lg">{{ $portfolio->title }}</h3>
               <p>
                  {{ $portfolio->description }}
               </p>
            </div>
         </div>
         <div class="col-12 col-lg-6">
            <div class="project-d-group">
               <h3 class="light-title-lg">Project Info</h3>
               <ul>
                   @if($portfolio->client)
                  <li>
                     <strong>Client:</strong> {{ $portfolio->client }}
                  </li>
                  @endif
                  <li>
                      <strong>Category:</strong> {{ $portfolio->category }}
                  </li>
                  @if($portfolio->project_url)
                  <li>
                      <strong>Project Link:</strong> <a href="{{ $portfolio->project_url }}" target="_blank">Link</a>
                  </li>
                  @endif
               </ul>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-12">
            <div class="poster__slider-wrapper">
               <div class="poster__slider">
                  <div class="poster__slider-single">
                     @if($portfolio->banner_image)
                        <img src="{{ asset($portfolio->banner_image) }}" alt="Image">
                     @elseif($portfolio->image)
                        <img src="{{ asset($portfolio->image) }}" alt="Image">
                     @endif
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="row mt-5 gaper">
         @foreach($portfolio->details as $index => $detail)
            @php
                // Re-use the pattern logic: 2 big, 4 small, repeat. 
                // Pattern sequence (index % 6): 0 (big), 1 (big), 2 (small), 3 (small), 4 (small), 5 (small)
                $patternIndex = $index % 6;
                $colClass = ($patternIndex == 0 || $patternIndex == 1) ? 'col-12 col-lg-6' : 'col-12 col-lg-6 col-xxl-3';
            @endphp
            <div class="{{ $colClass }}">
                <div class="portfolio-m__single topy-tilt fade-top">
                   <div class="thumb">
                      <a href="javascript:void(0)">
                         @if($detail->image_path)
                            <img src="{{ asset($detail->image_path) }}" alt="Detail Image">
                         @endif
                      </a>
                   </div>
                   <div class="content">
                      @if($detail->text)
                      <h3 class="light-title-lg">
                         <a href="javascript:void(0)">{{ $detail->text }}</a>
                      </h3>
                      @endif
                   </div>
                </div>
            </div>
         @endforeach
      </div>
   </div>
</section>
<!-- ==== / project details end ==== -->
@endsection
