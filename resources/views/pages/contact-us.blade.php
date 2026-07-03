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

                                <div class="title-wrp">
                                    <h1 class="title"></h1>
                                </div>
                                <div class="intro pt-3">

                                </div>

                                <h1>
                                    <span>Spot Limo</span>
                                    Contact Us
                                </h1>
                                <br />
                            </div>
                            <div class="mx-auto col-lg-9">
                                <p class="mb-0 pb-3" style="color:white; ;font-size: 18px; font-style:italic;">Our
                                    professional
                                    drivers and chauffeurs offer prompt pick-and-drop services.Besides, our response time
                                    and impressive reputation make us the best and most reliable limo rental and car service
                                    provider in Illinois.
                                    <br>
                                    <b class="mt-2">So, contact us now if you want to spend less and hire the best.</b>
                                </p>
                            </div>
                        </div>
                    </div>

                    <span class="overlay"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="container-md ">
        <div class="contactus-content-wrp">
            <div class="contact-us-form-wrp px-sm-5 px-3 py-4 mb-5">
                @include('components.contact-us-form')
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src='https://www.google.com/recaptcha/api.js'></script>
@stop
