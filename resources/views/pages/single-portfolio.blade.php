@extends('layouts.app')

@section('title', 'Single Portfolio')

@section('content')
<!--Hero-->
<div class="margin-top-xl"></div>
<section class="hero hero--overlay-layer hero-default">
    <div class="container">
        <div class="hero__content text-left"><span>Single Portfolio Page</span>
            <h1>The Wizards of the Soul</h1>
            <p>Phosfluorescently orchestrate emerging intellectual capital rather than efficient growth strategies. Conveniently coordinate sticky channels without.</p>
        </div>
    </div>
</section>
<div class="container ms-content--portfolio">
    <div class="row grid-content blockgallery">
        <div class="grid-sizer col-xs-12 col-md-4 col-sm-3"></div>
        <div class="grid-item col-xs-12 col-md-4 col-sm-3"><a class="mfp-img has-img" href="{{ asset('assets/img/portfolio/jr_pf.png') }}"><img src="{{ asset('assets/img/portfolio/jr_pf.png') }}" alt="image description"></a></div>
        <div class="grid-sizer col-xs-12 col-md-4 col-sm-3"></div>
        <div class="grid-item col-xs-12 col-md-4 col-sm-3"><a class="mfp-img has-img" href="{{ asset('assets/img/portfolio/jr_pf.png') }}"><img src="{{ asset('assets/img/portfolio/jr_pf.png') }}" alt="image description"></a></div>
        <div class="grid-sizer col-xs-12 col-md-4 col-sm-3"></div>
        <div class="grid-item col-xs-12 col-md-4 col-sm-3"><a class="mfp-img has-img" href="{{ asset('assets/img/portfolio/jr_pf.png') }}"><img src="{{ asset('assets/img/portfolio/jr_pf.png') }}" alt="image description"></a></div>
        <div class="grid-sizer col-xs-12 col-md-4 col-sm-3"></div>
        <div class="grid-item col-xs-12 col-md-4 col-sm-3"><a class="mfp-img has-img" href="{{ asset('assets/img/portfolio/jr_pf.png') }}"><img src="{{ asset('assets/img/portfolio/jr_pf.png') }}" alt="image description"></a></div>
        <div class="grid-sizer col-xs-12 col-md-4 col-sm-3"></div>
        <div class="grid-item col-xs-12 col-md-4 col-sm-3"><a class="mfp-img has-img" href="{{ asset('assets/img/portfolio/jr_pf.png') }}"><img src="{{ asset('assets/img/portfolio/jr_pf.png') }}" alt="image description"></a></div>
        <div class="grid-sizer col-xs-12 col-md-4 col-sm-3"></div>
        <div class="grid-item col-xs-12 col-md-4 col-sm-3"><a class="mfp-img has-img" href="{{ asset('assets/img/portfolio/jr_pf.png') }}"><img src="{{ asset('assets/img/portfolio/jr_pf.png') }}" alt="image description"></a></div>
    </div>
    <div class="ms-next-case">
        <div class="single-portfolio-nav">
            <div class="s-p-next"><a href="{{ route('portfolio.single') }}"><img src="{{ asset('assets/img/portfolio/jr_pf-next(1140x300).png') }}" alt="img title">
                <div class="container"><span>Next</span>
                    <h1>The Drive of your life</h1>
                </div></a></div>
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
