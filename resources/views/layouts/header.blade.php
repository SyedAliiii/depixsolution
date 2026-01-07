<header class="header">
    <div class="primary-navbar secondary--navbar">
       <div class="container">
          <div class="row">
             <div class="col-12">
                <nav class="navbar p-0">
                   <div class="navbar__logo">
                        <a href="{{ route('home') }}" aria-label="go to home">
                           @if(isset($settings['site_logo']))
                               <img src="{{ asset($settings['site_logo']) }}" alt="Logo" style="max-height: 50px;">
                           @else
                               <img src="{{ asset('assets/images/logo.png') }}" alt="Image">
                           @endif
                        </a>
                   </div>
                   <div class="navbar__options">
                      <button class="open-offcanvas-nav d-flex" aria-label="toggle mobile menu"
                         title="open offcanvas menu"></button>
                   </div>
                </nav>
             </div>
          </div>
       </div>
    </div>
 </header>
 <!-- ==== / header end ==== -->
 <!-- ==== offcanvas nav start ==== -->
 <div class="offcanvas-nav">
    <div class="offcanvas-menu">
       <nav class="offcanvas-menu__wrapper">
          <div class="offcanvas-menu__header nav-fade">
             <div class="logo">
                <a href="{{ route('home') }}">
                   <img src="{{ asset('assets/images/logo.png') }}" alt="" title="">
                </a>
             </div>
             <a href="javascript:void(0)" aria-label="close offcanvas menu" class="close-offcanvas-menu">
                <i class="fa-light fa-xmark-large"></i>
             </a>
          </div>
          <div class="offcanvas-menu__list">
             <div class="navbar__menu">
                <ul>
                   <li class="navbar__item nav-fade">
                      <a href="{{ route('home') }}">Home</a>
                   </li>
                   <li class="navbar__item navbar__item--has-children nav-fade">
                      <a href="javascript:void(0)" aria-label="dropdown menu" class="navbar__dropdown-label">About Us</a>
                      <ul class="navbar__sub-menu">
                         <li>
                            <a href="{{ route('about') }}">About Us</a>
                         </li>
                         <li>
                            <a href="{{ route('teams') }}">Our Teams</a>
                         </li>
                      </ul>
                   </li>
                   <li class="navbar__item navbar__item--has-children nav-fade">
                      <a href="javascript:void(0)" aria-label="dropdown menu" class="navbar__dropdown-label">Services</a>
                      <ul class="navbar__sub-menu">
                         <li>
                            <a href="{{ route('services.index') }}" class="{{ Route::is('services.*') ? 'active' : '' }}">Our Services</a>
                         </li>
                      </ul>
                   </li>
                   <li class="navbar__item navbar__item--has-children nav-fade">
                      <a href="javascript:void(0)" aria-label="dropdown menu" class="navbar__dropdown-label">Projects</a>
                      <ul class="navbar__sub-menu">
                         {{-- TODO: Dynamic Projects --}}
                         <li>
                            <a href="{{ route('portfolio.index') }}" class="{{ Route::is('portfolio.*') ? 'active' : '' }}">Our Projects</a>
                         </li>
                         <li>
                            <a href="{{ route('faq') }}">FAQ</a>
                         </li>
                      </ul>
                   </li>
                   <li class="navbar__item navbar__item--has-children nav-fade">
                    <a href="javascript:void(0)" aria-label="dropdown menu" class="navbar__dropdown-label">Blog</a>
                    <ul class="navbar__sub-menu">
                       <li>
                          <a href="{{ route('blog.index') }}" class="{{ Route::is('blog.*') ? 'active' : '' }}">Blog</a>
                       </li>
                    </ul>
                 </li>
                   <li class="navbar__item nav-fade">
                      <a href="{{ route('contact') }}" class="{{ Route::is('contact') ? 'active' : '' }}">Contact Us</a>
                   </li>
                </ul>
             </div>
          </div>
          <div class="offcanvas-menu__options nav-fade">
             <div class="offcanvas__mobile-options d-flex">
                <a href="{{ route('contact') }}" class="btn btn--secondary">Let's Talk</a>
             </div>
          </div>
          <div class="offcanvas-menu__social social nav-fade">
             <a href="https://www.facebook.com/" target="_blank" aria-label="share us on facebook">
                <i class="fa-brands fa-facebook-f"></i>
             </a>
             <a href="https://www.twitter.com/" target="_blank" aria-label="share us on twitter">
                <i class="fa-brands fa-twitter"></i>
             </a>
             <a href="https://www.pinterest.com/" target="_blank" aria-label="share us on pinterest">
                <i class="fa-brands fa-linkedin-in"></i>
             </a>
             <a href="https://www.instagram.com/" target="_blank" aria-label="share us on instagram">
                <i class="fa-brands fa-instagram"></i>
             </a>
          </div>
       </nav>
    </div>
 </div>
 <!-- ==== / offcanvas nav end ==== -->
