<!--Footer--><a class="back-to-top js-back-to-top back-to-top--is-visible" data-offset="500" data-duration="300">
    <svg viewBox="0 0 20 20">
        <path d="M17,0H3C1.3,0,0,1.3,0,3v14c0,1.7,1.3,3,3,3h14c1.7,0,3-1.3,3-3V3C20,1.3,18.7,0,17,0z M12.3,11.7L11,10.4V16H9v-5.6 l-1.3,1.3l-1.4-1.4L10,6.6l3.7,3.7L12.3,11.7z M14,6H6V4h8V6z"></path>
    </svg></a>
<footer class="ms-footer">
    <div class="footer-contacts">
        <div class="container footer-c__info">
            <div class="ms-logo__default">
                <div class="logo-light"><a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo_w.svg') }}" alt="Depix Solution"></a></div>
            </div>
            <div class="footer__menu">
                <ul class="menu" id="footer-menu">
                    <li class="menu-item"><a href="{{ route('about') }}">About</a></li>
                    <li class="menu-item"><a href="{{ route('contacts') }}">Contacts</a></li>
                    <li class="menu-item"><a href="#">Privacy</a></li>
                </ul>
            </div>
            <ul class="socials">
                <li class="ms-btn"><a class="socicon-twitter" title="Twitter" target="_blank" href="http://twitter.com/"></a></li>
                <li class="ms-btn"><a class="socicon-dribbble" title="Dribbble" target="_blank" href="http://dribbble.com/"></a></li>
                <li class="ms-btn"><a class="socicon-facebook" title="Facebook" target="_blank" href="https://www.facebook.com/"></a></li>
                <li class="ms-btn"><a class="socicon-instagram" title="Instagram" target="_blank" href="https://www.instagram.com/"></a></li>
            </ul>
        </div>
    </div>
    <div class="footer-copyright">
        <p>Copyright © {{ date('Y') }}. Depix Solution</p>
    </div>
</footer>
