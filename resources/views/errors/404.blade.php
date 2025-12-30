@extends('layouts.app')

@section('title', '404 - Page Not Found')

@section('content')
<!--Hero-->
<div class="margin-top-xl"></div>
<section class="hero hero--overlay-layer hero-default">
    <div class="container">
        <div class="hero__content text-center">
            <h1>404</h1>
            <p>Oops! The page you are looking for does not exist.</p>
            <a class="btn btn--primary" href="{{ route('home') }}">Back to Home</a>
        </div>
    </div>
</section>
@endsection
