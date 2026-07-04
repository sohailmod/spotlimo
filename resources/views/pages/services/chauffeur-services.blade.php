@extends('layouts.app')

@section('content')

    <div class="w-100 hero-section-wrp">
        <div class="hero-content-wrp inner-page">
            <div class="img-wrp">
                <div class="img-hero" style="background-image: url('{{ Vite::asset('resources/images/banners/hero-img-chauffeur-services.png') }}')">
          
                    <div class="hero-text-content-wrp container-md">
                        <div class="text-center col-12   ">
                            <div class="hero-title-wrp">
                                <h1>
                                    <span>Spot Limo</span>
                                    Reasonable Chauffeur Services
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
             <div class="col-lg-6 pt-3 img-wrp">
                 <div class="img-intro ">
                    <img src="{{ Vite::asset('resources/images/banners/services-8.png') }}" alt="" class="img-fluid">
                 </div>
             </div>
             <div class="col-lg-6 content-wrp">
                     <div class="text-wrp">
                         <div class="title-wrp">
                             <h4 class="title">
                                Reasonable Chauffeur Services in Illinois
                             </h4>
                         </div>
                         <div class="text-content">
                             <p>
                                Spot limo has professional license-holder chauffeurs, as we have hired them after completing the livery license. Our chauffeurs can pick up and drop off guests from one place to another. 
                             </p>
                             <p>
                                We ensure professionalism and punctuality. That’s why; our chauffeurs are well-known in Illinois and its suburbs due to their outstanding services.
                             </p>
                             <p>
                                Whether you are looking for affordable chauffeur services or a luxurious trip to your desired location, our professional chauffeurs are just a call away to make your journey memorable.
                             </p>
                             <p>
                                All our vehicles get disinfected and sanitized after every ride as we aim to provide safe journeys to our valuable customers. Our chauffeurs’ clean driving record makes us reliable transportation service providers in Illinois and its surroundings. That’s why; our Chauffeur limousine Car Service is available all over Illinois at the most economical rates.
                             </p>
                         </div>
                         <div class="bookNow-btn-wrp">
                            <a href="{{  route('home') }}#bookingBlock" class="btn btn-default btn-book-now btn-wide icon-btn">
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
            <div class="row  flex-lg-row flex-column-reverse">
                <div class="col-lg-6 content-wrp">
                        <div class="text-wrp">
                            <div class="title-wrp">
                                <h4 class="title">
                                    Chauffeur Service Illinois ‘To & From’ O’Hare Airport
                                </h4>
                            </div>
                            <div class="text-content">
                                <p>
                                    Are you looking for a reliable chauffeur service to O’Hare airport? Look no further because we are here to assist you.
                                </p>
                                <p>
                                    We promise to provide on-time and safe transportation service to O’Hare airport. You can also contact us for pre-schedule reservations for the guests, and your guests can book our services from any part of Illinois. Besides, you can count on us for luxurious long-distance car services.
                                </p>
                                <p>
                                    You can hire our drivers for your long-distance trips and tours. Our chauffeurs spend enough time preparing the vehicle for long-distance trips. 
                                </p>
                                <p>
                                    So, want to go to O’Hare airport within your budget? Simply call us and book a ride now. Trust us; we value our customers and don’t cost a fortune for our prompt, reasonable, secure airport transport services.
                                </p>
                            </div>
                        
                        </div>
                </div>
             <div class="col-lg-6 pt-3 img-wrp">
                 <div class="img-intro swap-img">
                    <img src="{{ Vite::asset('resources/images/banners/about-us-personalised.png') }}" alt="" class="img-fluid">
                 </div>
             </div>
            </div>

        </div>

    </div>

    


    <div class="container-fluid px-0 services-why-spotlimo"  style="background-image: url('{{ Vite::asset('resources/images/banners/services-airport-why.png') }}')">
        <div class="container-md py-4">
            <div class="about-us-content-block content-block">
                <div class="row align-items-xl-center">
                    <div class="title-wrp col-12">
                        <h4 class="title text-center py-3">
                            Chauffeur Services Illinois ‘To & From’ Midway Airport
                        </h4>
                    </div>
                    <div class="col-lg-6 content-wrp">
                            <div class="text-wrp">
                                <div class="text-content">
                                    <p class="text-justify">
                                        Spot limo is well-known for its reliability, punctuality, and safety. If you want to visit Midway Airport on time, you should book our on-time chauffeur services. We are always available for you whether you want to go to Midway airport or come 
                                    </p>
                                    <p class="text-justify">
                                        from Midway airport. We also provide budget-friendly Chauffeur service to Midway airport from the Illinois area.
                                    </p>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6 content-wrp">
                            <div class="text-wrp">
                                <div class="text-content ">
                                    <p class="text-justify">
                                        Gladly, we pride ourselves on our midway airport meet and greet services, as our chauffeurs can stay inside the airport with your name signed. Besides, they can assist the guests with their luggage. 
                                    </p>
                                    <p class="text-justify">
                                        That’s why; you can book us from Midway Airport and take us to any part of Illinois. We promise you won’t regret booking our Chauffeur services ‘To & From’ at Midway airport.
                                    </p>
                            
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
             <div class="col-lg-6 pt-3 img-wrp">
                 <div class="img-intro ">
                    <img src="{{ Vite::asset('resources/images/banners/services-4.png') }}" alt="" class="img-fluid">
                 </div>
             </div>
             <div class="col-lg-6 content-wrp">
                     <div class="text-wrp">
                         <div class="title-wrp">
                             <h4 class="title">
                                Something Exceptional You Can Expect From Our Chauffeur Services in Illinois 
                             </h4>
                         </div>
                         <div class="text-content">
                             <p>
                                Spot limo provides pre- and post-trip attention. Our professional chauffeurs will care about you before entering the vehicle and until after leaving it. We believe in creating long-term relationships and bonding with our special customers and guests.  
                             </p>
                             <p>
                                We are always on time and greet everyone with a smile. Give us a try.
                             </p>
                             <p>
                                Whether you are looking for affordable chauffeur services or a luxurious trip to your desired location, our professional chauffeurs are just a call away to make your journey memorable.
                             </p>
                             <p>
                                Contact us at <a href="tel:+1{{str_replace('-','',theme_options()->where('key', 'hotline')->first()->value)}}" class=""><i>{{ theme_options()->where('key', 'hotline')->first()->value }}</i>
                                </a> or book an online appointment now. 
                             </p>
                         </div>
                         <div class="bookNow-btn-wrp">
                            <a href="{{  route('home') }}#bookingBlock" class="btn btn-default btn-book-now btn-wide icon-btn">
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
