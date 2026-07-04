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
                                    <span>SpotLimo</span>
                                    Concerts And Party Services
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
                <div class="col-lg-6 mb-5  img-wrp">
                    <div class="img-intro ">
                        <img src="{{ Vite::asset('resources/images/banners/services-18.png') }}" alt=""
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 content-wrp">
                    <div class="text-wrp">
                        <div class="title-wrp">
                            <h4 class="title">
                                We Have Brought An Elite Combo Of Safety & Fun
                            </h4>
                        </div>
                        <div class="text-content">
                            <p>
                                We understand that life is about making memories, and every celebration deserves to be
                                extraordinary. Our professional limousine services will create a memorable experience that
                                lights up your concert night and multiply the fun of your celebrations.
                            </p>
                            <p>

                                Our concert and party services cater to all party enthusiasts, providing the ultimate
                                entertainment solutions for concerts and other party events. Whether it's a high-energy
                                concert, a birthday bash, or a bachelor/bachelorette party, our chauffeurs make sure you
                                reach timely or spend the most thrilled and fun-packed night while celebrating on four
                                wheels.
                            </p>

                            <P>Cruising through the city in a luxurious limo, experiencing a party on wheels like no other
                                is definitely a divine way to make parties memorable. And for that, we never hesitate to go
                                above and beyond to make your celebrations truly unforgettable.
                            </P>
                            <P>So, trust us for the next party or concert night, as we can take you and your friends to the
                                concert with full safety measures and promptness.
                            </P>
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
                                We Have Brought An Elite Combo Of Safety & Fun
                            </h4>
                        </div>
                        <div class="text-content">
                            <p>
                                Our hourly limo services meet all your safety, fun, and punctuality requirements. Because
                                your safety is our top priority. However, while ensuring your safety., we do not want you to
                                compromise on your fun.
                            </p>
                            <p>
                                Our luxury vehicles are driven by expert chauffeurs selected on the most rigorous criteria.
                                Indeed, they will surprise you and your friends with professionalism and punctuality. Their
                                ultimate objective is to take you to concerts timely and make your travel experience
                                unforgettable. You can choose your favorite fleet from our <a href="{{ route('home') }}">
                                    online booking portal</a>.
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


    <div class="container-fluid px-0 services-why-spotlimo"
        style="background-image: url('{{ Vite::asset('resources/images/banners/services-airport-why.png') }}')">
        <div class="container-md py-5">
            <div class="about-us-content-block content-block">
                <div class="row ">
                    <div class="title-wrp col-12">
                        <h4 class="title text-center py-4">
                            Experience the Hospitality Of Well-trained Chauffeurs
                        </h4>
                    </div>

                    <div class="text-center col-12   ">
                        <p class="text-light"><i>No matter how long you let your party roll, you always got the back of our
                                professional and well-trained chauffeurs. They will make sure you enjoy every moment and
                                take you to your home safely.
                            </i></p>
                        <p class="text-light"><i>Our commitment to customer satisfaction and our dedication to
                                professionalism sets us apart as the go-to limousine service for family gatherings in
                                Chicago. </i></p>
                        <p class="text-light"><i>Our chauffeurs are not just drivers but professional, courteous, and
                                dedicated professionals who understand the importance of providing a seamless and enjoyable
                                transportation experience.
                            </i></p>
                        <p><i>So, contact us now for online booking or any consultation!
                            </i>
                        </p>
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
