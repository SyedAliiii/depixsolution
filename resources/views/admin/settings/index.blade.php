@extends('admin.layout')

@section('title', 'General Settings')

@section('content')
<form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    <h5 class="mb-3 border-bottom pb-2">General Info</h5>
    <div class="row mb-4">
        <div class="col-md-6 mb-3">
            <label class="form-label">Site Title</label>
            <input type="text" class="form-control" name="site_title" value="{{ $settings['site_title'] ?? '' }}">
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Logo</label>
            <input type="file" class="form-control" name="site_logo">
            @if(isset($settings['site_logo']))
                <div class="mt-2">
                    <img src="{{ asset($settings['site_logo']) }}" style="height: 50px;">
                </div>
            @endif
        </div>
    </div>

    <h5 class="mb-3 border-bottom pb-2">Contact Info</h5>
    <div class="row mb-4">
        <div class="col-md-6 mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" class="form-control" name="contact_email" value="{{ $settings['contact_email'] ?? '' }}">
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Phone Number</label>
            <input type="text" class="form-control" name="contact_phone" value="{{ $settings['contact_phone'] ?? '' }}">
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">Address</label>
            <textarea class="form-control" name="contact_address" rows="2">{{ $settings['contact_address'] ?? '' }}</textarea>
        </div>
    </div>

    <h5 class="mb-3 border-bottom pb-2">Home Page Content</h5>
    <h6 class="text-muted">Banner Section</h6>
    <div class="row mb-4">
        <div class="col-md-6 mb-3">
            <label class="form-label">Banner Side Image</label>
            <input type="file" class="form-control" name="home_banner_thumb">
            @if(isset($settings['home_banner_thumb']))
                <div class="mt-2">
                    <img src="{{ asset($settings['home_banner_thumb']) }}" style="height: 100px;">
                </div>
            @endif
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Video Popup Link</label>
            <input type="url" class="form-control" name="home_banner_video_link" value="{{ $settings['home_banner_video_link'] ?? '' }}">
        </div>
    </div>

    <h6 class="text-muted">Agency Section</h6>
    <div class="row mb-4">
        <div class="col-md-6 mb-3">
            <label class="form-label">Agency Image One</label>
            <input type="file" class="form-control" name="home_agency_thumb_one">
            @if(isset($settings['home_agency_thumb_one']))
                <div class="mt-2">
                    <img src="{{ asset($settings['home_agency_thumb_one']) }}" style="height: 80px;">
                </div>
            @endif
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Agency Image Two</label>
            <input type="file" class="form-control" name="home_agency_thumb_two">
             @if(isset($settings['home_agency_thumb_two']))
                <div class="mt-2">
                    <img src="{{ asset($settings['home_agency_thumb_two']) }}" style="height: 80px;">
                </div>
            @endif
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">Agency Title</label>
            <input type="text" class="form-control" name="home_agency_title" value="{{ $settings['home_agency_title'] ?? 'We are digital creative agency in London' }}">
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label">Agency Content</label>
            <textarea class="form-control" name="home_agency_content" rows="4">{{ $settings['home_agency_content'] ?? '' }}</textarea>
        </div>
    </div>

    <h6 class="text-muted">Offer Section</h6>
    <div class="row mb-4">
        <div class="col-md-12 mb-3">
            <label class="form-label">Offer Title</label>
            <input type="text" class="form-control" name="home_offer_title" value="{{ $settings['home_offer_title'] ?? 'Giving Your Business Some Great Ideas' }}">
        </div>
    </div>

    <h5 class="mb-3 border-bottom pb-2">Social Media</h5>
    <div class="row mb-4">
        <div class="col-md-6 mb-3">
            <label class="form-label">Facebook URL</label>
            <input type="url" class="form-control" name="social_facebook" value="{{ $settings['social_facebook'] ?? '' }}">
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Twitter URL</label>
            <input type="url" class="form-control" name="social_twitter" value="{{ $settings['social_twitter'] ?? '' }}">
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Instagram URL</label>
            <input type="url" class="form-control" name="social_instagram" value="{{ $settings['social_instagram'] ?? '' }}">
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">LinkedIn URL</label>
            <input type="url" class="form-control" name="social_linkedin" value="{{ $settings['social_linkedin'] ?? '' }}">
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Youtube URL</label>
            <input type="url" class="form-control" name="social_youtube" value="{{ $settings['social_youtube'] ?? '' }}">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Save Settings</button>
</form>
@endsection
