@extends('layouts.app')

@section('content')
    <div class="w-100 hero-section-wrp">
        <div class="hero-content-wrp inner-page">
            <div class="img-wrp">
                <div class="img-hero"
                    style="background-image: url('{{ Vite::asset('resources/images/banners/hero-img-aboutus.png') }}')">

                    <div class="hero-text-content-wrp container-md">
                        <div class="text-center col-12   ">
                            <div class="hero-title-wrp">
                                <h1>
                                    <span>SpotLimo</span>
                                    Our Blogs
                                </h1>
                            </div>
                        </div>
                    </div>

                    <span class="overlay"></span>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row">
            @foreach ($blogPosts as $post)
                <div class="col-md-4 col-lg-4 col-sm-12 col-12  ">
                    <div class="card mb-4">
                        <img height="250" src="{{ $post->first_image_url }}" class="card-img-top" alt="Blog Image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{!! Str::limit($post->introduction, 70, '...') !!}</p>

                            <a href="{{ route('show-blog', $post->slug) }}" style="background-color:#00707b;color:#fee57c;"
                                class="btn">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
