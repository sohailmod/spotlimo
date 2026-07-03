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
                                    Chauffeur Services Major
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
                <div class="col-lg-6 pt-3 img-wrp">
                    <div class="img-intro ">
                        <img src="{{ Vite::asset('resources/images/banners/services-12.png') }}" alt=""
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 content-wrp">
                    <div class="text-wrp">
                        <div class="title-wrp">
                            <h4 class="title">
                                Professional Chauffeurs Services in Chicago
                            </h4>
                        </div>
                        <div class="text-content">
                            <p>
                                SpotLimo provides professional chauffeurs services in Chicago for multiple purposes. We are
                                aimed to cater to discerning clients who seek the utmost comfort, professionalism, and style
                                during their journeys.
                            </p>
                            <p>
                                Our commitment to excellence is evident in every aspect of our service, from the
                                well-maintained fleet of luxury vehicles to our highly trained chauffeurs. We understand the
                                importance of punctuality and strive to exceed your expectations at every turn.
                            </p>
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
                                No More Delays While Travelling Through The Busiest Roads Of Chicago
                            </h4>
                        </div>
                        <div class="text-content">
                            <p>
                                Finding a safe ride and a driver that can wind through the busiest roads and congested
                                traffic of Chicago is not an easy task. But it is also not impossible when you are backed
                                with professional Chauffeur services.
                            <p>
                                Our Chauffeurs are well-trained and know the diverging routes of Chicago at their
                                fingertips. That’s why, no matter how congested the traffic is, they will make sure to let
                                you reach your destination on time.
                            <p>
                                And don’t worry about their driving skills as they are licensed and drive carefully because
                                your safety is our responsibility.
                            </p>
                            {{-- <p>
                                    Book our chauffeur limo services for your friends, family and colleagues now.
                                </p> --}}
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 img-wrp">
                    <div class="img-intro swap-img">
                        <img src="{{ Vite::asset('resources/images/banners/services-4.png') }}" alt=""
                            class="img-fluid">
                    </div>
                </div>
            </div>

        </div>

    </div>




    <div class="to-and-from-services container-fluid">
        <div class="container-lg">
            <div class="container-wrp">
                <div class="row">
                    <div class="col-lg-9 mx-auto text-center">
                        <div class="text-wrp">
                            <div class="title-wrp">
                                <h4 class="title">
                                    Get To Know About Our Chauffeur's Major Services
                                </h4>
                            </div>
                            <div class="text-content">
                                <p>
                                    We provide hourly and point-to-point chauffeur services.
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 block-1 no-img-block block mt-4">
                        <div class="content-wrp p-0">

                            <div class="text-content-wrp m-0">
                                <div class="title-wrp">
                                    <h5 class="title text-center my-2">Hourly Chauffeur Services
                                    </h5>
                                </div>
                                <div class="text-wrp">
                                    <p class="text-justify">
                                        Our hourly chauffeur services are designed to provide flexible and on-demand
                                        transportation for a specified period. Instead of booking a ride from one point to
                                        another, customers can hire our professional chauffeur and vehicle for a set number
                                        of hours, typically with a minimum requirement. </p>
                                    {{-- <p class="text-justify">
                                        We value our customers and don’t want them to wait for us. That’s why; our trained
                                        chauffeurs are available at the desired location on time.
                                    </p>
                                    <p class="text-justify">
                                        So, no more delayed flights, as we have got you covered.
                                    </p> --}}
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 block-2 no-img-block block mt-4">
                        <div class="content-wrp p-0">

                            <div class="text-content-wrp m-0">
                                <div class="title-wrp">
                                    <h5 class="title text-center my-2">Point-to-Point Chauffeur Services
                                    </h5>
                                </div>
                                <div class="text-wrp">
                                    <p class="text-justify">
                                        Our point-to-Point chauffeur services offer a more straightforward transportation
                                        solution. Customers can book a chauffeur-driven vehicle to travel directly from one
                                        specific location to another, such as from an airport to a hotel, from home to a
                                        business meeting, or from one city to another.
                                    </p>
                                    {{-- <p class="text-justify">
                                        As a safe side, booking our Midway Airport Transfer services in advance is always
                                        preferable. But no worries if you forgot to book our car services as we are the best
                                        minute booking choice to and from Midway Airport.
                                    </p> --}}
                                </div>
                            </div>

                        </div>
                    </div>
                    {{-- <div class="col-lg-4 col-md-4 block-3 no-img-block block mt-4">
                        <div class="content-wrp p-0">

                            <div class="text-content-wrp m-0">
                                <div class="title-wrp">
                                    <h5 class="title text-center my-2">Private Airport Transfer Services</h5>
                                </div>
                                <div class="text-wrp">
                                    <p class="text-justify">
                                        We provide limo car service from O’Hare And Midway Airport and other private
                                        airports, including Gary International Airport, Dupage Airport, Chicago Executive
                                        Airport(Pwk), and Milwaukee International Airport.
                                    </p>
                                    <p class="text-justify">
                                        Click to call and avail of our exclusive and discount airport transfer service now.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div> --}}
                </div>
            </div>

        </div>
    </div>





    <div class="container-fluid px-0 services-why-spotlimo"
        style="background-image: url('{{ Vite::asset('resources/images/banners/services-airport-why-2.png') }}')">
        <div class="container-md py-4">
            <div class="about-us-content-block content-block">
                <div class="row ">
                    <div class="title-wrp col-12">
                        <h4 class="title text-center py-3">
                            Why Our Chauffeurs Services in Chicgao?
                        </h4>
                    </div>
                    <div class="col-lg-12 text-center  content-wrp">
                        <div class="text-wrp">
                            <div class="text-content">
                                <p class="text-justify text-center">
                                    Our chauffeur services are unmatched in the industry, offering a seamless and luxurious
                                    transportation experience. With professional and experienced chauffeurs, we prioritize
                                    safety, comfort, and punctuality, ensuring a smooth ride to your destination.
                                </p>
                                <p class="text-justify">
                                    Our personalized service caters to individual preferences and needs, from point-to-point
                                    transfers to flexible hourly bookings. Above all, we are available 24/7. Our commitment
                                    to customer satisfaction has built a loyal clientele who appreciate our unparalleled
                                    level of service and attention to detail.
                                </p>
                                <p>Trust our professional chauffeur services, whether for business or leisure.
                                </p>

                            </div>
                            <div class="bookNow-btn-wrp">
                                <a href="{{ route('home') }}/#bookingBlock"
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
    </div>
@endsection
