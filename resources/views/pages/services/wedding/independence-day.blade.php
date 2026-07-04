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
                                    Independence Day Services
                                </h1>
                            </div>
                        </div>
                    </div>

                    <span class="overlay"></span>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container-md mx-auto px-0 services-why-spotlimo mt-5"  >
        <div class="container-md py-0 px-md-5">
            <div class="about-us-content-block content-block">
                <div class="row">
                    <div class="title-wrp col-lg-12">
                        <h4 class="title  py-3 px-4">
                            Celebrate Independence Day with Our Luxury Party Bus and Limo Service
                        </h4>
                    </div>
                    <div class="col-lg-5 mx-auto content-wrp">
                            <div class="text-wrp">
                                <div class="text-content">
                                    <p class="text-justify">
                                        If you didn’t have time to plan anything for Independence Day, Spot Limo is here to assist you with the list of noticeable events and venues dedicated to the celebration of independence day in Illinois.
                                    </p>
                                    <p class="text-justify">
                                        Make this year’s celebration memorable by booking our luxury and affordable limousine service for independence day celebrations in Illinois and nearby areas. We have hired professional and courteous <a href="{{  route('chauffeur-services') }}" class="text-light"><i>chauffeurs</i></a>, and they ensure.
                                    </p>
                                  
                                </div>
                                
                            </div>
                    </div>
                    <div class="col-lg-7 mx-auto content-wrp">
                       
                            <div class="text-wrp">
                                <div class="text-content ">
                                    <div class="list">
                                        <ul>
                                            <li class="list-items text-white" style="background-image:url('{{ Vite::asset('resources/images/other/list-check-w.png') }}');">
                                                You receive exquisite treatment the whole day
                                            </li>
                                            <li class="list-items text-white" style="background-image:url('{{ Vite::asset('resources/images/other/list-check-w.png') }}');">
                                                You visit top places in a day to double the joy of Independence Day celebrations.
                                            </li>
                                            <li class="list-items text-white" style="background-image:url('{{ Vite::asset('resources/images/other/list-check-w.png') }}');">
                                                You can visit as many places as you want if you have rented our vehicles for <a href="{{  route('executive-transport') }}" class="text-light"></a> services.
                                            </li>
                                            <li class="list-items text-white" style="background-image:url('{{ Vite::asset('resources/images/other/list-check-w.png') }}');">
                                                You can celebrate Independence Day with special tours, parades, live concert shows, and fireworks. 
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="text-justify">
                                        We can take care of all booking formalities on your behalf. So, sit back, relax, and enjoy a special day celebration with your special friends and family members.
                                    </p>
                                    <div class="bookNow-btn-wrp">
                                        <a href="{{  route('contact') }}" class="btn btn-default btn-book-now btn-wide icon-btn">
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
    </div> --}}

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
                                Celebrate Independence Day with Our Luxury Limo and Transporation Service </h4>
                        </div>
                        <div class="text-content">
                            <p>
                                Independence Day parades and festivities are a hallmark of the celebrations, and we want you
                                to take the best out of these celebrations. Our spacious and elegantly decorated limousines
                                are perfect for groups or families who wish to partake in local parades or events.
                            </p>
                            <p>Our expert chauffeurs will take you to the best vantage points, ensuring you have a front-row
                                seat to witness the spectacular display of colors. While taking you to the best vantage
                                points, our services are accompanied by the comfort and luxury of our limousines.
                            </p>
                            <p>
                                Whether you're planning a solo outing, a family adventure, or a group celebration, our
                                Independence Day Services offer tailor-made packages to cater to your unique preferences.
                                You can choose from our wide range of limousines, including sedans, SUVs, and party buses,
                                to suit your party size and style.
                            </p>
                            <p>
                                Also, we provide point-to-point reservations or hourly limo services to make your
                                independence day celebrations more exciting and enthralling. Let us handle the
                                transportation while you immerse yourself in the vibrant spirit of the day.
                            </p>
                            <p>
                                Contact us now and get instant quoted offers according to your budget and other
                                requirements.
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
                                Book Online Our Exclusively Designed Stretch Limousine and Celebrate Independence Day With
                                Fun </h4>
                        </div>
                        <div class="text-content">
                            <p>
                                Celebrate Independence Day in style and luxury by booking our exclusively designed stretch
                                limousine online! By choosing our limousine service, you'll enjoy a seamless and convenient
                                booking process through our user-friendly online platform. </p>
                            <p>
                                Our stretch limousine provides ample space for you to enjoy the festivities in comfort. As
                                you step inside our opulent stretch limousine, you'll be captivated by its luxurious
                                interior, complete with plush leather seating, ambient lighting, and state-of-the-art
                                entertainment systems. </p>
                            <p>
                                Make this patriotic occasion even more memorable with a touch of extravagance and fun.
                            </p>
                            <p>
                                Contact Us Now & Make A Reservation Today!                            </p>

                                
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


    <div class="container-fluid px-0 services-why-spotlimo"
        style="background-image: url('{{ Vite::asset('resources/images/banners/services-airport-why.png') }}')">
        <div class="container-md py-5">
            <div class="about-us-content-block content-block">
                <div class="row ">
                    <div class="title-wrp col-12">
                        <h4 class="title text-center py-4">
                            Get The Safe & Professional Limo Services Within Your Affordability
                    </div>

                    <div class="text-center col-12   ">
                        <p class="text-light"><i>While celebrations are in full swing, safety remains paramount. Our
                                experienced chauffeurs are well-versed in navigating through holiday traffic and will ensure
                                a smooth and secure journey for you and your loved ones. </i></p>
                        <p class="text-light">
                            <i>In addition, our rates are super-economical while making sure to provide the best
                                transportation services. So, count on us for this Independence Day celebration and enjoy the
                                festivities with peace of mind, knowing you are in capable hands without burdening your
                                budget. </i>
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
@endsection
