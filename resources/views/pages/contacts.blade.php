@extends('layouts.app')

@section('title', 'Contacts')

@section('content')
<!--Hero-->
<div class="margin-top-xl"></div>
<section class="hero hero--overlay-layer hero-default">
    <div class="container">
        <div class="hero__content text-left"><span>Contacts</span>
            <h1>Get in touch and find us</h1>
            <p>Globally e-enable an expanded array of bandwidth before process-centric deliverables.</p>
        </div>
    </div>
</section>
<div class="container ms-content">
    <div class="ms-contact-page row">
        <div class="grid-sizer col-sm-12 col-md-6 col-lg-4"></div>
        <!--Contact Info-->
        <div class="col-12 col-md-6 col-lg-6 contact__list pr-lg-5 pr-md-3">
            <div class="contact__item">
                <h4>Address</h4>
                <p class="text-sm">{!! nl2br(\App\Models\Setting::get('site_address', '88 Whitby Road<br>IP20 6JA<br>London, UK')) !!}</p>
            </div>
            <div class="contact__item">
                <h4>Email</h4>
                <p class="text-sm"><a href="mailto:{!! \App\Models\Setting::get('contact_email', 'hello@myemail.com') !!}">{!! \App\Models\Setting::get('contact_email', 'hello@myemail.com') !!}</a></p>
            </div>
            <div class="contact__item">
                <h4>Phone</h4>
                <p class="text-sm"><a href="tel:{!! \App\Models\Setting::get('contact_phone', '+44 7356 6487') !!}">{!! \App\Models\Setting::get('contact_phone', '+44 7356 6487') !!}</a></p>
            </div>
            <div class="contact__item">
                <h4>Socials</h4>
                <ul class="socials">
                    @if(\App\Models\Setting::get('social_twitter'))
                    <li class="ms-btn"><a class="socicon-twitter" title="Twitter" target="_blank" href="{!! \App\Models\Setting::get('social_twitter') !!}"></a></li>
                    @endif
                    @if(\App\Models\Setting::get('social_facebook'))
                    <li class="ms-btn"><a class="socicon-facebook" title="Facebook" target="_blank" href="{!! \App\Models\Setting::get('social_facebook') !!}"></a></li>
                    @endif
                    @if(\App\Models\Setting::get('social_instagram'))
                    <li class="ms-btn"><a class="socicon-instagram" title="Instagram" target="_blank" href="{!! \App\Models\Setting::get('social_instagram') !!}"></a></li>
                    @endif
                    @if(\App\Models\Setting::get('social_linkedin'))
                    <li class="ms-btn"><a class="socicon-linkedin" title="LinkedIn" target="_blank" href="{!! \App\Models\Setting::get('social_linkedin') !!}"></a></li>
                    @endif
                </ul>
            </div>
        </div>
        <!--Contact Form-->
        <div class="col-md-6 col-lg-6 pb-lg-5 contact__form pb-lg-5">
            <div class="row">
                <div class="form-group col-6">
                    <input class="form-control" type="text" name="your-name" aria-required="true" aria-invalid="false" placeholder="Your name">
                </div>
                <div class="form-group col-6">
                    <input class="form-control" type="email" name="your-email" aria-required="true" aria-invalid="false" placeholder="Your email">
                </div>
                <div class="form-group col-12">
                    <input class="form-control" type="text" name="your-subject" aria-required="true" aria-invalid="false" placeholder="Your subject">
                </div>
                <div class="form-group col-12">
                    <textarea class="form-control" name="your-message" cols="40" rows="8" aria-required="true" aria-invalid="false" placeholder="Write your message here..."></textarea>
                </div>
                <div class="form-group col-12 custom-checkbox"><span class="wpcf7-form-control-wrap your-consent"><span class="wpcf7-form-control wpcf7-acceptance"><span class="wpcf7-list-item">
                    <label>
                        <input class="checkbox checkbox--bg" type="checkbox" name="your-consent" value="1" aria-invalid="false"><span class="wpcf7-list-item-label">I consent to the conditions.</span>
                    </label></span></span></span></div>
                <div class="conditions-checkbox__control col-12" aria-hidden="true">
                    <input class="btn btn--primary" type="submit" value="Send" disabled=""><span class="ajax-loader"></span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
