@extends('layouts.app')

@section('title', 'Home - DepixStudio Digital Agency')

@section('content')
<!-- ==== banner start ==== -->
<section class="banner">
    <div class="container">
       <div class="row">
          <div class="col-12">
             <div class="banner__content">
                <h1 class="text-uppercase text-start fw-9 mb-0 title-anim">
                   @if($sliders->count() > 0)
                       {{ $sliders->first()->title }}
                       <span class="text-stroke">creative</span>
                       <span class="interval">
                          <i class="icon-arrow-top-right"></i>
                          {{ $sliders->first()->subtitle ?? 'digital agency' }}
                       </span>
                   @else
                       We are
                       <span class="text-stroke">creative</span>
                       <span class="interval">
                          <i class="icon-arrow-top-right"></i>
                          digital agency
                       </span>
                   @endif
                </h1>
                <div class="banner__content-inner">
                   <p>{{ $sliders->first()->description ?? 'We are a full-service website design, development and digital marketing company specializing in SEO, content marketing that grows brands.' }}</p>
                   @if($sliders->count() > 0 && $sliders->first()->link)
                   <div class="cta section__content-cta">
                       <a href="{{ $sliders->first()->link }}" class="btn btn--primary">{{ $sliders->first()->button_text }}</a>
                   </div>
                   @endif
                </div>
             </div>
          </div>
       </div>
    </div>
    <img src="{{ asset($settings['home_banner_thumb']) ?? '' }}" alt="Image"
       class="banner-one-thumb d-none d-sm-block g-ban-one">
    <img src="{{ asset('assets/images/star.png') }}" alt="Image" class="star">
    <div class="banner-left-text banner-social-text d-none d-md-flex">
       <a href="mailto:{{ $settings['contact_email'] ?? 'info@depixstudio.com' }}">mail : {{ $settings['contact_email'] ?? 'info@depixstudio.com' }}</a>
       <a href="tel:{{ $settings['contact_phone'] ?? '' }}">Call : {{ $settings['contact_phone'] ?? '' }}</a>
    </div>
    <div class="banner-right-text banner-social-text d-none d-md-flex">
       @if(isset($settings['social_instagram']))
       <a href="{{ $settings['social_instagram'] }}" target="_blank">
          instagram
       </a>
       @endif
       @if(isset($settings['social_linkedin']))
       <a href="{{ $settings['social_linkedin'] }}" target="_blank">
          Linkedin
       </a>
       @endif
       @if(isset($settings['social_facebook']))
       <a href="{{ $settings['social_facebook'] }}" target="_blank">
          facebook
       </a>
       @endif
       @if(isset($settings['social_youtube']))
       <a href="{{ $settings['social_youtube'] }}" target="_blank">
          youtube
       </a>
       @endif
    </div>
    <a class="video-frame video-btn" href="{{ $settings['home_banner_video_link'] ?? 'https://www.youtube.com/watch?v=RvreULjnzFo' }}" target="_blank">
       <img src="{{ asset('assets/images/video-frame.png') }}" alt="Image">
       <i class="fa-sharp fa-solid fa-play"></i>
    </a>
    <div class="lines d-none d-lg-flex">
       <div class="line"></div>
       <div class="line"></div>
       <div class="line"></div>
       <div class="line"></div>
       <div class="line"></div>
    </div>
 </section>
 <!-- ==== / banner end ==== -->
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
 <!-- ==== portfolio start ==== -->
 <section class="section portfolio pb-0 fade-wrapper position-relative">
    <div class="portfolio__text-slider">
       @foreach($portfolios as $portfolio)
       <div class="portfolio__text-slider-single">
        <h2 class="h1">
            <a href="{{ route('portfolio.show', $portfolio->slug) }}">
               {{ $portfolio->title }}
               <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
            </a>
        </h2>
     </div>
       @endforeach
    </div>
    <div class="container-fluid">
       <div class="row gaper">
          @foreach($portfolios as $portfolio)
          <div class="col-12 col-sm-6 col-xl-3">
             <div class="portfolio__single topy-tilt fade-top">
                 <a href="{{ route('portfolio.show', $portfolio->slug) }}">
                    <img src="{{ asset($portfolio->image) }}" alt="Image">
                 </a>
                <div class="portfolio__single-content">
                    <a href="{{ route('portfolio.show', $portfolio->slug) }}">
                       <i class="fa-sharp fa-solid fa-arrow-up-right"></i>
                    </a>
                    <h4>
                       <a href="{{ route('portfolio.show', $portfolio->slug) }}">{{ $portfolio->title }}</a>
                    </h4>
                   <span class="text-muted">{{ $portfolio->category }}</span>
                </div>
             </div>
          </div>
          @endforeach
          <div class="col-12 col-sm-6 col-xl-3">
            <div class="portfolio__single-alt-wrapper fade-top">
               <div class="portfolio__single-alt topy-tilt">
                   <h4>
                      <a href="{{ route('portfolio.index') }}">view all work</a>
                   </h4>
                   <a href="{{ route('portfolio.index') }}" class="arr">
                      <i class="fa-sharp fa-solid fa-arrow-up-right"></i>
                   </a>
                  <img src="{{ asset('assets/images/portfolio/dot.png') }}" alt="Image" class="dot-one">
                  <img src="{{ asset('assets/images/portfolio/dot.png') }}" alt="Image" class="dot-two">
               </div>
            </div>
         </div>
       </div>
    </div>
    <div class="lines d-none d-lg-flex">
       <div class="line"></div>
       <div class="line"></div>
       <div class="line"></div>
       <div class="line"></div>
       <div class="line"></div>
    </div>
 </section>
 <!-- ==== / portfolio end ==== -->
 <!-- ==== testimonial start ==== -->
 <section class="section testimonial pt-0 position-relative">
    <div class="testimonial__text-slider">
        @for ($i = 0; $i < 7; $i++)
       <div class="testimonial__text-slider-single">
          <h2 class="h1">
             <a href="client-feedback.html">
                client's testimonial
                <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
             </a>
          </h2>
       </div>
       @endfor
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
                               @for($k=0; $k < $testimonial->rating; $k++)
                                <i class="fa-solid fa-star text-warning small"></i>
                               @endfor
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
    <div class="lines d-none d-lg-flex">
       <div class="line"></div>
       <div class="line"></div>
       <div class="line"></div>
       <div class="line"></div>
       <div class="line"></div>
    </div>
 </section>
 <!-- ==== / testimonial end ==== -->
 <!-- ==== offer start ==== -->
 <section class="section offer fade-wrapper light">
    <div class="container">
       <div class="row gaper">
          <div class="col-12 col-lg-5">
             <div class="offer__content section__content">
                <span class="sub-title">
                   WHAT WE OFFER
                   <i class="fa-solid fa-arrow-right"></i>
                </span>
                <h2 class="title title-anim">
                   {{ $settings['home_offer_title'] ?? 'Giving Your Business Some Great Ideas' }}
                </h2>
                <div class="paragraph">
                   <p>{{ $settings['home_offer_content'] ?? 'Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation on the runway heading towards a streamlined cloud solution going forward porttitor dictum sapien.' }}</p>
                </div>
                <div class="section__content-cta">
                   <a href="{{ route('services.index') }}" class="btn btn--secondary">view all services</a>
                </div>
             </div>
          </div>
          <div class="col-12 col-lg-7 col-xl-6 offset-xl-1">
             <div class="offer__cta">
                @foreach($services as $index => $service)
                <div class="offer__cta-single fade-top">
                   <span class="sub-title">
                      {{ sprintf('%02d', $index + 1) }}
                      <i class="fa-solid fa-arrow-right"></i>
                   </span>
                   <h2>
                      <a href="{{ route('services.show', $service->slug) }}">
                         {{ $service->title }}
                         <i class="fa-sharp fa-solid fa-arrow-up-right"></i>
                      </a>
                   </h2>
                   <div class="offer-thumb-hover d-none d-md-block"
                      data-background="{{ asset($service->image) }}"></div>
                </div>
                @endforeach
                <!-- Add more offer items as needed -->
             </div>
          </div>
       </div>
    </div>
    <img src="{{ asset('assets/images/offer/star.png') }}" alt="Image" class="star">
    <div class="lines d-none d-lg-flex">
       <div class="line"></div>
       <div class="line"></div>
       <div class="line"></div>
       <div class="line"></div>
       <div class="line"></div>
    </div>
 </section>
 <!-- ==== / offer end ==== -->
 {{-- <!-- ==== blog start ==== -->
 <section class="section blog fade-wrapper">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-12 col-lg-8">
             <div class="section__header text-center">
                <span class="sub-title">
                   news & Blog
                   <i class="fa-solid fa-arrow-right"></i>
                </span>
                <h2 class="title title-anim">what's new in blog</h2>
             </div>
          </div>
       </div>
       <div class="row gaper">
          @foreach($posts as $post)
          <div class="col-12 col-md-6">
             <div class="blog__single fade-top">
                  <div class="blog__single-thumb topy-tilt">
                     <a href="{{ route('blog.show', $post->slug) }}">
                        <img src="{{ asset($post->image) }}" alt="Image">
                     </a>
                  </div>
                  <div class="blog__single-content">
                     <h4>
                        <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                     </h4>
                     <div class="blog__single-meta">
                        <a href="{{ route('blog.index') }}" class="sub-title">
                         {{ $post->category ?? 'Blog' }}
                         <i class="fa-solid fa-arrow-right"></i>
                      </a>
                      <p>{{ $post->created_at->format('F d, Y') }}</p>
                   </div>
                </div>
             </div>
          </div>
          @endforeach
       </div>
    </div>
 </section>
 <!-- ==== / blog end ==== --> --}}
 <!-- ==== sponsor start ==== -->
 <div class="sponsor section pb-0">
    <div class="container-fluid">
       <div class="row justify-content-center">
          <div class="col-12">
              <div class="sponsor__slider ">
                 @foreach($sponsors as $sponsor)
                 <div class="sponsor__slider-item">
                    <img src="{{ asset($sponsor->image) }}" alt="{{ $sponsor->name }}">
                 </div>
                 @endforeach
              </div>
          </div>
       </div>
    </div>
    <div class="lines d-none d-lg-flex">
       <div class="line"></div>
       <div class="line"></div>
       <div class="line"></div>
       <div class="line"></div>
       <div class="line"></div>
    </div>
 </div>
 <!-- ==== / sponsor end ==== -->
 <!-- ==== next page start ==== -->
 <section class="section next-page">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-12 col-lg-8">
             <div class="section__header text-center">
                <a href="{{ route('about') }}" class="sub-title mb-0">
                   Next Page
                   <i class="fa-solid fa-arrow-right"></i>
                </a>
             </div>
          </div>
       </div>
    </div>
    <div class="next__text-slider">
        @for ($i = 0; $i < 7; $i++)
       <div class="next__text-slider-single">
          <h2 class="h1">
             <a href="{{ route('about') }}">
                About Us
                <i class="fa-sharp fa-solid fa-arrow-down-right"></i>
             </a>
          </h2>
       </div>
       @endfor
    </div>
    <div class="lines d-none d-lg-flex">
       <div class="line"></div>
       <div class="line"></div>
       <div class="line"></div>
       <div class="line"></div>
       <div class="line"></div>
    </div>
 </section>
 <!-- ==== / next page end ==== -->
@endsection
