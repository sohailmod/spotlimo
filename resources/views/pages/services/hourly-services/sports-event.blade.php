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
                                    Sports Events
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
                        <img src="{{ Vite::asset('resources/images/banners/services-17.png') }}" alt=""
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 content-wrp">
                    <div class="text-wrp">
                        <div class="title-wrp">
                            <h4 class="title">
                                Arrive in Style at Your Favorite Sports Events in Chicago </h4>
                        </div>
                        <div class="text-content">
                            <p>
                                At SpotLimo, we offer a luxury limousine service specifically designed for sports events.
                                Whether you're a die-hard sports fan or a corporate group attending a game, we are here to
                                make your experience unforgettable.
                            </p>
                            <p>
                                We provide hassle-free transportation that adds a touch of elegance and comfort to your game
                                day. Plus, our luxury transportation service arrives you at the sports stadium in style and
                                allows you to turn the heads as you step out of one of our sleek and deluxe limousines.
                            </p>
                            <p>
                                In addition, no need to worry about parking outside the jam-packed stadiums or finding your
                                way through crowded streets to reach your destination timely. Our experienced chauffeurs
                                will navigate the city, ensuring you arrive at your destination on time, relaxed, and ready
                                to enjoy the game.
                            </p>
                            <p>
                                Also, our luxury <a href="{{ route('home') }}#bookingBlock"><i>Limo rental</i></a> service
                                has a variety of fleets that can even fit up to 13 passengers in one vehicle. So, travel
                                in style and enjoy your game day with ultimate relaxation! </p>

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
                                Point to Point Or Houlry Luxury Limo Service For Illinois </h4>
                        </div>
                        <div class="text-content">
                            <p>
                                We understand sometimes the games finish after the committed pick-up time. So, if you prefer
                                to enjoy the game till the end, we can switch your point-to-point return trip to hourly car
                                service. Our Chauffeurs
                            </p>
                            <p>
                                Don’t worry; in either situation. Our chauffeurs are well-trained to serve you the best in
                                every scenario. So, whether you want point-to-point reservations or hourly limo services, we
                                are available 24/7 to assist you.
                            </p>
                            <p>
                                Contact us <a
                                    href="tel:+1{{ str_replace('-','',theme_options()->where('key', 'hotline')->first()->value) }}"
                                    class="text-light"><i>{{ theme_options()->where('key', 'hotline')->first()->value }}</i>
                                </a> now and get instant quoted offers according to your budget and or reserve your fave
                                fleet online.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 img-wrp">
                    <div class="img-intro swap-img">
                        <img src="{{ Vite::asset('resources/images/banners/services-5.png') }}" alt=""
                            class="img-fluid">
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="container-md personalised-limo-block">
        <div class="about-us-content-block content-block">
            <div class="row align-items-xl-center flex-lg-row flex-column-reverse">
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
                                Professional Limo Service For Sports Day </h4>
                        </div>
                        <div class="text-content">
                            <p>
                                Whether you are in the stadium to cheer for your favorite team or compete in a sports event,
                                we make sure that you focus on what matters most, i.e., the game.
                            </p>
                            <p>
                                We understand the passion and excitement surrounding sports events, and we are dedicated to
                                enhancing your game day experience.
                            </p>
                            <p>
                                So, why settle for ordinary transportation when you can elevate your game day with
                                <a href="{{ route('home') }}"> SpotLimo's luxury limousine service</a>? Let us serve you at
                                this special event so you can enjoy
                                the sports day to its fullest.
                            </p>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>




    <div class="container-fluid px-0 services-why-spotlimo mt-5"
        style="background-image: url('{{ Vite::asset('resources/images/banners/services-airport-why.png') }}')">
        <div class="container-md py-4">
            <div class="about-us-content-block content-block">
                <div class="row">
                    <div class="title-wrp col-12">
                        <h4 class="title text-center py-4">
                            See Why Our Sports Event Hourly Limo Rental Services Suit You. </h4>
                    </div>

                    <div class="text-center col-12">
                        <p class="text-light"><i>When you choose SpotLimo, it's not just about convenience. In fact, with
                                SpotLimo Limousine Service, you get an experience that goes beyond transportation. </i></p>

                        <p class="text-light"><i>Our limousines are equipped with luxurious amenities, including plush
                                seating, state-of-the-art entertainment systems, and complimentary refreshments. Plus, our
                                services include; </i></p>

                        <ul style="text-align: left; margin: 0 auto; max-width: 600px;">
                            <li style="color: white;">Commitment to providing quality services</li>
                            <li style="color: white;">Professional and friendly staff that will not let you alone amid
                                the congested roads of Chicago.</li>
                            <li style="color: white;">Well-designed interior of our fleets.</li>
                            <li style="color: white;">Multiple options of fleets, suitable for providing a wide sitting
                                area for a large group of people.</li>
                            <li style="color: white;">On-time service; your flight can delay but our services will not
                                let you reach the delay.</li>
                            <li style="color: white;">Comfort and style that you do not want to miss</li>
                            <li style="color: white;">Affordability that you cannot resist</li>
                        </ul>
                        <br>
                        <p class="text-light"><i>Try us; You won’t regret it! 
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
    </div>
@endsection
