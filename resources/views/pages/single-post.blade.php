@extends('layouts.app')

@section('title', 'Blog Post')

@section('content')
<!--Hero-->
<div class="margin-top-xl"></div>
<section class="hero hero--overlay-layer hero-default">
    <div class="container">
        <div class="hero__content text-left"><span>Single Post</span>
            <h1>Your Key To Success: GAME</h1>
            <p>Globally e-enable an expanded array of bandwidth before process-centric deliverables.</p>
        </div>
    </div>
</section>
<div class="container ms-content">
    <div class="row justify-content-between">
        <div class="row blog-sidebar grid-content col-lg-8">
            <article class="single-post col-12">
                <figure class="post-thumbnail media-wrapper media-wrapper--16:9">
                    <img src="{{ asset('assets/img/blog/jr-post-default.png') }}" alt="Your Key To Success: GAME">
                </figure>
                <div class="post-content text-component">
                    <div class="post-meta-default">
                        <span class="post__date">July 26, 2020</span>
                        <span role="separator"></span>
                        <span class="post__category link"><a href="#">design</a></span>
                    </div>
                    <p>Objectively maintain sticky initiatives whereas technically sound niches. Conveniently leverage others principle-centered catalysts for change before dynamic information. Collaboratively pursue maintainable mindshare before sticky internal or organic sources.</p>
                    <p>Credibly negotiate standardized metrics without premium collaboration and idea-sharing. Completely pursue distinctive testing procedures for one-to-one channels. Professionally plagiarize installed base testing procedures whereas client-centric services.</p>
                    <h3>The Power of Design</h3>
                    <p>Credibly scale flexible metrics vis-a-vis market-driven data. Credibly aggregate best-of-breed meta-services rather than seamless intellectual capital. Appropriately myocardinate sustainable paradigms with synergistic sources.</p>
                    <blockquote>
                        <p>Monotonectally whiteboard inexpensive data with premium outside the box thinking. Enthusiastically expedite user friendly alignments rather than parallel initiatives.</p>
                    </blockquote>
                    <p>Interactively embrace extensible collaboration and idea-sharing for economically sound expertise. Assertively parallel task intermandated technologies through customized sources.</p>
                </div>
                <div class="post-tags">
                    <span>Tags:</span>
                    <a href="#">Art</a>
                    <a href="#">Design</a>
                    <a href="#">Technology</a>
                </div>
                <div class="post-share">
                    <span>Share:</span>
                    <ul class="socials">
                        <li class="ms-btn"><a class="socicon-twitter" title="Twitter" target="_blank" href="http://twitter.com/"></a></li>
                        <li class="ms-btn"><a class="socicon-facebook" title="Facebook" target="_blank" href="https://www.facebook.com/"></a></li>
                        <li class="ms-btn"><a class="socicon-linkedin" title="LinkedIn" target="_blank" href="https://www.linkedin.com/"></a></li>
                    </ul>
                </div>
            </article>
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
                </ul>
            </aside>
        </div>
    </div>
</div>
@endsection
