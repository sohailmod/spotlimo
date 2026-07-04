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
                                    Cooperate Limo Services
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
                <div class="col-lg-6 img-wrp">
                    <div class="img-intro ">
                        <img src="{{ Vite::asset('resources/images/banners/executive-transfers.png') }}" alt=""
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 content-wrp">
                    <div class="text-wrp">
                        <div class="title-wrp">
                            <h4 class="title">
                                Your Trusted Corporate Travel Partner in Chicago </h4>
                        </div>
                        <div class="text-content">
                            <p>
                                We understand the importance of making a lasting impression in the business world, and
                                that's why we offer unmatched corporate limo services that go beyond your expectations. </p>
                            <p>
                                From executive airport transfers to corporate event transportation, our luxurious limousines
                                meet business professionals' discerning needs. In addition, Spotlimo's team of experienced
                                chauffeurs is dedicated to providing seamless and reliable transportation for your
                                executives and clients. </p>
                            <p>
                                So, whether you are heading for an important conference or want to provide convenience for
                                your prestigious clients, SpotLimo got you fully covered. We make sure to offer a seamless
                                extension of your business, portraying a professional image that aligns with your company's
                                values. </p>
                            <p>Rest assured that our fleet of luxury vehicles is equipped with state-of-the-art amenities,
                                allowing you to stay productive on the go. You can catch up on work, make important calls,
                                or simply unwind as our chauffeurs navigate the bustling streets of Chicago with precision
                                and grace.</p>

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
                            What Makes Us the Best Coopertae Limo Service Provider in Chicago?
                    </div>

                    <div class="text-center col-12   ">
                        <p class="text-light"><i>We are available 24 hours a day to take you anywhere in Chicago and its
                                suburbs. Whether you take our services hourly or for point-to-point travel, we treat you as
                                our royal guest, making your journey smooth and luxurious. </i></p>
                        <p class="text-light"><i>At Spotlimo, we go the extra mile to accommodate your specific needs,
                                offering custom-tailored services for corporate events, crucial conferences, and business
                                meetings. Your satisfaction is our success, and we are committed to ensuring that your
                                corporate travel is an effortless and enjoyable experience. </i></p>
                        <p class="text-light"><i>Contact us or visit our website for the exact quoted price according to the
                                number of passengers and other requirements. </i></p>

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
                                Quick, Hassle-Free, & Advance Booking System for Our Valued Customers </h4>
                        </div>
                        <div class="text-content">
                            <p>
                                Time is money, and we don’t only provide affordable rates, but we also value your precious
                                time. That’s why we have made it a walk in the park to reserve your favorite fleet for your
                                next corporate gathering. </p>
                            <p>
                                Simply visit our website, mention your requirements, choose your favorite fleet, and we are
                                ready to handle next. </p>
                            <p>
                                Choose SpotLimo to attend your corporate events without worrying about your travel because
                                our professionals know it the best! </p>


                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
