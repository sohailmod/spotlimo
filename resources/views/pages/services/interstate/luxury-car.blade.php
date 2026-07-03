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
                                    Luxury Car Rental Service
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
                        <img src="{{ Vite::asset('resources/images/banners/about-us-intro.png') }}" alt=""
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 content-wrp">
                    <div class="text-wrp">
                        <div class="title-wrp">
                            <h4 class="title">
                                Experience the Pinnacle of Luxury With Our Luxury Car Rental Service </h4>
                        </div>
                        <div class="text-content">
                            <p>
                                When you choose SpotLimo, you select one of Chicago's most trusted transportation companies.
                                At SpotLimo, we aim to provide top-class, efficient, safe, and reasonable limo and car
                                service for hourly and point-point service. </p>
                            <p>
                                You can share details of your trip with us, and we will manage the most suitable vehicle
                                type for your trip. Besides, our chauffeurs are knowledgeable people who can assist you in
                                the best possible way. </p>
                            <p>
                                Trust us as your Chicago travel partner, you won’t regret it! </p>

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

    <div class="container-fluid px-0 services-why-spotlimo my-5"
        style="background-image: url('{{ Vite::asset('resources/images/banners/services-airport-why.png') }}')">
        <div class="container-md py-4">
            <div class="about-us-content-block content-block">
                <div class="row ">
                    <div class="title-wrp col-12">
                        <h4 class="title text-center py-4">
                            Get the Affordable Luxury Cars In the Busiest City Of America
                    </div>

                    <div class="text-center col-12   ">
                        <p class="text-light"><i>Booking your dream rental cars in Chicago has always been challenging,
                                especially at affordable rates. But SpotLimo has come to the rescue. SpotLimo provides a
                                user-friendly platform and a dedicated support team for easy and smooth booking. </i></p>
                        <p class="text-light"><i>In addition, we provide online access to our top-tier luxury cars for
                                effortless selection, putting the world of luxury limousines right at your fingertips. </i>
                        </p>
                        <p class="text-light"><i>Moreover, our luxury limousines come with experienced, highly skilled,
                                professional chauffeurs who are dedicated to providing unparalleled service. </i></p>
                        <p class="text-light"><i>So, at Spotlimo, you will get a complete package for your Chicago trip.
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


    <div class="container-fluid px-0 ideal-travel-partner-block">
        <div class="container-md py-4">
            <div class="about-us-content-block content-block">
                <div class="row  flex-lg-row flex-column-reverse">
                    <div class="col-lg-6 content-wrp">
                        <div class="text-wrp">
                            <div class="title-wrp">
                                <h4 class="title">
                                    Top-tier Selection of Luxury Cars At Your Fingertips </h4>
                            </div>

                            <div class="text-content">
                                <div>
                                    <p class="mb-0">
                                        The ultimate goal of SpotLimo is to make your road trips as luxurious as you could
                                        ever imagine. </p>
                                    <p>
                                        Our exclusive car rental services in Chicago combine luxury and affordability. So,
                                        everyone can roam in Chicago's beautiful and winding streets with comfort and peace
                                        of mind. From iconic architecture to top-class museums, eatery shops, and shopping
                                        centers, our expert chauffeurs can take you everywhere in Illinois with complete
                                        comfort and class. </p>
                                    <p>
                                        Please note that we provide luxury car rental Illinois services for business
                                        meetings, weddings, proms, airport transportation, and more. </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 img-wrp">
                        <div class="img-intro swap-img">
                            <img src="{{ Vite::asset('resources/images/banners/about-us-ideal.png') }}" alt=""
                                class="img-fluid">
                        </div>
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
                        <img src="{{ Vite::asset('resources/images/banners/corporate-transfers.png') }}" alt=""
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 content-wrp">
                    <div class="text-wrp">
                        <div class="title-wrp">
                            <h4 class="title">
                                See Why SpotLimo Is The Most Trusted Travel Partners In Chicago </h4>
                        </div>

                        <div class="text-content">
                            <div>
                                <p class="mb-0">
                                    When it comes to reliable and luxurious transportation in the bustling city of Chicago,
                                    one name stands out above the rest - SpotLimo. As the premier travel partner, SpotLimo
                                    has earned the trust of countless clients through its commitment to excellence,
                                    flexibility, and unparalleled service. </p>
                                <p>
                                    Our key reasons for becoming the top-rated car rental service provider in Chicago
                                    include; </p>

                            </div>
                            <div class="list">
                                <ul>
                                    <li class="list-items"
                                        style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                        Time-saving services </li>
                                    <li class="list-items"
                                        style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                        Hourly Service </li>
                                    <li class="list-items"
                                        style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                        Door-to-door service </li>
                                    <li class="list-items"
                                        style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                        Pick-up from your desired location </li>
                                    <li class="list-items"
                                        style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                        Affordable prices </li>
                                    <li class="list-items"
                                        style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                        24/7 availability </li>
                                    <li class="list-items"
                                        style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                        Impeccable Safety Standards</li>
                                    <li class="list-items"
                                        style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                        Top-notched customer service  </li>
                                    <li class="list-items"
                                        style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                        Customized services available   </li>
                                    <li class="list-items"
                                        style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                        Pre-booking option is available  </li>
                                </ul>
                            </div>
                            <p>
                                You can <a href="{{ route('home') }}#bookingBlock"><i>schedule</i></a> our limousine and
                                car service in advance to avoid the last-minute hassle.
                            </p>
                            <p>
                                Let’s be your travel partner in this busiest city!                             </p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
