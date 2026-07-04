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
                                    Family Get Together
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
                        <img src="{{ Vite::asset('resources/images/banners/services-18.png') }}" alt=""
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 content-wrp">
                    <div class="text-wrp">
                        <div class="title-wrp">
                            <h4 class="title">
                                Customers-Trusted Hourly Transportation Service in Chicago for Families Get Together and
                                Trips </h4>
                        </div>
                        <div class="text-content">
                            <p>
                                We understand the significance of family get-togethers and the importance of making them
                                memorable. That’s why we provide safe and professional hourly limo service in Chicago to
                                make your travel for family gatherings exciting.
                            </p>
                            <p>

                                Whether you're planning a reunion, a birthday celebration, or any other special occasion,
                                our top-notch <a href="{{ route('vehicle-rates') }}"><i>limousine service</i></a> limousine
                                service is here to cater to your needs. We have a variety of fleets
                                of different sizes. They are spacious enough to accommodate groups of all sizes, allowing
                                everyone to travel together without the hassle of coordinating multiple cars or worrying
                                about parking.
                            </p>
                            <p>
                                Plus, you can book our limo service online from a complete selection of vehicles, including
                                sedans, SUVs, Party buses, Shuttle buses, Stretch limousines, and Mini Coaches. So, sit
                                back, relax, and enjoy the journey as we take care of the transportation logistics.
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
                                What Makes Our Chicago Limo Service Stand Out? </h4>
                        </div>
                        <div class="text-content">
                            <p>
                                We take pride in our attention to detail and strive to exceed your expectations. Our
                                vehicles are equipped with modern amenities, including plush seating, state-of-the-art
                                entertainment systems, and climate control, ensuring a delightful ride for every family
                                member.
                            </p>
                            <p>
                                With our extensive knowledge of the Chicago area, our chauffeurs can recommend popular
                                family-friendly destinations and help you plan an itinerary that suits your interests.
                            </p>
                            <p>
                                Whether you're exploring the iconic landmarks of the city, visiting museums, or enjoying
                                outdoor activities, our limousine service provides a convenient and stylish way to travel
                                from one location to another.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 img-wrp">
                    <div class="img-intro swap-img">
                        <img src="{{ Vite::asset('resources/images/banners/services-11.png') }}" alt=""
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
                    <div class="img-intro">
                        <img src="{{ Vite::asset('resources/images/banners/services-16.png') }}" alt=""
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 content-wrp">
                    <div class="text-wrp">
                        <div class="title-wrp">
                            <h4 class="title">
                                Book Our Fleets for Your Next Family Vacation Trip </h4>
                        </div>
                        <div class="text-content">
                            <p>
                                Booking a bus with Spot Limo is simple and convenient. Either visit our website and explore
                                our hourly rental vehicle plans or call our committed team today.
                            </p>
                            <p>
                                We will discuss the family get-together bus rental process. Also, our team will ask you some
                                questions about your trip. Based on the number of passengers, your trip's destination, and
                                how long your journey will be, we will offer you the most suitable quoted offer and
                                recommend the perfect coach for your trip.
                            </p>
                            <p>
                                So, choose us as your travel partner for your next family trip or get to gather.                             </p>
                        </div>

                    </div>
                    
                </div>

            </div>

        </div>
    </div>

    <div class="container-fluid px-0 services-why-spotlimo"
        style="background-image: url('{{ Vite::asset('resources/images/banners/services-airport-why.png') }}')">
        <div class="container-md py-5">
            <div class="about-us-content-block content-block">
                <div class="row ">
                    <div class="title-wrp col-12">
                        <h4 class="title text-center py-4">
                            Only Choose The Trusted and Professional Limo Service For Your Loved Ones </h4>
                    </div>

                    <div class="text-center col-12   ">
                        <p class="text-light"><i>At SpotLimo, we understand that family get-togethers are special occasions
                                that deserve exceptional service. That's why we go above and beyond to create a memorable
                                experience for you and your family. </i></p>
                        <p class="text-light"><i>Our commitment to customer satisfaction and our dedication to
                                professionalism sets us apart as the go-to limousine service for family gatherings in
                                Chicago. </i></p>
                        <p class="text-light"><i>Contact us <a
                                    href="tel:+1{{ str_replace('-','',theme_options()->where('key', 'hotline')->first()->value) }}"
                                    class="text-light"><i>{{ theme_options()->where('key', 'hotline')->first()->value }}</i>
                                </a> today to book our limousine service for your upcoming family get-together . </i></p>

                                <div class="bookNow-btn-wrp">
                                    <a href="{{ route('contact') }}" class="btn btn-default btn-book-now btn-wide icon-btn">
                                        Contact Us Today
                                        <i class="bi bi-arrow-right-circle-fill"></i>
                                    </a>
                                </div>
                    </div>
                    {{-- <div class="col-lg-8 mx-auto content-wrp">
                        <div class="text-wrp">
                            <div class="text-content">
                                <p class="text-center">
                                    Whether you are traveling in Illinois or heading out of the state, we offer multiple
                                    transportation options to make your family trip memorable and safe.
                                </p>
                                <p class="text-center">
                                    So, whenever your vacations, family get-together, or reunion takes place, you can count
                                    on us; we can help you pull it off with prompt pick-up and drop-off hourly rental
                                    services.
                                </p>

                            </div>
                        </div>
                    </div> --}}


                </div>

            </div>

        </div>
    </div>

   
@endsection
