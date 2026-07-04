@extends('layouts.app')

@section('content')
    <div class="w-100 hero-section-wrp">
        <div class="hero-content-wrp inner-page">
            <div class="img-wrp">
                <div class="img-hero"
                    style="background-image: url('{{ Vite::asset('resources/images/banners/hero-img-chauffeur-services.png') }}')">

                    <div class="hero-text-content-wrp container-md">
                        <div class="text-center col-12   ">
                            <div class="hero-title-wrp">
                                <h1>
                                    <span>SpotLimo</span>
                                    Holiday Parties Limo Services
                                </h1>
                            </div>
                        </div>
                    </div>

                    <span class="overlay"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="container-md spot-limo-intro-block">
        <div class="about-us-content-block content-block">
            <div class="row align-items-xl-center">
                <div class="col-lg-6 img-wrp">
                    <div class="img-intro ">
                        <img src="{{ Vite::asset('resources/images/banners/services-13.png') }}" alt=""
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 content-wrp">
                    <div class="text-wrp">
                        <div class="title-wrp">
                            <h4 class="title">
                                Top Rated Holiday Parties Limo Services in Illinois
                            </h4>
                        </div>
                        <div class="text-content">
                            <p>
                                The holiday season is a time for joy, fun, and creating cherished memories with loved ones.
                                At SpotLimo, we provide top-rated Holiday Parties Limo Services in Chicago that will elevate
                                your festive celebrations to new heights. </p>
                            <p>
                                Our top-notch limos and <a href="{{ route('chauffeur-services') }}"><i> professional
                                        chauffeurs </i></a> ensure that you and your loved ones
                                experience nothing but the finest on their much-needed holidays. Our holiday limo services
                                guarantee a stress-free experience, allowing you to focus solely on the joyous moments with
                                your friends and family.
                            </p>
                            <p>
                                So, maximize the fun and excitement of your holiday parties with our exceptional limo
                                services! </p>
                        </div>
                        <div class="bookNow-btn-wrp">
                            <a href="{{ route('home') }}#bookingBlock"
                                class="btn btn-default btn-book-now btn-wide icon-btn">
                                Book Now
                                <i class="bi bi-arrow-right-circle-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid px-0 ideal-travel-partner-block">
        <div class="container-md py-4">
            <div class="about-us-content-block content-block">
                <div class="row  flex-lg-row flex-column-reverse">

                    <div class="col-lg-6 content-wrp">
                        <div class="text-wrp">
                            <div class="title-wrp">
                                <h4 class="title">
                                    See Why We Are The Best Holiday Limo Service Providers in Chicago </h4>
                            </div>

                            <div class="text-content">
                                <div>
                                    <p class="mb-0">
                                        We all know the holiday season is about spending time with family and friends and
                                        having quality time. During this holiday season, hire only professional
                                        transportation providers. And when it comes to professionalism, none can beat the
                                        SpotLimo Holiday Service.
                                    </p>
                                    <p>
                                        Our spacious limousines can accommodate groups of all sizes, ensuring that you can
                                        celebrate together without worrying about designated drivers or navigating through
                                        traffic. And our dedicated team of professional chauffeurs is committed to providing
                                        impeccable service, ensuring your holiday experience is extraordinary. From opening
                                        doors to assisting with any special requests, our chauffeurs are trained to deliver
                                        the highest level of hospitality. </p>
                                    <p>Also, during the holiday season, when road conditions can be challenging, entrust
                                        your travel needs to our experienced chauffeurs. They will navigate through traffic
                                        and ensure a smooth journey, allowing you to focus on celebrating and savoring the
                                        festive spirit.</p>
                                    <p>So, enjoy the company of your loved ones as we take care of the transportation.</p>
                                    <div class="bookNow-btn-wrp">
                                        <a href="{{ route('contact') }}" class="btn btn-default btn-book-now btn-wide icon-btn">
                                            Contact Us Today
                                            <i class="bi bi-arrow-right-circle-fill"></i>
                                        </a>
                                    </div>
                                </div>
                              

                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6 img-wrp">
                        <div class="img-intro swap-img">
                            <img src="{{ Vite::asset('resources/images/banners/corporate-transfers.png') }}" alt=""
                                class="img-fluid">
                        </div>
                    </div>



                </div>

            </div>

        </div>
    </div>
@endsection
