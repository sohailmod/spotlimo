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
                                    Chicago Executive Airport
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
                        <img src="{{ Vite::asset('resources/images/banners/services-1.png') }}" alt=""
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 content-wrp mt-3">
                    <div class="text-wrp">
                        <div class="title-wrp">
                            <h4 class="title">
                                Get the Best Chicago Executive Airport Limousine Services
                            </h4>
                        </div>
                        <div class="text-content">
                            <p>
                                Let us confess that Chicago Executive Airport can really give you a tough time, no matter if
                                you are traveling to or from the airport. It’s because of the airport’s infrastructure and
                                location that may get you in a massive trouble if you are new to Chicago city.
                            </p>
                            <p>
                                But the good news is that we have your every need fully accounted for at SpotLimo car
                                services in Chicago! We are one of the most trusted Chicago Limousine companies who strive
                                to deliver the utmost customer satisfaction, and in doing so, we leave no stone unturned in
                                ensuring your complete satisfaction.
                            </p>
                            <p>
                                Our professional chauffeurs are well-trained to beautifully manage the complexities the
                                Chicago Executive Airport location and infrastructure. And our deluxe limos perfectly meet
                                your ground transportation needs for Chicago Executive Airport, ensuring your arrival or
                                departure from the airport in full style and class.
                            </p>
                            <p>Ready to get the top travel limousine experience? Hire us now!
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
                                Experience Reliability & Punctuality With Our Professional Limo Service In Chicago
                            </h4>
                        </div>
                        <div class="text-content">
                            <p>
                                Once you book us for Chicago limousine service, take a deep breath because reaching you
                                safely and sound to your destination on your time is OUR responsibility.
                            </p>
                            <p>
                                If you are native to Chicago, you must have experienced or heard about the congested traffic
                                roads and accessibility concerns of travelers. Our professional local chauffeurs are fully
                                aware of the roads and routes of Illions that make sure to reach your destination on time
                                and in the style that everyone wants.
                            </p>
                            <p>If you want seamless travel either to or from the airport, we are just one call or text away!
                            </p>
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
    <div class="container-fluid px-0 services-why-spotlimo book-limo my-4"
        style="background-image: url('{{ Vite::asset('resources/images/banners/book-limo-services-1.png') }}')">
        <div class="container-md py-4">
            <div class="about-us-content-block content-block">
                <div class="row align-items-xl-center p-4">
                    <div class="col-lg-6 content-wrp px-0">
                        <div class="title-wrp col-12 px-0">
                            <h4 class="title">
                                Why is SpotLimo Limousine Service To and From Chicago Executive Airport?
                            </h4>
                        </div>
                        <div class="text-wrp">
                            <div class="text-content ">
                                <p class="text-justify">
                                    Our limo services to and from Chicago executive airport exceptionally stand out from
                                    other rental services available due to multiple reasons, including;
                                </p>
                                <ul>
                                    <li class="text-light">Commitment to providing quality services </li>
                                    <li class="text-light">Professional and friendly staff that will not let you alone amid
                                        the congested roads of Chicago.</li>
                                    <li class="text-light">Well-designed interior of our fleets.
                                    </li>
                                    <li class="text-light">Multiple options of fleets, suitable for providing a wide sitting
                                        area for a large group of people.
                                    </li>
                                    <li class="text-light">On-time service; your flight can delay but our services will not
                                        let you reach the delay.
                                    </li>
                                    <li class="text-light">Comfort and style that you do not want to miss
                                    </li>
                                    <li class="text-light">Affordability that you cannot resist 
                                    </li>

                                </ul>

                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <div class="container-md spot-limo-intro-block">
        <div class="about-us-content-block content-block">
            <div class="row ">
                <div class="col-lg-6 img-wrp">
                    <div class="img-intro ">
                        <img src="{{ Vite::asset('resources/images/banners/corporate-transfers.png') }}" alt=""
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 content-wrp">
                    <div class="text-wrp">
                        <div class="title-wrp">
                            <h4 class="title">
                                Be It A Personal Car Rent Or For Guests 
                            </h4>
                        </div>
                        <div class="text-content">
                            <p>
                                At Spotlimo, we have a variety of fleets, including Luxurious SUVs, Sedans, and Stretch limos that are spacious enough to have an ample sitting area for your number of guests. They mainly serve to pick up and drop off our valuable clients to and from Chicago Executive Airport. 

                            </p>
                            <p>
                                Because we understand the significance of time for executive travelers, that's why; we ensure our prompt and on-time availability. Also, our professional chauffeurs pay full attention to your needs and key requirements. They work around the clock to make your journey secure and comfortable. 

                            </p>
                            <p>
                                Also, don't worry about odd-time flights because we can pick up or drop you off at Chicago Executive Airport at night with complete security. So, count on us; book a ride now! 

                            </p>
                            {{-- <p>
                                Count on us and book a ride now. Trust us; you won't regret choosing our limo service to and
                                from Chicago Executive Airport.
                            </p> --}}

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
@endsection
