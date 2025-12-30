@extends('layouts.slider')

@section('title', 'Home - Slider Fade')

@section('content')
<div class="swiper-container swiper-full-page">
    <div class="swiper-wrapper">
        <!-- Slide-->
        @foreach($sliders as $index => $slider)
        <!-- Slide-->
        <div class="swiper-slide">
            <div class="swiper-slide__inner">
                <div class="slide-image"><img src="{{ asset($slider->image) }}" alt="{{ $slider->title }}"></div>
                <div class="slide-title-container row">
                    <div class="slide-title--inner">
                        <div class="slide-info__left">
                            <div class="ms-slide-count"><span>{{ sprintf('%02d', $index + 1) }}</span>
                                <span class="total-count">/ {{ sprintf('%02d', $sliders->count()) }}</span>
                            </div>
                            <div class="slide-title">
                                <div class="slide-cat">{{ $slider->category }}</div>
                                <h3>{!! nl2br($slider->title) !!}</h3>
                                @if($slider->link)
                                <a class="slide-link" rel="noreferrer" href="{{ $slider->link }}">{{ $slider->button_text }}<span></span></a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="slider-nav">
                        <div class="swiper-button-prev">
                            <svg version="1.1" viewBox="0 0 36 36" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <polyline class="st0" points="11,18 16,13 21,18 "></polyline>
                                <path class="st0" d="M21,29H11c-4.4,0-8-3.6-8-8V11c0-4.4,3.6-8,8-8h10c4.4,0,8,3.6,8,8v10C29,25.4,25.4,29,21,29z"></path>
                            </svg>
                        </div>
                        <div class="swiper-button-next">
                            <svg version="1.1" viewBox="0 0 36 36" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <polyline class="st0" points="21,14 16,19 11,14 "></polyline>
                                <path class="st0" d="M21,29H11c-4.4,0-8-3.6-8-8V11c0-4.4,3.6-8,8-8h10c4.4,0,8,3.6,8,8v10C29,25.4,25.4,29,21,29z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @include('partials.footer-slider')
</div>
@endsection
