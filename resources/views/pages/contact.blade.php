@extends('layouts.app')

@section('title', 'Contact Us - Xpovio Digital Agency')

@section('content')
<!-- ==== banner start ==== -->
<section class="cmn-banner bg-img" data-background="{{ asset('assets/images/banner/cmn-banner-bg.png') }}">
   <div class="container">
      <div class="row gaper align-items-center">
         <div class="col-12 col-lg-5 col-xl-7">
            <div class="text-center text-lg-start">
               <h2 class="title title-anim">Contact Us</h2>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">
                           <i class="fa-solid fa-house"></i>
                           Home
                        </a>
                     </li>
                     <li class="breadcrumb-item active" aria-current="page">
                        Contact Us
                     </li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ==== / banner end ==== -->
<!-- ==== contact start ==== -->
<section class="section contact-m fade-wrapper">
   <div class="container">
      <div class="row gaper">
         <div class="col-12 col-sm-6 col-xl-3">
            <div class="contact-m__single topy-tilt fade-top">
               <div class="thumb">
                  <img src="{{ asset('assets/images/phone.png') }}" alt="Image">
               </div>
               <div class="content">
                  <h4>Phone & Fax</h4>
                  <p>
                     <a href="tel:{{ $settings['contact_phone'] ?? '' }}">{{ $settings['contact_phone'] ?? '(406) 555-0120' }}</a>
                  </p>
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-6 col-xl-3">
            <div class="contact-m__single topy-tilt fade-top">
               <div class="thumb">
                  <img src="{{ asset('assets/images/mail.png') }}" alt="Image">
               </div>
               <div class="content">
                  <h4>Mail Address</h4>
                  <p>
                     <a href="mailto:{{ $settings['contact_email'] ?? '' }}">{{ $settings['contact_email'] ?? 'info@xpovio.com' }}</a>
                  </p>
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-6 col-xl-3">
            <div class="contact-m__single topy-tilt fade-top">
               <div class="thumb">
                  <img src="{{ asset('assets/images/location.png') }}" alt="Image">
               </div>
               <div class="content">
                  <h4>Our Location</h4>
                  <p>
                     <a href="#" target="_blank">
                        {{ $settings['contact_address'] ?? '901 N Pitt Str., Suite 170 Alexandria, USA' }}
                     </a>
                  </p>
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-6 col-xl-3">
            <div class="contact-m__single topy-tilt fade-top">
               <div class="thumb">
                  <img src="{{ asset('assets/images/time.png') }}" alt="Image">
               </div>
               <div class="content">
                  <h4>Office Hour</h4>
                  <p>
                     Sun - Thu
                     09 am - 06pm
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-12">
            <div class="map-wrapper">
               <div class="row gaper">
                  <div class="col-12 col-lg-6">
                     <div class="contact__map fade-top">
                        <iframe
                           src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20342.411046372905!2d-74.16638039276373!3d40.719832743885284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1649562691355!5m2!1sen!2sbd"
                           width="100" height="800" style="border:0;" allowfullscreen="" loading="lazy"
                           referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                  </div>
                  <div class="col-12 col-lg-6">
                     <div class="contact-main__form  fade-top">
                        <h3>Leave A Message</h3>
                        <form action="#" method="post" class="section__content-cta">
                           @csrf
                           <div class="group-wrapper">
                              <div class="group-input ">
                                 <input type="text" name="contact-name" id="contactName"
                                    placeholder="Name">
                              </div>
                              <div class="group-input ">
                                 <input type="email" name="contact-email" id="contactEmail"
                                    placeholder="Email">
                              </div>
                           </div>
                           <div class="group-input ">
                              <select class="subject">
                                 <option data-display="Subject">
                                    Subject
                                 </option>
                                 <option value="1">Account</option>
                                 <option value="2">Service</option>
                                 <option value="3">Pricing</option>
                                 <option value="4">Support</option>
                              </select>
                           </div>
                           <div class="group-input ">
                              <textarea name="contact-message" id="contactMessage"
                                 placeholder="Message"></textarea>
                           </div>
                           <div class="form-cta justify-content-start">
                              <button type="submit" class="btn btn--primary">
                                 Send Message
                              </button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ==== / contact end ==== -->
@endsection
