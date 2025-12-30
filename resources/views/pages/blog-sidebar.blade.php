@extends('layouts.app')

@section('title', 'Blog')

@section('content')
<!--Hero-->
<div class="margin-top-xl"></div>
<section class="hero hero--overlay-layer hero-default">
    <div class="container">
        <div class="hero__content text-left"><span>Blog With Sidebar</span>
            <h1>DISCOVER FASCINATING STORIES</h1>
            <p>Globally e-enable an expanded array of bandwidth before process-centric deliverables.</p>
        </div>
    </div>
</section>
<div class="container ms-content">
    <div class="row justify-content-between">
        <div class="row blog-sidebar grid-content col-lg-8">
            <div class="grid-sizer col-12"></div>
            <article class="grid-item col-12 pb-lg-5">
                <div class="work-card card--is-link"><a class="post_thumb" href="{{ route('blog.post') }}">
                    <figure class="card__img media-wrapper media-wrapper--16:9"><img src="{{ asset('assets/img/blog/jr-post-default.png') }}" alt="Your Key To Success: GAME">
                        <div class="glow-wrap"><i class="glow"></i></div>
                    </figure></a>
                    <div class="card__content"><a class="card__title" href="{{ route('blog.post') }}">
                        <h4>Your Key To Success: GAME</h4></a>
                        <div class="post-meta-default"><span class="post__date">July 26, 2020</span><span role="separator"></span><span class="post__category link"><a href="#">design</a></span></div>
                        <p class="text-sm post-excerpt">Objectively maintain sticky initiatives whereas technically sound niches. Conveniently leverage others principle-centered catalysts for change before dynamic information.</p>
                        <div class="post-info__footer"><span class="post-author__name">By Mad Sparrow</span><span class="post-info__divider"></span><a class="post-read-more" href="{{ route('blog.post') }}">Read more
                            <svg class="icon" viewBox="0 0 12 12">
                                <g stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="11.5" y1="6" x2="0.5" y2="6"></line>
                                    <polyline points="7.5 2 11.5 6 7.5 10"></polyline>
                                </g>
                            </svg></a></div>
                    </div>
                </div>
            </article>
            <article class="grid-item col-12 pb-lg-5">
                <div class="work-card card--is-link"><a class="post_thumb" href="{{ route('blog.post') }}">
                    <figure class="card__img media-wrapper media-wrapper--16:9"><img src="{{ asset('assets/img/blog/jr-post-default.png') }}" alt="Willow of Soaring">
                        <div class="glow-wrap"><i class="glow"></i></div>
                    </figure></a>
                    <div class="card__content"><a class="card__title" href="{{ route('blog.post') }}">
                        <h4>Willow of Soaring</h4></a>
                        <div class="post-meta-default"><span class="post__date">July 26, 2020</span><span role="separator"></span><span class="post__category link"><a href="#">story</a></span></div>
                        <p class="text-sm post-excerpt">Credibly negotiate standardized metrics without premium collaboration and idea-sharing. Completely pursue distinctive testing procedures for one-to-one channels.</p>
                        <div class="post-info__footer"><span class="post-author__name">By Mad Sparrow</span><span class="post-info__divider"></span><a class="post-read-more" href="{{ route('blog.post') }}">Read more
                            <svg class="icon" viewBox="0 0 12 12">
                                <g stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="11.5" y1="6" x2="0.5" y2="6"></line>
                                    <polyline points="7.5 2 11.5 6 7.5 10"></polyline>
                                </g>
                            </svg></a></div>
                    </div>
                </div>
            </article>
            <article class="grid-item col-12 pb-lg-5">
                <div class="work-card card--is-link"><a class="post_thumb" href="{{ route('blog.post') }}">
                    <figure class="card__img media-wrapper media-wrapper--16:9"><img src="{{ asset('assets/img/blog/jr-post-default.png') }}" alt="Healing in the Memory">
                        <div class="glow-wrap"><i class="glow"></i></div>
                    </figure></a>
                    <div class="card__content"><a class="card__title" href="{{ route('blog.post') }}">
                        <h4>Healing in the Memory</h4></a>
                        <div class="post-meta-default"><span class="post__date">July 26, 2020</span><span role="separator"></span><span class="post__category link"><a href="#">creativity</a></span></div>
                        <p class="text-sm post-excerpt">Collaboratively pursue maintainable mindshare before sticky internal or organic sources. Credibly scale flexible metrics vis-a-vis market-driven data.</p>
                        <div class="post-info__footer"><span class="post-author__name">By Mad Sparrow</span><span class="post-info__divider"></span><a class="post-read-more" href="{{ route('blog.post') }}">Read more
                            <svg class="icon" viewBox="0 0 12 12">
                                <g stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="11.5" y1="6" x2="0.5" y2="6"></line>
                                    <polyline points="7.5 2 11.5 6 7.5 10"></polyline>
                                </g>
                            </svg></a></div>
                    </div>
                </div>
            </article>
            <div class="grid-item ms-pagination col-lg-12 pb-lg-3 pt-lg-3">
                <nav class="pagination">
                    <ol class="pagination__list">
                        <li class="page-item prev"><a href="#">
                            <svg class="icon" aria-hidden="true" viewBox="0 0 16 16">
                                <title>Prev</title>
                                <g stroke-width="2" stroke="currentColor">
                                    <polyline fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="9.5,3.5 5,8 9.5,12.5"></polyline>
                                </g>
                            </svg></a></li>
                        <li class="page-item"><a class="pagination__item" href="#">1</a></li>
                        <li class="page-item active"><a class="pagination__item" href="#">2</a></li>
                        <li class="page-item"><a class="pagination__item" href="#">3</a></li>
                        <li class="page-item next"><a href="#">
                            <svg class="icon" aria-hidden="true" viewBox="0 0 16 16">
                                <title>Next</title>
                                <g stroke-width="2" stroke="currentColor">
                                    <polyline fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6.5,3.5 11,8 6.5,12.5"></polyline>
                                </g>
                            </svg></a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="ms-sidebar pl-lg-5 col-lg-4">
            <aside class="jr_widget_recent_posts">
                <div class="text-divider">
                    <h5>Recent Posts</h5>
                </div>
                <ul>
                    <li class="recent-post">
                        <div class="post-image"><a href="{{ route('blog.post') }}"><img src="{{ asset('assets/img/blog/sidebar/b-s-img.png') }}" alt="img title"></a></div>
                        <div class="recent-post__info"><a href="{{ route('blog.post') }}">Five Fantastic Experience</a><span class="post-date">July 26, 2020</span></div>
                    </li>
                    <li class="recent-post">
                        <div class="post-image"><a href="{{ route('blog.post') }}"><img src="{{ asset('assets/img/blog/sidebar/b-s-img.png') }}" alt="img title"></a></div>
                        <div class="recent-post__info"><a href="{{ route('blog.post') }}">We Love Design</a><span class="post-date">July 26, 2020</span></div>
                    </li>
                    <li class="recent-post">
                        <div class="post-image"><a href="{{ route('blog.post') }}"><img src="{{ asset('assets/img/blog/sidebar/b-s-img.png') }}" alt="img title"></a></div>
                        <div class="recent-post__info"><a href="{{ route('blog.post') }}">You Should Experience</a><span class="post-date">July 26, 2020</span></div>
                    </li>
                </ul>
            </aside>
            <aside class="widget_categories">
                <div class="text-divider">
                    <h5>Categories</h5>
                </div>
                <ul>
                    <li class="cat-item"><a href="#">Creativity </a><span>(2)</span></li>
                    <li class="cat-item"><a href="#">Design </a><span>(6)</span></li>
                    <li class="cat-item"><a href="#">Story </a><span>(4)</span></li>
                    <li class="cat-item"><a href="#">Travel </a><span>(11)</span></li>
                    <li class="cat-item"><a href="#">Fashion </a><span>(5)</span></li>
                </ul>
            </aside>
            <aside class="widget_tag_cloud">
                <div class="text-divider">
                    <h5>Tags</h5>
                </div>
                <div class="tagcloud"><a class="tag-cloud-link" href="#">Art (14)</a><a class="tag-cloud-link" href="#">Design (4)</a><a class="tag-cloud-link" href="#">People (6)</a><a class="tag-cloud-link" href="#">Sport (7)</a><a class="tag-cloud-link" href="#">Life (5)</a><a class="tag-cloud-link" href="#">Technology (81)</a><a class="tag-cloud-link" href="#">Music (5)</a><a class="tag-cloud-link" href="#">Inspiration (3)</a></div>
            </aside>
        </div>
    </div>
</div>
@endsection
