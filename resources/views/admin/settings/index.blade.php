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

    <h5 class="mb-3 border-bottom pb-2">Services Page Content</h5>
    <div class="row mb-4">
        <div class="col-md-12 mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="services_page_description" rows="3">{{ $settings['services_page_description'] ?? '' }}</textarea>
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Video Background Image</label>
            <input type="file" class="form-control" name="services_video_bg">
            @if(isset($settings['services_video_bg']))
                <div class="mt-2">
                    <img src="{{ asset($settings['services_video_bg']) }}" style="height: 100px;">
                </div>
            @endif
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Video Popup Link</label>
            <input type="url" class="form-control" name="services_video_link" value="{{ $settings['services_video_link'] ?? '' }}">
        </div>
    </div>

    <h6 class="text-muted">UX Process Section</h6>
    <div class="row mb-4">
        <div class="col-md-6 mb-3">
            <label class="form-label">Section Title</label>
            <input type="text" class="form-control" name="services_process_title" value="{{ $settings['services_process_title'] ?? 'working UX Process' }}">
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Section Subtitle</label>
            <input type="text" class="form-control" name="services_process_subtitle" value="{{ $settings['services_process_subtitle'] ?? 'UX Process' }}">
        </div>
        <div class="col-md-12">
            <label class="form-label mb-2">Process Steps</label>
            <div id="service-process-wrapper">
                @php
                    $processSteps = isset($settings['services_process_steps']) ? json_decode($settings['services_process_steps'], true) : [];
                @endphp
                @foreach($processSteps as $index => $step)
                <div class="card mb-3 process-item" id="service-process-{{ $index }}">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h6>Step {{ $index + 1 }}</h6>
                            <button type="button" class="btn btn-danger btn-sm" onclick="removeServiceProcess({{ $index }})">Remove</button>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="services_process_steps[{{ $index }}][title]" value="{{ $step['title'] ?? '' }}">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" name="services_process_steps[{{ $index }}][description]" rows="2">{{ $step['description'] ?? '' }}</textarea>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <button type="button" class="btn btn-secondary btn-sm" onclick="addServiceProcess()">+ Add Process Step</button>
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
        <div class="col-md-12 mb-3">
            <label class="form-label">Offer Content</label>
            <textarea class="form-control" name="home_offer_content" rows="4">{{ $settings['home_offer_content'] ?? '' }}</textarea>
        </div>
    </div>

    <h5 class="mb-3 border-bottom pb-2">About Page Content</h5>
    <div class="row mb-4">
        <div class="col-md-12 mb-3">
            <label class="form-label">About Hero Text</label>
            <textarea class="form-control" name="about_hero_text" rows="3">{{ $settings['about_hero_text'] ?? '' }}</textarea>
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Video Background Image</label>
            <input type="file" class="form-control" name="about_video_background">
            @if(isset($settings['about_video_background']))
                <div class="mt-2">
                    <img src="{{ asset($settings['about_video_background']) }}" style="height: 100px;">
                </div>
            @endif
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Video Link</label>
            <input type="url" class="form-control" name="about_video_link" value="{{ $settings['about_video_link'] ?? '' }}">
        </div>
    </div>

    <h5 class="mb-3 border-bottom pb-2">Social Media</h5>
    <div class="row mb-4">
        <div class="col-md-6 mb-3">
            <label class="form-label">Facebook URL</label>
            <input type="url" class="form-control" name="social_facebook" value="{{ $settings['social_facebook'] ?? '' }}">
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Behance URL</label>
            <input type="url" class="form-control" name="social_behance" value="{{ $settings['social_behance'] ?? '' }}">
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

@push('scripts')
<script>
    let serviceProcessCount = {{ isset($settings['services_process_steps']) ? count(json_decode($settings['services_process_steps'], true)) : 0 }};

    function addServiceProcess() {
        const wrapper = document.getElementById('service-process-wrapper');
        const html = `
            <div class="card mb-3 process-item" id="service-process-${serviceProcessCount}">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h6>Step ${serviceProcessCount + 1}</h6>
                        <button type="button" class="btn btn-danger btn-sm" onclick="removeServiceProcess(${serviceProcessCount})">Remove</button>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="services_process_steps[${serviceProcessCount}][title]">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="services_process_steps[${serviceProcessCount}][description]" rows="2"></textarea>
                    </div>
                </div>
            </div>
        `;
        wrapper.insertAdjacentHTML('beforeend', html);
        serviceProcessCount++;
    }

    function removeServiceProcess(id) {
        document.getElementById(`service-process-${id}`).remove();
    }
</script>
@endpush
