@extends('layouts.app')

@section('title', 'Our Services - Xpovio Digital Agency')

@section('content')
<!-- ==== banner start ==== -->
<section class="cmn-banner bg-img" data-background="{{ asset('assets/images/banner/cmn-banner-bg.png') }}">
   <div class="container">
      <div class="row gaper align-items-center">
         <div class="col-12 col-lg-5 col-xl-7">
            <div class="text-center text-lg-start">
               <h2 class="title title-anim">Our Services</h2>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">
                           <i class="fa-solid fa-house"></i>
                           Home
                        </a>
                     </li>
                     <li class="breadcrumb-item active" aria-current="page">
                        Our Services
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
<!-- ==== service table start ==== -->
<section class="section service-t">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="service-t__slider">
               @foreach($services as $index => $service)
               <div class="service-t-single-wrapper">
                  <div class="service-t__slider-single">
                     <div class="intro">
                        <span class="sub-title">
                           {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                           <i class="fa-solid fa-arrow-right"></i>
                        </span>
                        <h4>
                           <a href="{{ route('services.show', $service->slug) }}">{{ $service->title }}</a>
                        </h4>
                     </div>
                     <ul>
                        @if($service->features && is_array($service->features))
                           @foreach($service->features as $feature)
                              <li>{{ $feature }}</li>
                           @endforeach
                        @endif
                     </ul>
                     <div class="cta">
                        <a href="{{ route('services.show', $service->slug) }}">
                           <i class="icon-arrow-top-right"></i>
                           <span>service details</span>
                        </a>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
   <div class="slide-group">
      <a href="javascript:void(0)" aria-label="previous item" class="slide-btn prev-service-t">
         <i class="fa-light fa-angle-left"></i>
      </a>
      <a href="javascript:void(0)" aria-label="next item" class="slide-btn next-service-t">
         <i class="fa-light fa-angle-right"></i>
      </a>
   </div>
</section>
<!-- ==== / service table end ==== -->
<!-- ==== video modal start ==== -->
<div class="video-modal">
   <img src="{{ asset('assets/images/modal-bg.png') }}" alt="Image" class="modal-bg">
   <a class="video-frame video-btn" href="https://www.youtube.com/watch?v=RvreULjnzFo" target="_blank">
      <img src="{{ asset('assets/images/video-frame-two.png') }}" alt="Image">
      <i class="fa-sharp fa-solid fa-play"></i>
   </a>
</div>
<!-- ==== / video modal end ==== -->
<!-- ==== ux process start ==== -->
<section class="section ux-process fade-wrapper">
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
               <div class="service-f-single fade-top">
                  <div class="single-item">
                     <div class="intro-btn">
                        <h4>story board</h4>
                     </div>
                  </div>
                  <div class="single-item p-single p-sm body-cn">
                     <p>To deliver the best experience, we thoroughly research and evaluate your product
                        and its users to create a strategic foundation for the brand.</p>
                  </div>
                  <button class="toggle-service-f"></button>
               </div>
               <div class="service-f-single fade-top">
                  <div class="single-item">
                     <div class="intro-btn">
                        <h4>wireframing</h4>
                     </div>
                  </div>
                  <div class="single-item p-single p-sm body-cn">
                     <p>To deliver the best experience, we thoroughly research and evaluate your product
                        and its users to create a strategic foundation for the brand.</p>
                  </div>
                  <button class="toggle-service-f"></button>
               </div>
               <div class="service-f-single fade-top">
                  <div class="single-item">
                     <div class="intro-btn">
                        <h4>Prototyping</h4>
                     </div>
                  </div>
                  <div class="single-item p-single p-sm body-cn">
                     <p>To deliver the best experience, we thoroughly research and evaluate your product
                        and its users to create a strategic foundation for the brand.</p>
                  </div>
                  <button class="toggle-service-f"></button>
               </div>
               <div class="service-f-single fade-top">
                  <div class="single-item">
                     <div class="intro-btn">
                        <h4>usability testing</h4>
                     </div>
                  </div>
                  <div class="single-item p-single p-sm body-cn">
                     <p>To deliver the best experience, we thoroughly research and evaluate your product
                        and its users to create a strategic foundation for the brand.</p>
                  </div>
                  <button class="toggle-service-f"></button>
               </div>
               <div class="service-f-single fade-top">
                  <div class="single-item">
                     <div class="intro-btn">
                        <h4>UI Design</h4>
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
<!-- ==== testimonial start ==== -->
<section class="section testimonial testimonial-three position-relative">
   <div class="testimonial__text-slider">
      @foreach($testimonials as $testimonial)
      <div class="testimonial__text-slider-single">
         <h2 class="h1">
            <a href="#">
               client's testimonial
               <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
            </a>
         </h2>
      </div>
      @endforeach
   </div>
   <div class="container position-relative">
      <div class="row">
         <div class="col-12 col-xxl-10">
            <div class="testimonial-s__slider">
               @foreach($testimonials as $testimonial)
               <div class="testimonial-s__slider-single">
                  <div class="row gaper align-items-center">
                     <div class="col-12 col-lg-4 col-xxl-4">
                        <div class="thumb">
                           <img src="{{ asset($testimonial->image) }}" alt="Image">
                           <svg xmlns="http://www.w3.org/2000/svg" width="44" height="322"
                              viewBox="0 0 44 322" fill="none" class="d-none d-lg-block">
                              <path d="M43 -0.000976562V151.999L2 192.999H43V321.999" stroke="#414141" />
                           </svg>
                        </div>
                     </div>
                     <div class="col-12 col-lg-7 offset-lg-1 col-xxl-7 offset-xxl-1">
                        <div class="testimonial-s__content">
                           <div class="quote">
                              <i class="fa-solid fa-quote-right"></i>
                           </div>
                           <div class="content">
                              <h4>{{ $testimonial->content }}</h4>
                           </div>
                           <div class="content-cta">
                              <h5>{{ $testimonial->name }}</h5>
                              <p>{{ $testimonial->designation }}</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
      <div class="slide-group justify-content-start">
         <a href="javascript:void(0)" aria-label="previous item" class="slide-btn prev-testimonial-three">
            <i class="fa-light fa-angle-left"></i>
         </a>
         <a href="javascript:void(0)" aria-label="next item" class="slide-btn next-testimonial-three">
            <i class="fa-light fa-angle-right"></i>
         </a>
      </div>
   </div>
   <div class="other-section">
      <img class="other-section-image" src="{{ asset('assets/images/testimonial/s-thumb.png') }}"
         alt="Next Slide Image">
   </div>
</section>
<!-- ==== / testimonial end ==== -->
<!-- ==== cta start ==== -->
<section class="cta-two section">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-12 col-xxl-11">
            <div class="cta-two-wrapper bg-img" data-background="{{ asset('assets/images/cta-two-bg.png') }}">
               <div class="row gaper align-items-center">
                  <div class="col-12 col-lg-8">
                     <div class="cta-two__content">
                        <span>Hello !</span>
                        <h2 class="title-anim">
                           ready to work with us?
                        </h2>
                        <h5>
                           <a href="tel:{{ $settings['contact_phone'] ?? '' }}">call: {{ $settings['contact_phone'] ?? '' }}</a>
                        </h5>
                     </div>
                  </div>
                  <div class="col-12 col-lg-4">
                     <div class="text-start text-lg-end">
                        <a href="{{ route('contact') }}" class="btn btn--tertiary">
                           start a project
                           <i class="fa-sharp fa-solid fa-arrow-up-right"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ==== / cta end ==== -->
@endsection
