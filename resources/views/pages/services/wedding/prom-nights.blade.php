@extends('layouts.app')

@section('content')
    <div class="w-100 hero-section-wrp">
        <div class="hero-content-wrp inner-page">
            <div class="img-wrp">
                <div class="img-hero"
                    style="background-image: url('{{ Vite::asset('resources/images/banners/book-limo-services-2.png') }}')">

                    <div class="hero-text-content-wrp container-md">
                        <div class="text-center col-12   ">
                            <div class="hero-title-wrp">
                                <h1>
                                    <span>SpotLimo</span>
                                    Prom Nights Limo Services
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
            <div class="row">
                <div class="col-lg-6 img-wrp mt-2">
                    <div class="img-intro ">
                        <img src="{{ Vite::asset('resources/images/banners/services-19.png') }}" alt=""
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 content-wrp">
                    <div class="text-wrp">
                        <div class="title-wrp">
                            <h4 class="title">
                                Get The Best Prom Limousine Services in Chicago </h4>
                        </div>
                        <div class="text-content">
                            <p>
                                At SpotLimo, we understand that prom night is a momentous occasion filled with excitement
                                and anticipation in every student's life. Our professional Chicago limo services for prom
                                events aim to elevate this experience to new heights. </p>
                            <p>
                                Your prom night deserves a grand entrance, and our fleet of luxurious limousines is here to
                                make it happen. We ensure an unforgettable and stylish journey for young graduates with our
                                stress-free transportation and smooth celebrations. </p>
                            <p>
                                That’s why we have tailored our special prom limousine services with your child's safety in
                                mind, as we want to pick up and drop them off safely. You can rent our prom limousine for
                                your freshly graduated children to give them the best surprise over their graduation. </p>
                            <p>
                                Call us and learn about our prom limo services for personalization!
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
            <div class="row flex-lg-row flex-column-reverse">
                <div class="col-lg-6 content-wrp">
                    <div class="text-wrp">
                        <div class="title-wrp">
                            <h4 class="title">
                                Safety Is Our Top Priority
                            </h4>
                        </div>
                        <div class="text-content">
                            <p>
                                Your prom night is all about creating lasting memories with friends. Our limo services
                                provide the perfect setting to kickstart the festivities even before you reach the venue.
                            </p>
                            <p>
                                In addition, safety is our priority while making sure a joyful ride for you. Our
                                professional and experienced chauffeurs are licensed, certified, and well-versed in
                                providing exceptional service to prom-goers. You can trust them to navigate the roads
                                safely, allowing you and your friends to enjoy a worry-free evening. </p>
                            <p>
                                Moreover, our latest fleet of luxuries limo is available in various amazing colors. So,
                                whether you want to enjoy prom night in Illinois or its suburbs, we are available 24/7 to
                                assist you. </p>

                        </div>

                    </div>
                </div>
                <div class="col-lg-6 img-wrp mt-4">
                    <div class="img-intro swap-img">
                        <img src="{{ Vite::asset('resources/images/banners/about-us-personalised.png') }}" alt=""
                            class="img-fluid">
                    </div>
                </div>
            </div>

        </div>

    </div>






    <div class="container-fluid px-0 services-why-spotlimo book-limo"
        style="background-image: url('{{ Vite::asset('resources/images/banners/book-limo-services.png') }}'); background-position:center top;">
        <div class="container-md py-4">
            <div class="about-us-content-block content-block">
                <div class="row ">
                    <div class="title-wrp col-12">
                        <h4 class="title text-center py-4">
                            Book Our Limo Service In Chicago & its Suburbs For Your Next Prom Night </h4>
                    </div>

                    <div class="text-center col-12   ">
                        <div class="text-center col-12   ">
                            <p class="text-light"><i>Prom nights are all about having fun and joy to the fullest. Also, it's
                                    not
                                    easy to find a safe party bus or local ride late at night. So, multiply the joy of prom
                                    nights with Chicago’s most trusted Limousine service! </i></p>

                            <p class="text-light"><i>We also provide additional amenities to make you fully bask in the joy
                                    and
                                    celebrate with music, laughter, and excitement as you revel in the comfort and luxury of
                                    our
                                    limousines. </i></p>
                            <p class="text-light"><i>Also, we recommend you choose our limo service for your next prom night
                                    in
                                    advance to avoid the last-minute hassle of booking a taxi or catching a bus.
                                </i></p>
                            <p class="text-light"><i>So, contact us for more information and make an online reservation
                                    now.</i>
                            </p>
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
    </div>
@endsection
