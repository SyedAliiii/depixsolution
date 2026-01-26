@extends('layouts.app')

@section('title', 'About Us - DepixStudio Digital Agency')

@section('content')
<!-- ==== banner start ==== -->
<section class="cmn-banner bg-img" data-background="{{ asset('assets/images/banner/cmn-banner-bg.png') }}">
   <div class="container">
      <div class="row gaper align-items-center">
         <div class="col-12 col-lg-5 col-xl-7">
            <div class="text-center text-lg-start">
               <h2 class="title title-anim">About Us</h2>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">
                           <i class="fa-solid fa-house"></i>
                           Home
                        </a>
                     </li>
                     <li class="breadcrumb-item active" aria-current="page">
                        About Us
                     </li>
                  </ol>
               </nav>
            </div>
         </div>
         <div class="col-12 col-lg-7 col-xl-5">
            <div class="text-center text-lg-start">
               <p class="primary-text">{{ $settings['about_hero_text'] ?? "We're an UK-based top-notch design agency committed to partnering with good companies and hiring the right people for the right roles." }}</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ==== / banner end ==== -->
<!-- ==== video modal start ==== -->
<div class="video-modal">
   <img src="{{ isset($settings['about_video_background']) ? asset($settings['about_video_background']) : asset('assets/images/modal-bg.png') }}" alt="Image" class="modal-bg">
   <a class="video-frame video-btn" href="{{ isset($settings['about_video_link']) ? $settings['about_video_link'] : 'https://www.youtube.com/watch?v=RvreULjnzFo' }}" target="_blank">
      <img src="{{ asset('assets/images/video-frame-two.png') }}" alt="Image">
      <i class="fa-sharp fa-solid fa-play"></i>
   </a>
</div>
<!-- ==== / video modal end ==== -->
<!-- ==== agency start ==== -->
<section class="section agency">
   <div class="container">
      <div class="row gaper align-items-center">
         <div class="col-12 col-lg-6">
            <div class="agency__thumb">
               <img src="{{ isset($settings['home_agency_thumb_one']) ? asset($settings['home_agency_thumb_one']) : asset('assets/images/agency/thumb-one.png') }}" alt="Image" class="thumb-one fade-left">
               <img src="{{ isset($settings['home_agency_thumb_two']) ? asset($settings['home_agency_thumb_two']) : asset('assets/images/agency/thumb-two.png') }}" alt="Image" class="thumb-two fade-right">
            </div>
         </div>
         <div class="col-12 col-lg-6">
            <div class="agency__content section__content">
               <span class="sub-title">
                  WELCOME
                  <i class="fa-solid fa-arrow-right"></i>
               </span>
               <h2 class="title title-anim">
                  {{ $settings['home_agency_title'] ?? 'We are digital creative agency in London' }}
               </h2>
               <div class="paragraph">
                  <p>{{ $settings['home_agency_content'] ?? 'Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation on the runway heading towards a streamlined cloud solution going forward porttitor dictum sapien.' }}</p>
               </div>
               <div class="skill-wrap">
                  @foreach($skills as $skill)
                  <div class="skill-bar-single">
                     <div class="skill-bar-title">
                        <p class="primary-text">{{ $skill->name }}</p>
                     </div>
                     <div class="skill-bar-wrapper" data-percent="{{ $skill->percent }}%">
                        <div class="skill-bar">
                           <div class="skill-bar-percent">
                              <span class="percent-value"></span>
                           </div>
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
               <div class="section__content-cta">
                  <a href="{{ route('about') }}" class="btn btn--primary">Know More</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <img src="{{ asset('assets/images/star.png') }}" alt="Image" class="star">
   <img src="{{ asset('assets/images/agency/dot-large.png') }}" alt="Image" class="dot-large">
</section>
<!-- ==== / agency end ==== -->
<!-- ==== team members start ==== -->
<section class="section team-slider-s">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="section__header--secondary">
               <div class="row gaper align-items-center">
                  <div class="col-12 col-lg-8">
                     <div class="section__header text-center text-lg-start mb-0">
                        <span class="sub-title">
                           our awesome crew
                           <i class="fa-solid fa-arrow-right"></i>
                        </span>
                        <h2 class="title title-anim">our depixstudio team members</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="team-r position-relative">
      <div class="team-s__slider">
          @foreach($teams as $team)
          <div class="team-s__slider-single">
             <div class="team-wrap">
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
                      <div class="social-alt">
                         @if(isset($team->social_links['facebook']))
                         <a href="{{ $team->social_links['facebook'] }}" target="_blank">
                            <i class="fa-brands fa-facebook-f"></i>
                         </a>
                         @endif
                         @if(isset($team->social_links['behance']))
                         <a href="{{ $team->social_links['behance'] }}" target="_blank">
                            <i class="fa-brands fa-behance"></i>
                         </a>
                         @endif
                         @if(isset($team->social_links['linkedin']))
                         <a href="{{ $team->social_links['linkedin'] }}" target="_blank">
                            <i class="fa-brands fa-linkedin-in"></i>
                         </a>
                         @endif
                      </div>
                   </div>
                </div>
                <div class="content">
                   <div class="intro">
                      <h5>
                         <a href="#">{{ $team->name }}</a>
                      </h5>
                      <p>{{ $team->designation }}</p>
                   </div>
                   <hr>
                   <div class="inner">
                      <p>Full-service website design, development and digital marketing.</p>
                   </div>
                </div>
             </div>
          </div>
          @endforeach
      </div>
   </div>
</section>
<!-- ==== / team members end ==== -->
@endsection
