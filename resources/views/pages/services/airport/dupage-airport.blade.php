@extends('layouts.app')

@section('content')
    <div class="w-100 hero-section-wrp">
        <div class="hero-content-wrp inner-page">
            <div class="img-wrp">
                <div class="img-hero"
                    style="background-image: url('{{ Vite::asset('resources/images/banners/hero-img-airtport-services.png') }}')">

                    <div class="hero-text-content-wrp container-md">
                        <div class="text-center col-12   ">
                            <div class="hero-title-wrp">
                                <h1>
                                    <span>Spot Limo - Airport Services</span>
                                    Dupage Airport in Chicago
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
                    <div class="img-intro mb-5 ">
                        <img src="{{ Vite::asset('resources/images/banners/services-19.png') }}" alt=""
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 content-wrp mt-3">
                    <div class="text-wrp">
                        <div class="title-wrp">
                            <h4 class="title">
                                The Best Limo Service Provider At Dupage Airport In Chicago </h4>
                        </div>
                        <div class="text-content">
                            <p>
                                At SpotLimo, we envision redefining the standards of deluxe airport transport, and Dupage
                                Airport transportation service is our playground of excellence.
                            </p>
                            <p>
                                Our fleets are not merely a mode of transportation; it is an experience. With interiors
                                adorned with lavish details, plush seating that cradles you in comfort, and cutting-edge
                                technology at your fingertips, every moment spent in our limousines is a testament to
                                unparalleled luxury.
                            </p>
                            <p>Let’s not forget our technologically advanced online booking and reservation system ensures
                                we are the best choice for DuPage Airport limo service providers according to your business
                                travel needs. You can finalize your booking online, and we can customize your reservation
                                plans according to your preferences.
                            </p>

                            <p>Our exclusive features make us a trusted corporate travel partner in Illinois. Don't settle
                                for ordinary airport transportation when you can elevate your travel experience with our
                                deluxe SpotLimo limousine service in Chicago!
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
                                Experience The Professionalism At Dupage Airport, Chicago
                            </h4>
                        </div>
                        <div class="text-content">
                            <p>
                                Professional Chauffeurs are the backbone of seamless airport travel, especially in Chicago.
                                And when it comes to professionalism, you cannot put your attention away from SpotLimo
                                professional chauffeurs. </p>
                            <p>
                                Our experienced and well-trained chauffeurs are certified and well-versed in Chicago's
                                twisting roads and winding streets. They possess an intricate understanding of the local
                                roads, traffic patterns, and alternate routes, allowing them to easily navigate even the
                                most congested areas. </p>
                            <p>Beyond their navigational skills, our professional chauffeurs prioritize your safety above
                                all else. They undergo rigorous training to maintain their defensive driving skills and
                                adhere to the highest safety standards.</p>
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

    <div class="container-md spot-limo-intro-block">
        <div class="about-us-content-block content-block">
            <div class="row align-items-xl-center">
                <div class="col-lg-6 img-wrp">
                    <div class="img-intro ">
                        <img src="{{ Vite::asset('resources/images/banners/about-us-intro.png') }}" alt=""
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 content-wrp mt-0">
                    <div class="text-wrp">
                        <div class="title-wrp">
                            <h4 class="title">
                                Your Trusted Travel Partners For Dupage Airport </h4>
                        </div>
                        <div class="text-content">
                            <p>
                                Heading to or from Dupage airport? Spotlimo could be the only choice for hassle-free and
                                productive airport transportation. </p>
                            <p>We go ahead of the curve in ensuring you have the best amenities and a fully facilitated
                                environment for your last-minute prep for a business meeting or conference.
                            </p>
                            <p>
                                Our reliable and efficient limo services to and from the airport make us stand out. And we
                                work around the clock to make your journey secure and comfortable. Don't worry about
                                odd-time flights; we can pick up or drop you off at Dupage Airport at any time.
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
                            Your Only Reliable Limo Service in Chicago For Chicago DuPage Airport
                        </h4>
                    </div>
                    <div class="col-lg-6 content-wrp">
                        <div class="text-wrp">
                            <div class="text-content">
                                <p class="text-justify">
                                    Our luxurious fleet of stretch limos, sedans, and SUVs is mainly designed to pick up and
                                    drop off our valuable clients to and from Chicago DuPage Airport. Our professional and
                                    well-mannered chauffeurs can drive the best, even in the worst scenario.
                                </p>
                                <p class="text-justify">
                                    If you want to go to a meeting from the airport, then you can choose our stretch limo
                                    service without any second thought. We can also provide customized and personalized
                                    features upon our customers' request.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 content-wrp">
                        <div class="text-wrp">
                            <div class="text-content ">
                                <p class="text-justify">
                                    You can enjoy all the exceptional and stunning features without worrying about excess
                                    cash. We aim to provide you with the best limo services within your affordability.
                                </p>
                                <p class="text-justify">
                                    <b>So, share your travel plans and get our quoted offer now. </b>
                                    <br>
                                    Count on us and book a ride now.
                                </p>

                            </div>
                            {{-- <div class="bookNow-btn-wrp">
                                   <a href="{{  route('home') }}/#bookingBlock" class="btn btn-default btn-book-now btn-wide icon-btn">
                                       Book Now
                                       <i class="bi bi-arrow-right-circle-fill"></i>
                                   </a>
                               </div> --}}
                        </div>
                    </div>

                </div>
                <div class="col-12 my-2">
                    <div class="bookNow-btn-wrp text-center">
                        {{-- <div class="title-wrp">
                            <h3 class="mb-0">
                                Book Your 
                            </h3>
                        </div> --}}
                        <a href="{{ route('home') }}/#bookingBlock" class="btn btn-default btn-book-now btn-wide icon-btn">
                            Book Now
                            <i class="bi bi-arrow-right-circle-fill"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
