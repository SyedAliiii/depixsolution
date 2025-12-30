@extends('layouts.app')

@section('title', 'Blog Post')

@section('content')
<!--Hero-->
<div class="margin-top-xl"></div>
<section class="hero hero--overlay-layer hero-default">
    <div class="container">
        <div class="hero__content text-left"><span>Single Post</span>
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->excerpt }}</p>
        </div>
    </div>
</section>
<div class="container ms-content">
    <div class="row justify-content-between">
        <div class="row blog-sidebar grid-content col-lg-8">
            <article class="single-post col-12">
                <figure class="post-thumbnail media-wrapper media-wrapper--16:9">
                    <img src="{{ asset($post->image ?? 'assets/img/blog/jr-post-default.png') }}" alt="{{ $post->title }}">
                </figure>
                <div class="post-content text-component">
                    <div class="post-meta-default">
                        <span class="post__date">{{ $post->created_at->format('F d, Y') }}</span>
                        <span role="separator"></span>
                        <span class="post__category link"><a href="#">{{ $post->category }}</a></span>
                    </div>
                    {!! $post->content !!}
                </div>
                <div class="post-tags">
                    <span>Category:</span>
                    <a href="#">{{ $post->category }}</a>
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
                    @foreach($recentPosts as $recent)
                    <li class="recent-post">
                        <div class="post-image">
                            <a href="{{ route('blog.post', $recent) }}">
                                <img src="{{ asset($recent->image ?? 'assets/img/blog/jr-post-default.png') }}" alt="{{ $recent->title }}">
                            </a>
                        </div>
                        <div class="recent-post__info">
                            <a href="{{ route('blog.post', $recent) }}">{{ $recent->title }}</a>
                            <span class="post-date">{{ $recent->created_at->format('F d, Y') }}</span>
                        </div>
                    </li>
                    @endforeach
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
