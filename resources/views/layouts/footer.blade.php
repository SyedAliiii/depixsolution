<footer class="footer section pb-0" data-background="{{ asset('assets/images/footer/footer-bg.png') }}">
    <div class="container">
       <div class="row gaper">
          <div class="col-12 col-lg-5 col-xl-6">
             <div class="footer__single">
                <a href="{{ route('home') }}" class="logo">
                   <img src="{{ asset('assets/images/logo.png') }}" alt="Image">
                </a>
                <div class="footer__single-meta">
                   <a href="#" target="_blank">
                      <i class="fa-sharp fa-solid fa-location-dot"></i>
                      {{ $settings['contact_address'] ?? 'Address Override' }}
                   </a>
                   <a href="tel:{{ $settings['contact_phone'] ?? '' }}">
                      <i class="fa-sharp fa-solid fa-phone-volume"></i>
                      {{ $settings['contact_phone'] ?? '(406) 555-0120' }}
                   </a>
                   <a href="mailto:{{ $settings['contact_email'] ?? '' }}">
                      <i class="fa-sharp fa-solid fa-envelope"></i>
                      {{ $settings['contact_email'] ?? 'info@depixstudio.com' }}
                   </a>
                </div>
                <div class="footer__cta text-start">
                   <a href="{{ route('contact') }}" class="btn btn--secondary">book a call now</a>
                </div>
             </div>
          </div>
          <div class="col-12 col-lg-2 col-xl-2">
             <div class="footer__single">
                <div class="footer__single-intro">
                   <h5>discover</h5>
                </div>
                <div class="footer__single-content">
                   <ul>
                      <li>
                         <a href="{{ route('about') }}">About Us</a>
                      </li>
                      <li>
                         <a href="#">Award Winning</a>
                      </li>
                      <li>
                         <a href="{{ route('blog.index') }}">Blog</a>
                      </li>
                      <li>
                         <a href="{{ route('services.index') }}">Services</a>
                      </li>
                      <li>
                         <a href="{{ route('contact') }}">careers</a>
                      </li>
                   </ul>
                </div>
             </div>
          </div>
          <div class="col-12 col-lg-5 col-xl-4">
             <div class="footer__single">
                <div class="footer__single-intro">
                   <h5>Subscribe our newsletter</h5>
                </div>
                <div class="footer__single-content">
                   <p>Welcome to our digital agency We specialize in helping business most like yours succeed
                      online.</p>
                   <div class="footer__single-form">
                      <form action="#" method="post">
                         <div class="input-email">
                            <input type="email" name="subscribe-news" id="subscribeNews"
                               placeholder="Enter Your Email" required>
                            <button type="submit" class="subscribe">
                               <i class="fa-sharp fa-solid fa-paper-plane"></i>
                            </button>
                         </div>
                      </form>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-12">
             <div class="footer__copyright">
                <div class="row align-items-center gaper">
                   <div class="col-12 col-lg-8">
                      <div class="footer__copyright-text text-center text-lg-start">
                         <p>
                            Copyright &copy;
                            <span id="copyYear"></span>
                            DepixStudio
                            . All Rights Reserved
                         </p>
                      </div>
                   </div>
                   <div class="col-12 col-lg-4">
                      <div class="social justify-content-center justify-content-lg-end">
                         <a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                         <a href="#" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                         <a href="#" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                         <a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </footer>
