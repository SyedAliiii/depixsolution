@extends('layouts.app')

@section('title', $service->title . ' - Xpovio Digital Agency')

@section('content')
<!-- ==== banner start ==== -->
<section class="cmn-banner service-single-banner bg-img" data-background="{{ asset('assets/images/banner/cmn-banner-bg.png') }}">
   <div class="container">
      <div class="row gaper align-items-center">
         <div class="col-12 col-lg-5 col-xl-7">
            <div class="text-center text-lg-start">
               <h2 class="title title-anim">{{ $service->title }}</h2>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">
                           <i class="fa-solid fa-house"></i>
                           Home
                        </a>
                     </li>
                     <li class="breadcrumb-item">
                        <a href="{{ route('services.index') }}">
                           Our Services
                        </a>
                     </li>
                     <li class="breadcrumb-item active" aria-current="page">
                        {{ $service->title }}
                     </li>
                  </ol>
               </nav>
            </div>
         </div>
         <div class="col-12 col-lg-7 col-xl-5">
            <div class="slide-group justify-content-center justify-content-lg-end">
               <a href="{{ route('services.index') }}" aria-label="previous item" class="slide-btn ">
                  <i class="fa-light fa-angle-left"></i>
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ==== / banner end ==== -->
<!-- ==== service details start ==== -->
<section class="section service-details fade-wrapper">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-12 col-xl-10">
            <div class="service-details__slider">
               <div class="service-details__slider-single">
                  @if($service->image)
                  <div class="poster fade-top">
                     <img src="{{ asset($service->image) }}" alt="Image">
                  </div>
                  @endif
                  <div class="details-group section__cta text-start">
                     <h3 class="title-anim">{{ $service->title }}</h3>
                     <p>
                        {!! nl2br(e($service->description)) !!}
                     </p>
                  </div>
                  <div class="section__content-cta">
                     <div class="row gaper">
                        <div class="col-12 col-lg-7">
                           <div class="details-group">
                              <h3 class="title-anim">Key Features</h3>
                              @if($service->features && is_array($service->features))
                              <ul>
                                 @foreach($service->features as $feature)
                                    <li>{{ $feature }}</li>
                                 @endforeach
                              </ul>
                              @endif
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ==== / service details end ==== -->
<!-- ==== ux process start ==== -->
<section class="section ux-process bg-tertiary fade-wrapper">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-12 col-lg-8">
            <div class="section__header text-center">
               <span class="sub-title">
                  UX Process
                  <i class="fa-solid fa-arrow-right"></i>
               </span>
               <h2 class="title title-anim">working UX Process</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-12">
            <div class="service-f-wrapper">
               <div class="service-f-single fade-top">
                  <div class="single-item">
                     <div class="intro-btn">
                        <h4>User Research</h4>
                     </div>
                  </div>
                  <div class="single-item p-single p-sm body-cn">
                     <p>To deliver the best experience, we thoroughly research and evaluate your product
                        and its users to create a strategic foundation for the brand.</p>
                  </div>
                  <button class="toggle-service-f"></button>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ==== / ux process end ==== -->
@endsection
