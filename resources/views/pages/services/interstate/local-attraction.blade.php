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
                                    <span>Spot Limo</span>
                                    Tour Attractions
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
            <div class="row ">
                <div class="col-lg-6 img-wrp mt-5">
                    <div class="img-intro ">
                        <img src="{{ Vite::asset('resources/images/banners/about-us-intro.png') }}" alt=""
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 content-wrp">
                    <div class="text-wrp">
                        <div class="title-wrp">
                            <h4 class="title">
                                Chicago’s Private Tours Transportation Service For The Ones Who Love Exploring </h4>
                        </div>
                        <div class="text-content">
                            <p>
                                It is no secret that Chicago is the ultimate choice for tourists. Our luxurious limousine
                                service is designed to provide you with the utmost comfort and style while you explore the
                                city's iconic landmarks and hidden gems. </p>
                            <p>
                                At Spotlimo, we want you to feel the excitement while gliding through the busiest yet
                                colorful Chicago streets with its awe-inspiring skyline as your backdrop. </p>
                            <p>
                                So, are you ready to embark on an unforgettable journey through the magnificent city of
                                Chicago with our professional limo service for tourists? </p>

                            <p>Book your limousine service now, and let the adventure begin!</p>

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


    <div class="container-md spot-limo-intro-block ">
        <div class="about-us-content-block content-block">
            <div class="row ">

                <div class="col-lg-6 content-wrp">
                    <div class="text-wrp">
                        <div class="title-wrp">
                            <h4 class="title">
                                Explore Chicago's Finest Attractions With Affordability </h4>
                        </div>
                        <div class="text-content">
                            <p>
                                Spotlimo is dedicated to providing you with top-notch limousine service at prices that won't
                                strain your wallet. </p>
                            <p>
                                Our affordable limousine service caters to the needs of budget-conscious tourists, ensuring
                                that you get the most out of your Chicago adventure. </p>
                            <p>
                                That’s because we understand the importance of making every moment count during your trip.
                                And our team is committed to delivering an experience that is not only luxurious but also
                                affordable. </p>

                        </div>

                    </div>
                </div>

                <div class="col-lg-6 img-wrp mt-2">
                    <div class="img-intro swap-img">
                        <img src="{{ Vite::asset('resources/images/banners/about-us-ideal.png') }}" alt=""
                            class="img-fluid">
                    </div>
                </div>
            </div>

        </div>
    </div>






    <div class="container-fluid px-0 services-why-spotlimo"
        style="background-image: url('{{ Vite::asset('resources/images/banners/services-airport-why.png') }}')">
        <div class="container-md py-4">
            <div class="about-us-content-block content-block">
                <div class="row ">
                    <div class="title-wrp col-12">
                        <h4 class="title text-center py-4">
                            Discover the Beauty of Chicago with Spotlimo's Luxury Rides & Professional Chauffeurs
                    </div>

                    <div class="text-center col-12   ">
                        <p class="text-light"><i>With Spotlimo, you can bid farewell to the hassles of public transportation
                                and the stress of driving through unfamiliar roads. We understand that your trip to Chicago
                                is a special occasion, and our dedicated team is committed to ensuring that you make the
                                most of every moment. </i></p>

                        <p class="text-light"><i>From the moment you step into our elegant limousines, you'll be treated
                                like royalty. Our knowledgeable chauffeurs will guide you through the city's history and
                                culture, making your journey both luxurious and interesting.
                            </i>
                        </p>
                        <p class="text-light"><i>Contact us, and our team will be happy to assist you in finding and
                                visiting the best tourist attractions places in Illinois.
                            </i></p>
                

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
    </div>
@endsection
