@extends('layouts.app')

@section('title', 'Our Teams - DepixStudio Digital Agency')

@section('content')
<!-- ==== banner start ==== -->
<section class="cmn-banner bg-img" data-background="{{ asset('assets/images/banner/cmn-banner-bg.png') }}">
   <div class="container">
      <div class="row gaper align-items-center">
         <div class="col-12 col-lg-5 col-xl-7">
            <div class="text-center text-lg-start">
               <h2 class="title title-anim">Awesome Teams</h2>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">
                           <i class="fa-solid fa-house"></i>
                           Home
                        </a>
                     </li>
                     <li class="breadcrumb-item active" aria-current="page">
                        our teams
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
<!-- ==== team start ==== -->
<section class="section team-m fade-wrapper">
   <div class="container">
      <div class="row gaper">
         @foreach($teams as $team)
         <div class="col-12 col-md-6 col-xl-4">
            <div class="team-m__single fade-top">
               <div class="thumb">
                  <a href="#">
                     <img src="{{ asset($team->image) }}" alt="Image">
                  </a>
                  <div class="thumb__content" data-background="{{ asset('assets/images/teams/bg.png') }}">
                     <div class="info">
                        <p>{{ $team->designation }}</p>
                     </div>
                     <h4>
                        <a href="#">{{ $team->name }}</a>
                     </h4>
                     <p>{{ $team->designation }}</p>
                     <div class="social-alt">
                        @if(!empty($team->social_links))
                            @foreach($team->social_links as $platform => $url)
                                <a href="{{ $url }}" target="_blank" aria-label="share us on {{ $platform }}">
                                    <i class="fa-brands fa-{{ $platform }}"></i>
                                </a>
                            @endforeach
                        @endif
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @endforeach
      </div>
      <div class="row">
         <div class="col-12">
            <div class="section__content-cta text-center">
               <!-- Pagination if needed -->
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ==== / team end ==== -->
@endsection
