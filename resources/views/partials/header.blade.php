<!--Navigation-->
<header class="main-header js-main-header auto-hide-header">
    <div class="main-header__layout">
        <div class="main-header__logo">
            <div class="logo-dark"><a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo_d.svg') }}" alt="Depix Solution"></a></div>
        </div>
        <button class="btn btn--subtle main-header__nav-trigger js-main-header__nav-trigger" aria-label="Toggle menu" aria-expanded="false" aria-controls="main-header-nav"><i class="main-header__nav-trigger-icon" aria-hidden="true"></i><span>menu</span></button>
        <nav class="main-header__nav js-main-header__nav" id="main-header-nav" aria-labelledby="primary-menu">
            <ul class="dropdown__wrapper dropdown__trigger" id="primary-menu">
                <li class="menu-item menu-item-has-children"> <a>Home</a>
                    <ul class="sub-menu">
                        <li class="menu-item"> <a href="{{ route('slider.parallax') }}">Slider Parallax</a></li>
                        <li class="menu-item"><a href="{{ route('home') }}">Slider Fade</a></li>
                        <li class="menu-item"><a href="{{ route('slider.carousel') }}">Slider Carousel</a></li>
                    </ul>
                </li>
                <li class="menu-item menu-item-has-children"> <a>Portfolio</a>
                    <ul class="sub-menu">
                        <li class="menu-item"> <a href="{{ route('portfolio.1') }}">Portfolio style 1</a></li>
                        <li class="menu-item"><a href="{{ route('portfolio.2') }}">Portfolio style 2</a></li>
                        <li class="menu-item"><a href="{{ route('portfolio.3') }}">Portfolio style 3</a></li>
                        <li class="menu-item"><a href="{{ route('portfolio.4') }}">Portfolio style 4</a></li>
                        <li class="menu-item"><a href="{{ route('portfolio.5') }}">Portfolio style 5</a></li>
                    </ul>
                </li>
                <li class="menu-item menu-item-has-children"> <a>News</a>
                    <ul class="sub-menu">
                        <li class="menu-item"> <a href="{{ route('blog.sidebar') }}">Blog With Sidebar</a></li>
                        <li class="menu-item"><a href="{{ route('blog.no-sidebar') }}">Blog No Sidebar</a></li>
                        <li class="menu-item"><a href="{{ route('blog.list') }}">Blog List Style</a></li>
                        <li class="menu-item"><a href="{{ route('blog.card') }}">Blog Card Style</a></li>
                    </ul>
                </li>
                <li class="menu-item menu-item-has-children"> <a>Pages</a>
                    <ul class="sub-menu">
                        <li class="menu-item"><a href="{{ route('portfolio.1') }}">Single Portfolio</a></li>
                        <li class="menu-item"><a href="{{ route('blog.post', ['post' => 1]) }}">Single Post</a></li>
                        <li class="menu-item"><a href="{{ route('error.404') }}">Page 404</a></li>
                    </ul>
                </li>
                <li class="menu-item"> <a href="{{ route('about') }}">About</a></li>
                <li class="menu-item"> <a href="{{ route('contacts') }}">Contacts</a></li>
            </ul>
        </nav>
    </div>
</header>
