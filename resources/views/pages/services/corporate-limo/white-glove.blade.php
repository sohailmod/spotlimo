@extends('layouts.app')

@section('content')

    <div class="w-100 hero-section-wrp">
        <div class="hero-content-wrp inner-page">
            <div class="img-wrp">
                <div class="img-hero" style="background-image: url('{{ Vite::asset('resources/images/banners/hero-img-aboutus.png') }}')">
          
                    <div class="hero-text-content-wrp container-md">
                        <div class="text-center col-12   ">
                            <div class="hero-title-wrp">
                                <h1>
                                    <span>Spot Limo</span>
                                    White Glove Limo Service 
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
                    <img src="{{ Vite::asset('resources/images/banners/about-us-intro.png') }}" alt="" class="img-fluid">
                 </div>
             </div>
             <div class="col-lg-6 content-wrp">
                     <div class="text-wrp">
                         <div class="title-wrp">
                             <h4 class="title">
                                White Glove Limo Service in Illinois
                             </h4>
                         </div>
                         <div class="text-content">
                             <p>
                                Our White Glove Limo services are not ordinary; we cater luxury.
                                Whether you want to travel to home, the theater, a hotel, a prom, a wedding, the golf course, a business meeting or an airport transfer, we offer luxury Sedans, SUVs and stretch limousine services to ensure you drive with grace and style. 
                             </p>
                             <p>
                                We have roomy limousines with multiple TV screens, a premium audio system, DVD, privacy divider, chic fiber optic lighting and leather seating to make your trip relaxing and memorable. 
                             </p>
                             <p>
                                We look forward to taking care of your luxury Limo and Sedan needs at the most <a href="{{  route('vehicle-rates') }}"><i>affordable rates</i></a>.
                             </p>
                         </div>
                         <div class="bookNow-btn-wrp">
                            <a href="{{  route('home') }}/#bookingBlock" class="btn btn-default btn-book-now btn-wide icon-btn">
                                Book Now
                                <i class="bi bi-arrow-right-circle-fill"></i>
                            </a>
                        </div>
                     </div>
             </div>
            </div>

        </div>
    </div>

 

    <div class="container-md personalised-limo-block mb-3">
        <div class="about-us-content-block content-block">
            <div class="row  flex-lg-row flex-column-reverse">
                
                <div class="col-lg-6 content-wrp">
                        <div class="text-wrp">
                            <div class="title-wrp">
                                <h4 class="title">
                                    Our White Glove Transportation Service for Special Events
                                </h4>
                            </div>
                            <div class="text-content">
                                <p>
                                    Spot Limo is the leading private limousine provider for all your special events. Whether you are traveling for business or personal trips, our top-quality limousine service ideally meets all your transportation needs. 
                                </p>
                                <p>
                                    From group transportation services to <a href="{{  route('airport-services') }}"><i>airport transport services</i></a>, we have got you covered. 
                                </p>
                                <p>
                                    Our White Glove Limo Service can add an extra dimension to all your personal, professional and business events. Our luxury vehicles and superior services make us the leading chauffeured service for parties, concerts, theater, weddings or special events. We can make your event planning successful by offering impeccable and top-class transportation services according to your preferences.  
                                </p>
                                <p>
                                    You can trust our <a href="{{  route('chauffeur-services') }}"><i>expert chauffeurs</i></a> as they maintain a higher level of professionalism by offering top-notched services with complete devotion and punctuality. They can take you and your clients from one place to another with ease and timeliness.   
                                </p>
                            </div>
                  
                        </div>
                </div>

                <div class="col-lg-6 img-wrp">
                    <div class="img-intro swap-img">
                       <img src="{{ Vite::asset('resources/images/banners/about-us-personalised.png') }}" alt="" class="img-fluid">
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
                    <img src="{{ Vite::asset('resources/images/banners/about-us-intro.png') }}" alt="" class="img-fluid">
                 </div>
             </div>
             <div class="col-lg-6 content-wrp">
                     <div class="text-wrp">
                         <div class="title-wrp">
                             <h4 class="title">
                                Our White Glove Corporate Limo Service is perfect for
                             </h4>
                         </div>
                         <div class="text-content">
                            <div class="list">
                                <ul>
                                    <li class="list-items" style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                        Galas
                                    </li>
                                    <li class="list-items" style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                        Conventions
                                    </li>
                                    <li class="list-items" style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                        Board Meetings
                                    </li>
                                    <li class="list-items" style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                        Entertainment Venues
                                    </li>
                                    <li class="list-items" style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                        Major Events
                                    </li>
                                    <li class="list-items" style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                        Trade Shows and much more
                                    </li>
                                </ul>
                            </div>

                            <p>
                                We offer luxurious limo services for 10, 12, 14, 16 and more passengers. Our 5 Star customer services make us the most reliable White Glove Limo service provider in Illinois and its suburbs.
                             </p>

                             <p>
                                You can visit our website to discover more about top-quality transportation services.
                             </p>
                         </div>
                     
                     </div>
             </div>
            </div>

        </div>
    </div>

    <div class="container-fluid px-0 services-why-spotlimo book-limo"  style="background-image: url('{{ Vite::asset('resources/images/banners/book-limo-services.png') }}')">
        <div class="container-md py-4">
            <div class="about-us-content-block content-block">
                <div class="row align-items-xl-center p-4">
                    <div class="title-wrp col-12 px-0">
                        <h4 class="title">
                            Get in Touch and Learn More About Our Economic White Glove Transportation Service in Illinois and Its Surrounding
                        </h4>
                    </div>
                    <div class="col-lg-6 content-wrp px-0">
                            <div class="text-wrp">
                                <div class="text-content ">
                                    <p class="text-justify">
                                        We are one of the leading luxury Limo transportation service providers in Illinois. That's why; we have developed a long-lasting relationship with our customers by providing them with unmatchable limo services within their affordability
                                    </p>
                                    <p class="text-justify">
                                        We aim to provide the best White Glove Limo service to our valued customers, as they deserve the best. 
                                    </p>
                                    <p class="text-justify">
                                        So, <a href="{{  route('contact') }}" class="text-light"><i>get in touch with us</i></a> to discover more about our services. 
                                    </p>
                            
                                </div>
                                <div class="bookNow-btn-wrp">
                              
                            </div>
                    </div>
                
                </div>
    
            </div>

        </div>
    </div>





    
@endsection
