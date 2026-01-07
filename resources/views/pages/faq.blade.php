@extends('layouts.app')

@section('title', 'FAQ - Xpovio Digital Agency')

@section('content')
<!-- ==== banner start ==== -->
<section class="cmn-banner bg-img" data-background="{{ asset('assets/images/banner/cmn-banner-bg.png') }}">
   <div class="container">
      <div class="row gaper align-items-center">
         <div class="col-12 col-lg-5 col-xl-7">
            <div class="text-center text-lg-start">
               <h2 class="title title-anim">FAQ</h2>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">
                           <i class="fa-solid fa-house"></i>
                           Home
                        </a>
                     </li>
                     <li class="breadcrumb-item active" aria-current="page">
                        FAQ
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
<!-- ==== faq start ==== -->
<section class="section faq fade-wrapper">
   <div class="container">
      <div class="row gaper">
         <div class="col-12 col-lg-6">
            <div class="faq__thumb fade-left">
               <img src="{{ asset('assets/images/faq-thumb.png') }}" alt="Image">
            </div>
         </div>
         <div class="col-12 col-lg-6">
            <div class="accordion" id="accordion">
               @forelse($faqs as $index => $faq)
               <div class="accordion-item fade-top">
                  <h5 class="accordion-header" id="heading{{ $index }}">
                     <button class="accordion-button {{ $index != 0 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse{{ $index }}" aria-expanded="{{ $index == 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $index }}">
                        {{ $faq->question }}
                     </button>
                  </h5>
                  <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                     aria-labelledby="heading{{ $index }}" data-bs-parent="#accordion">
                     <div class="accordion-body">
                        <p>
                           {!! nl2br(e($faq->answer)) !!}
                        </p>
                     </div>
                  </div>
               </div>
               @empty
                   <p>No FAQs found.</p>
               @endforelse
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ==== / faq end ==== -->
@endsection
