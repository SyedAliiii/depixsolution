@extends('layouts.app')

@section('title', 'Blog - Xpovio Digital Agency')

@section('content')
<!-- ==== banner start ==== -->
<section class="cmn-banner bg-img" data-background="{{ asset('assets/images/banner/cmn-banner-bg.png') }}">
   <div class="container">
      <div class="row gaper align-items-center">
         <div class="col-12 col-lg-5 col-xl-7">
            <div class="text-center text-lg-start">
               <h2 class="title title-anim">blog standard</h2>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">
                           <i class="fa-solid fa-house"></i>
                           Home
                        </a>
                     </li>
                     <li class="breadcrumb-item active" aria-current="page">
                        blog standard
                     </li>
                  </ol>
               </nav>
            </div>
         </div>
         <div class="col-12 col-lg-7 col-xl-5">
            <div class="text-center text-lg-start">
               <p class="primary-text">We're an UK-based top-notch design agency committed to partnering
                  with good companies and hiring the right people for the right roles.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ==== / banner end ==== -->
<!-- ==== blog section start ==== -->
<section class="section blog-main fade-wrapper">
   <div class="container">
      <div class="row gaper">
         <div class="col-12 col-xl-8">
            <div class="blog-main__content">
               @foreach($posts as $post)
               <div class="blog-main__single fade-top">
                  <div class="thumb">
                     <div class="thumb-link ">
                        <a href="{{ route('blog.show', $post->slug) }}">
                           <img src="{{ asset($post->image) }}" alt="Image">
                        </a>
                     </div>
                     <div class="meta">
                        <div class="meta__left">
                           <p>
                              <strong>Written by :</strong>
                              Admin
                           </p>
                           <span></span>
                           <p>{{ $post->created_at->format('d/m/Y') }}</p>
                        </div>
                        <div class="meta__right">
                           <a href="#">News</a>
                        </div>
                     </div>
                  </div>
                  <div class="content ">
                     <h4 class="h4">
                        <a href="{{ route('blog.show', $post->slug) }}">
                           {{ $post->title }}
                        </a>
                     </h4>
                     <p>
                        {{ Str::limit(strip_tags($post->content), 150) }}
                     </p>
                     <div class="cta">
                        <a href="{{ route('blog.show', $post->slug) }}">
                           <i class="fa-sharp fa-regular fa-arrow-right"></i>
                        </a>
                     </div>
                  </div>
               </div>
               @endforeach
               
               <div class="pagination-wrapper">
                  {{ $posts->links('pagination::bootstrap-4') }}
               </div>
            </div>
         </div>
         <div class="col-12 col-xl-4">
            <div class="blog-main__sidebar">
               <div class="widget ">
                  <div class="widget__head">
                     <h5 class="h5">Search</h5>
                  </div>
                  <div class="widget-search">
                     <form action="#" method="post">
                        <div class="form-group-input">
                           <input type="search" name="blog-search" id="blogSearch"
                              placeholder="Search here. . .">
                           <button type="submit">
                              <i class="fa-solid fa-magnifying-glass"></i>
                           </button>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="widget">
                  <div class="widget__head">
                     <h5 class="h5">Recent Posts</h5>
                  </div>
                  <div class="widget__latest">
                     @foreach($posts->take(3) as $recentPost)
                     <div class="latest-single ">
                        <div class="latest-thumb">
                           <a href="{{ route('blog.show', $recentPost->slug) }}">
                              <img src="{{ asset($recentPost->image) }}" alt="Image">
                           </a>
                        </div>
                        <div class="latest-content">
                           <p>{{ $recentPost->created_at->format('d/m/Y') }}</p>
                           <p>
                              <a href="{{ route('blog.show', $recentPost->slug) }}">
                                 {{ Str::limit($recentPost->title, 40) }}
                              </a>
                           </p>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
               <div class="widget ">
                  <div class="widget__head">
                     <h5 class="h5">Tags</h5>
                  </div>
                  <div class="widget__tags">
                     <ul>
                        <li><a href="#">nature</a></li>
                        <li><a href="#">health</a></li>
                        <li><a href="#">galaxy</a></li>
                        <li><a href="#">creative</a></li>
                        <li><a href="#">art</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ==== blog section start ==== -->
@endsection
