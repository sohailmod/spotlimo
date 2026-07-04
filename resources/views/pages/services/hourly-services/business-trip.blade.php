@extends('layouts.app')

@section('content')
    <div class="w-100 hero-section-wrp">
        <div class="hero-content-wrp inner-page">
            <div class="img-wrp">
                <div class="img-hero"
                    style="background-image: url('{{ Vite::asset('resources/images/banners/hero-img-exe-tra.png') }}')">

                    <div class="hero-text-content-wrp container-md">
                        <div class="text-center col-12   ">
                            <div class="hero-title-wrp">
                                <h1>
                                    <span>Spot Limo</span>
                                    Chicago Business Trips
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
                        <img src="{{ Vite::asset('resources/images/banners/services-4.png') }}" alt=""
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 content-wrp">
                    <div class="text-wrp">
                        <div class="title-wrp">
                            <h4 class="title">
                                Making Your Business Trips Safe & Relaxing </h4>
                        </div>
                        <div class="text-content">
                            <p>
                                Spot Limo provides hourly limo service in Chicago and its suburbs for all your exclusive
                                business trips. Our professional Chicago limousine service is tailored specifically for
                                professionals like you, providing you with unparalleled comfort, reliability, and peace of
                                mind during your business trips. </p>
                            <p>Whether you want our Chicago hourly limo service from the airport to your office or any other
                                meeting spot, we ensure top-class luxury and timely arrivals. </p>

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

    <div class="container-md personalised-limo-block">
        <div class="about-us-content-block content-block">
            <div class="row align-items-xl-center flex-lg-row flex-column-reverse">
                <div class="col-lg-6 content-wrp">
                    <div class="text-wrp">
                        <div class="title-wrp">
                            <h4 class="title">
                                SpotLimo - The Trusted Choice Of Business Travelers & Corporate Executives </h4>
                        </div>
                        <div class="text-content">
                            <p>
                                When you choose SpotLimo, you leave behind the hassles of navigating through traffic,
                                finding parking, and dealing with transportation logistics. Our well-trained chauffeurs will
                                handle all the details, ensuring you arrive at your destination promptly and in style.
                            </p>
                            <p>
                                They make sure that you experience the utmost comfort and convenience as you relax in our
                                luxurious fleet of limousines, equipped with plush seating, advanced entertainment systems,
                                and ample space to work or unwind.
                            </p>
                            {{-- <p>
                                Contact us at <a
                                    href="tel:+1{{ str_replace('-','',theme_options()->where('key', 'hotline')->first()->value) }}"
                                    class=""><i>{{ theme_options()->where('key', 'hotline')->first()->value }}</i>
                                </a> to discover more about our hourly limo service charges for your business trips.
                            </p> --}}
                            <p>So, focus on your business objectives or take a moment to recharge while we take care of the
                                rest.</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 img-wrp">
                    <div class="img-intro swap-img">
                        <img src="{{ Vite::asset('resources/images/banners/about-us-personalised.png') }}" alt=""
                            class="img-fluid">
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="container-md spot-limo-intro-block">
        <div class="about-us-content-block content-block">
            <div class="row align-items-xl-center">
                <div class="col-lg-6 img-wrp">
                    <div class="img-intro ">
                        <img src="{{ Vite::asset('resources/images/banners/services-16.png') }}" alt=""
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 content-wrp">
                    <div class="text-wrp">
                        <div class="title-wrp">
                            <h4 class="title">
                                Make Sure Not to Miss A Single Chance of Impressing Your Clients With Our Deluxe Limousine
                                Services </h4>
                        </div>
                        <div class="text-content">
                            <p>
                                If you have any interstate meetings and want to reach there timely, we can help you. You can
                                book our hourly limo service if you have to attend your meeting in Illinois and its suburbs.
                            </p>
                            <p>
                                Our hourly limo service is perfect if you want the driver to stay with you all day. We allow
                                you to choose how long you want our limo service. Also, you can make a reservation anytime
                                and come home right after your business meeting or conference ends.
                            </p>
                            <p>
                                And don’t worry about last-minute changes in meeting venues because we are committed to
                                providing top-quality service with the flexibility to adjust your last-minute changing in
                                the best possible way.
                            </p>

                        </div>

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
                        <h4 class="title text-center py-3">
                            Professional & Friendly Chaffeurs At Your Service </h4>
                    </div>
                    {{-- <div class="col-lg-6 content-wrp"> --}}
                    <div class="text-center col-12   ">
                        <p class="text-light"><i>At SpotLimo, we understand the importance of punctuality for
                                professionals like you. Our chauffeurs are trained to carefully plan and navigate the
                                best routes, ensuring that you always reach your meetings, conferences, or events on
                                time. </i></p>
                        <p class="text-light"><i>Contact us at <a
                                    href="tel:+1{{ str_replace('-','',theme_options()->where('key', 'hotline')->first()->value) }}"
                                    class="text-light"><i>{{ theme_options()->where('key', 'hotline')->first()->value }}</i>
                                </a> to discover more about our hourly limo service
                                charges for your business trips.</i></p>
                        <p class="text-light"><i>Trust us for a safe and successful business trip! </i></p>
                        <div class="bookNow-btn-wrp">
                            <a href="{{ route('contact') }}" class="btn btn-default btn-book-now btn-wide icon-btn">
                                Contact Us Today
                                <i class="bi bi-arrow-right-circle-fill"></i>
                            </a>
                        </div>
                    </div>
                    {{-- <div class="text-wrp">
                            <div class="text-content">
                                <p class="text-justify">
                                    Our hourly limo service is the perfect solution if you want the driver to stay with you
                                    all day. We allow you to choose how long you want our limo service.
                                </p>
                                <p class="text-justify">
                                    Our professional drivers and licensed chauffeurs are always ready to take you to your
                                    desired destination without delay. We provide our valuable clients with premium-quality
                                    standards and ensure they promptly reach their desired location.
                                </p>

                            </div>
                        </div> --}}
                    {{-- </div> --}}
                    {{-- <div class="col-lg-6 content-wrp">
                        <div class="text-wrp">
                            <div class="text-content ">
                                <p class="text-justify">
                                    Our hourly rate limo service is perfect for all your customers’ essential requirements.
                                    Our driver will pick you up timely and drop you off before the meeting or any other
                                    crucial corporate conference.
                                </p>
                                <p class="text-justify">
                                    So, let us know where you want to go for your next business trip, special event, and
                                    conference. Also, visit our website to get to know about our hourly rates for your next
                                    business trip.
                                </p>
                                <p class="text-justify">
                                    Trust us; Your safety is our responsibility.
                                </p>

                            </div>

                        </div>
                    </div> --}}

                </div>

            </div>

        </div>
    </div>
@endsection
