@extends('layouts.app')

@section('title', $post->title . ' - Xpovio Digital Agency')

@section('content')
<!-- ==== banner start ==== -->
<section class="cmn-banner bg-img" data-background="{{ asset('assets/images/banner/cmn-banner-bg.png') }}">
   <div class="container">
      <div class="row gaper align-items-center">
         <div class="col-12">
            <div class="text-center text-lg-start">
               <h2 class="title title-anim">{{ $post->title }}</h2>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">
                           <i class="fa-solid fa-house"></i>
                           Home
                        </a>
                     </li>
                     <li class="breadcrumb-item">
                        <a href="{{ route('blog.index') }}">
                           Blog
                        </a>
                     </li>
                     <li class="breadcrumb-item active" aria-current="page">
                        {{ Str::limit($post->title, 20) }}
                     </li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ==== / banner end ==== -->
<!-- ==== blog details start ==== -->
<section class="section blog-main blog-details fade-wrapper">
   <div class="container">
      <div class="row gaper">
         <div class="col-12 col-xl-8">
            <div class="blog-details__content">
               <div class="bd-thumb fade-top">
                  <img src="{{ asset($post->image) }}" alt="Image">
               </div>
               <div class="bd-content">
                  <div class="bd-meta">
                     <div class="meta__left">
                        <p>
                           <strong>Written by :</strong>
                           Admin
                        </p>
                        <span></span>
                        <p>{{ $post->created_at->format('d/m/Y') }}</p>
                     </div>
                  </div>
                  <div class="bd-content-info">
                     <h4 class="h4">
                        {{ $post->title }}
                     </h4>
                     <div class="paragraph">
                        {!! $post->content !!}
                     </div>
                  </div>
               </div>
               <div class="bd-tags">
                  <div class="tags-left">
                     <p>Tags:</p>
                     <div class="tags-content">
                        <a href="#">Nature</a>
                        <a href="#">Health</a>
                     </div>
                  </div>
                  <div class="tags-right">
                     <p>Share:</p>
                     <ul class="social">
                        <li>
                           <a href="#" aria-label="social media">
                              <i class="fa-brands fa-facebook-f"></i>
                           </a>
                        </li>
                        <li>
                           <a href="#" aria-label="social media">
                              <i class="fa-brands fa-twitter"></i>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="blog-details__pagination">
               <div class="row gaper">
                  <div class="col-md-6">
                     <div class="single">
                        <a href="{{ route('blog.index') }}">
                           <i class="fa-solid fa-arrow-left-long"></i>
                           Back to Blog
                        </a>
                     </div>
                  </div>
               </div>
               <div class="section pb-0 comment-form fade-top">
                  <div class="section__header">
                     <h2 class="h2 text-start">Leave a comment</h2>
                  </div>
                  <form action="#" method="post">
                     <div class="form-group-wrapper">
                        <div class="form-group-single">
                           <input type="text" name="comment-name" id="commentName" placeholder="Name">
                        </div>
                        <div class="form-group-single">
                           <input type="email" name="comment-email" id="commentemail"
                              placeholder="Email">
                        </div>
                     </div>
                     <div class="form-group-single">
                        <textarea name="comment-message" id="commentMessage"
                           placeholder="Write Comment..."></textarea>
                     </div>
                     <div class="cta__group">
                        <button type="submit" class="btn btn--ocotonary">
                           post comment
                           <i class="fa-solid fa-arrow-right-long"></i>
                        </button>
                     </div>
                  </form>
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
                     <div class="latest-single ">
                        <div class="latest-thumb">
                           <a href="#">
                              <img src="{{ asset('assets/images/news/ten.png') }}" alt="Image">
                           </a>
                        </div>
                        <div class="latest-content">
                           <p>10/01/2023</p>
                           <p>
                              <a href="#">
                                 Guide dog shortage: The blind peo ple who train
                                 their own guide
                              </a>
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ==== / blog details end ==== -->
@endsection
