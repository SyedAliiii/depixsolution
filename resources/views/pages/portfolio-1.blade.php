@extends('layouts.app')

@section('title', 'Portfolio Style 1')

@section('content')
<!--Hero-->
<div class="margin-top-xl"></div>
<section class="hero hero--overlay-layer hero-default">
    <div class="container">
        <div class="hero__content text-left"><span>Portfolio style 1</span>
            <h1>My amazing works</h1>
            <p>Objectively supply excellent scenarios rather than resource maximizing technology. Rapidiously develop innovative convergence and covalent process improvements.</p>
        </div>
    </div>
</section>
<div class="container ms-content">
    <div class="subnav margin-bottom--lg">
        <div class="subnav__container"> 
            <div class="filter-nav filter-nav--expanded js-filter-nav">
                <button class="reset btn btn--subtle is-hidden js-filter-nav__control" aria-label="Select a filter option"><span class="js-filter-nav__placeholder" aria-hidden="true">All Products</span>
                    <svg class="icon icon--xxs margin-left-xxs" aria-hidden="true" viewBox="0 0 12 12">
                        <polyline points="0.5 3.5 6 9.5 11.5 3.5" fill="none" stroke-width="1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></polyline>
                    </svg>
                </button>
                <div class="filter-nav__wrapper js-filter-nav__wrapper" id="filter-nav">
                    <nav class="filter-nav__nav js-filter-nav__nav">
                        <ul class="filtr-btn filter-nav__list js-filter-nav__list">
                            <li class="filter-nav__item subnav__link" data-filter="*">
                                <button class="reset filter-nav__btn js-filter-nav__btn js-tab-focus active" aria-current="true">All</button>
                            </li>
                            <li class="filter-nav__item subnav__link" data-filter=".design">
                                <button class="reset filter-nav__btn js-filter-nav__btn js-tab-focus">Design</button>
                            </li>
                            <li class="filter-nav__item subnav__link" data-filter=".project">
                                <button class="reset filter-nav__btn js-filter-nav__btn js-tab-focus">Project</button>
                            </li>
                            <li class="filter-nav__item subnav__link" data-filter=".trend">
                                <button class="reset filter-nav__btn js-filter-nav__btn js-tab-focus">Trend</button>
                            </li>
                            <li class="filter-nav__marker js-filter-nav__marker" aria-hidden="true"></li>
                        </ul>
                        <button class="reset filter-nav__close-btn is-hidden js-filter-nav__close-btn js-tab-focus" aria-label="Close navigation">
                            <svg class="icon" viewBox="0 0 16 16" aria-hidden="true">
                                <g stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
                                    <line x1="13.5" y1="2.5" x2="2.5" y2="13.5"></line>
                                    <line x1="2.5" y1="2.5" x2="13.5" y2="13.5"></line>
                                </g>
                            </svg>
                        </button>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row ms-p2 work-grid parent grid grid-gap-lg grid-content portfolio-feed">
        <div class="grid-sizer col-xs-12 col-md-4 col-sm-4"></div>
        <div class="grid-item mb-5 col-xs-12 col-md-4 col-sm-4 design">
            <div class="work-card card--is-link"><a class="work-card__img-link" href="{{ route('portfolio.single') }}" aria-label="Servant of academy">
                <figure class="work-card__img media-wrapper media-wrapper--3:4"><img src="{{ asset('assets/img/portfolio/jr_pf.png') }}" alt="Servant of academy">
                    <div class="glow-wrap"><i class="glow vertical"></i></div>
                </figure></a>
                <div class="work-card__content"><span class="work-card__badge margin-bottom-xxs">design</span><a class="work-card__title" href="{{ route('portfolio.single') }}">
                    <h3>Servant of academy</h3>
                    </a>
                    <a class="work-card__link" href="{{ route('portfolio.single') }}">Show Project
                        <svg class="icon" viewBox="0 0 12 12">
                            <g stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="11.5" y1="6" x2="0.5" y2="6"></line>
                                <polyline points="7.5 2 11.5 6 7.5 10"></polyline>
                            </g>
                        </svg></a></div>
            </div>
        </div>
        <div class="grid-item mb-5 col-xs-12 col-md-4 col-sm-4 project">
            <div class="work-card card--is-link"><a class="work-card__img-link" href="{{ route('portfolio.single') }}" aria-label="The kissing eyes">
                <figure class="work-card__img media-wrapper media-wrapper--3:4"><img src="{{ asset('assets/img/portfolio/jr_pf.png') }}" alt="The kissing eyes">
                    <div class="glow-wrap"><i class="glow vertical"></i></div>
                </figure></a>
                <div class="work-card__content"><span class="work-card__badge margin-bottom-xxs">project</span><a class="work-card__title" href="{{ route('portfolio.single') }}">
                    <h3>The kissing eyes</h3>
                    </a>
                    <a class="work-card__link" href="{{ route('portfolio.single') }}">Show Project
                        <svg class="icon" viewBox="0 0 12 12">
                            <g stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="11.5" y1="6" x2="0.5" y2="6"></line>
                                <polyline points="7.5 2 11.5 6 7.5 10"></polyline>
                            </g>
                        </svg></a></div>
            </div>
        </div>
        <div class="grid-item mb-5 col-xs-12 col-md-4 col-sm-4 trend">
            <div class="work-card card--is-link"><a class="work-card__img-link" href="{{ route('portfolio.single') }}" aria-label="Silk of secrets">
                <figure class="work-card__img media-wrapper media-wrapper--3:4"><img src="{{ asset('assets/img/portfolio/jr_pf.png') }}" alt="Silk of secrets">
                    <div class="glow-wrap"><i class="glow vertical"></i></div>
                </figure></a>
                <div class="work-card__content"><span class="work-card__badge margin-bottom-xxs">trend</span><a class="work-card__title" href="{{ route('portfolio.single') }}">
                    <h3>Silk of secrets</h3>
                    </a>
                    <a class="work-card__link" href="{{ route('portfolio.single') }}">Show Project
                        <svg class="icon" viewBox="0 0 12 12">
                            <g stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="11.5" y1="6" x2="0.5" y2="6"></line>
                                <polyline points="7.5 2 11.5 6 7.5 10"></polyline>
                            </g>
                        </svg></a></div>
            </div>
        </div>
        <div class="grid-item mb-5 col-xs-12 col-md-4 col-sm-4 project">
            <div class="work-card card--is-link"><a class="work-card__img-link" href="{{ route('portfolio.single') }}" aria-label="Emerald in the children">
                <figure class="work-card__img media-wrapper media-wrapper--3:4"><img src="{{ asset('assets/img/portfolio/jr_pf.png') }}" alt="Emerald in the children">
                    <div class="glow-wrap"><i class="glow vertical"></i></div>
                </figure></a>
                <div class="work-card__content"><span class="work-card__badge margin-bottom-xxs">project</span><a class="work-card__title" href="{{ route('portfolio.single') }}">
                    <h3>Emerald in the children</h3>
                    </a>
                    <a class="work-card__link" href="{{ route('portfolio.single') }}">Show Project
                        <svg class="icon" viewBox="0 0 12 12">
                            <g stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="11.5" y1="6" x2="0.5" y2="6"></line>
                                <polyline points="7.5 2 11.5 6 7.5 10"></polyline>
                            </g>
                        </svg></a></div>
            </div>
        </div>
        <div class="grid-item mb-5 col-xs-12 col-md-4 col-sm-4 design">
            <div class="work-card card--is-link"><a class="work-card__img-link" href="{{ route('portfolio.single') }}" aria-label="Wind in the storms">
                <figure class="work-card__img media-wrapper media-wrapper--3:4"><img src="{{ asset('assets/img/portfolio/jr_pf.png') }}" alt="Wind in the storms">
                    <div class="glow-wrap"><i class="glow vertical"></i></div>
                </figure></a>
                <div class="work-card__content"><span class="work-card__badge margin-bottom-xxs">design</span><a class="work-card__title" href="{{ route('portfolio.single') }}">
                    <h3>Wind in the storms</h3>
                    </a>
                    <a class="work-card__link" href="{{ route('portfolio.single') }}">Show Project
                        <svg class="icon" viewBox="0 0 12 12">
                            <g stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="11.5" y1="6" x2="0.5" y2="6"></line>
                                <polyline points="7.5 2 11.5 6 7.5 10"></polyline>
                            </g>
                        </svg></a></div>
            </div>
        </div>
        <div class="grid-item mb-5 col-xs-12 col-md-4 col-sm-4 trend">
            <div class="work-card card--is-link"><a class="work-card__img-link" href="{{ route('portfolio.single') }}" aria-label="Legacy of rainbow">
                <figure class="work-card__img media-wrapper media-wrapper--3:4"><img src="{{ asset('assets/img/portfolio/jr_pf.png') }}" alt="Legacy of rainbow">
                    <div class="glow-wrap"><i class="glow vertical"></i></div>
                </figure></a>
                <div class="work-card__content"><span class="work-card__badge margin-bottom-xxs">trend</span><a class="work-card__title" href="{{ route('portfolio.single') }}">
                    <h3>Legacy of rainbow</h3>
                    </a>
                    <a class="work-card__link" href="{{ route('portfolio.single') }}">Show Project
                        <svg class="icon" viewBox="0 0 12 12">
                            <g stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="11.5" y1="6" x2="0.5" y2="6"></line>
                                <polyline points="7.5 2 11.5 6 7.5 10"></polyline>
                            </g>
                        </svg></a></div>
            </div>
        </div>
        <div class="grid-item mb-5 col-xs-12 col-md-4 col-sm-4 trend">
            <div class="work-card card--is-link"><a class="work-card__img-link" href="{{ route('portfolio.single') }}" aria-label="Dance and night club">
                <figure class="work-card__img media-wrapper media-wrapper--3:4"><img src="{{ asset('assets/img/portfolio/jr_pf.png') }}" alt="Dance and night club">
                    <div class="glow-wrap"><i class="glow vertical"></i></div>
                </figure></a>
                <div class="work-card__content"><span class="work-card__badge margin-bottom-xxs">trend</span><a class="work-card__title" href="{{ route('portfolio.single') }}">
                    <h3>Dance and night club</h3>
                    </a>
                    <a class="work-card__link" href="{{ route('portfolio.single') }}">Show Project
                        <svg class="icon" viewBox="0 0 12 12">
                            <g stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="11.5" y1="6" x2="0.5" y2="6"></line>
                                <polyline points="7.5 2 11.5 6 7.5 10"></polyline>
                            </g>
                        </svg></a></div>
            </div>
        </div>
        <div class="grid-item mb-5 col-xs-12 col-md-4 col-sm-4 project">
            <div class="work-card card--is-link"><a class="work-card__img-link" href="{{ route('portfolio.single') }}" aria-label="All in love with water">
                <figure class="work-card__img media-wrapper media-wrapper--3:4"><img src="{{ asset('assets/img/portfolio/jr_pf.png') }}" alt="All in love with water">
                    <div class="glow-wrap"><i class="glow vertical"></i></div>
                </figure></a>
                <div class="work-card__content"><span class="work-card__badge margin-bottom-xxs">project</span><a class="work-card__title" href="{{ route('portfolio.single') }}">
                    <h3>All in love with water</h3>
                    </a>
                    <a class="work-card__link" href="{{ route('portfolio.single') }}">Show Project
                        <svg class="icon" viewBox="0 0 12 12">
                            <g stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="11.5" y1="6" x2="0.5" y2="6"></line>
                                <polyline points="7.5 2 11.5 6 7.5 10"></polyline>
                            </g>
                        </svg></a></div>
            </div>
        </div>
        <div class="grid-item mb-5 col-xs-12 col-md-4 col-sm-4 design">
            <div class="work-card card--is-link"><a class="work-card__img-link" href="{{ route('portfolio.single') }}" aria-label="The wizards of the soul">
                <figure class="work-card__img media-wrapper media-wrapper--3:4"><img src="{{ asset('assets/img/portfolio/jr_pf.png') }}" alt="The wizards of the soul">
                    <div class="glow-wrap"><i class="glow vertical"></i></div>
                </figure></a>
                <div class="work-card__content"><span class="work-card__badge margin-bottom-xxs">design</span><a class="work-card__title" href="{{ route('portfolio.single') }}">
                    <h3>The wizards of the soul</h3>
                    </a>
                    <a class="work-card__link" href="{{ route('portfolio.single') }}">Show Project
                        <svg class="icon" viewBox="0 0 12 12">
                            <g stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="11.5" y1="6" x2="0.5" y2="6"></line>
                                <polyline points="7.5 2 11.5 6 7.5 10"></polyline>
                            </g>
                        </svg></a></div>
            </div>
        </div>
    </div>
    <div class="ms-pagination works-pagination">
        <button class="btn btn--sm btn-load-more btn--primary btn--preserve-width">Load More</button>
    </div>
</div>
@endsection
