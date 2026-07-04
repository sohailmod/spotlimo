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
                                    <span>SpotLimo</span>
                                    Chauffeurs Services in Chicago                                </h1>
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
                    <img src="{{ Vite::asset('resources/images/banners/services-3.png') }}" alt="" class="img-fluid">
                 </div>
             </div>
             <div class="col-lg-6 content-wrp">
                     <div class="text-wrp">
                         <div class="title-wrp">
                             <h4 class="title">
                                Luxurious Chauffeurs Services in Chicago Everyone Can Afford
                            </h4>
                         </div>
                         <div class="text-content">
                             <p>
                                Spot Limo offers quality chauffeurs service in Chicago around the clock for 365 days. Our professional chauffeurs can travel all around Chicago city and its suburbs at the most affordable and pocket-friendly rates.
                            </p>
                             <p>
                                With our top-notch limo service, you can travel anywhere in Chicago for a meeting, business tours, outdoor events, and family trips, as we are reachable to everybody. We take pride in our chauffeurs’ trained and professional behavior, which differentiates us from other chauffeur service providers in Chicago.
                            </p>
                             {{-- <p>
                                Spot Limo takes pride in its chauffeurs’ hospitality which differentiates us from other chauffeur service providers in Chicago.
                             </p>
                             <p>
                                Want to travel around Chicago within your affordability? Contact us now as we aim to make our chauffeur's services easy to access for everyone in Chicago. 
                             </p> --}}
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
            <div class="row align-items-xl-center flex-lg-row flex-column-reverse">
                <div class="col-lg-6 content-wrp">
                        <div class="text-wrp">
                            <div class="title-wrp">
                                <h4 class="title">
                                    Your Timely Arrival Is On Our Chauffeurs
                                </h4>
                            </div>
                            <div class="text-content">
                                <p>
                                    Our well-trained chauffeurs do not miss a single chance to make your experience delightful and comforting. Their driving skills will make you think of you that you are not traveling n the road but in the sky.                                 </p>
                                <p>
                                    Yes, you read it right. It is because of their exceptional and thorough training Their certification and years of experience have bestowed them the expertise to wind through the busiest roads of Chicago in no time and with no stress.                                 </p>
                                <p>
                                    In short, our Chauffeur Services promise you a stress-free and productive travel experience, allowing you to focus on what truly matters. 
                                </p>
                                {{-- <p>
                                    Book our chauffeur limo services for your friends, family and colleagues now.
                                </p> --}}
                            </div>
                         
                        </div>
                </div>
             <div class="col-lg-6 img-wrp">
                 <div class="img-intro swap-img">
                    <img src="{{ Vite::asset('resources/images/banners/services-10.png') }}" alt="" class="img-fluid">
                 </div>
             </div>
            </div>

        </div>

    </div>

    <div class="container-fluid px-0 ideal-travel-partner-block">
        <div class="container-md py-4">
            <div class="about-us-content-block content-block">
                <div class="row  flex-lg-row flex-column-reverse">
                    <div class="col-lg-6 img-wrp">
                        <div class="img-intro swap-img">
                            <img src="{{ Vite::asset('resources/images/banners/services-11.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 content-wrp">
                        <div class="text-wrp">
                            <div class="title-wrp">
                                <h4 class="title">
                                    They Make Sure Your Luxurious & Safe Journey 
                                </h4>
                            </div>

                            <div class="text-content">
                                <div>
                                    <p class="mb-0">
                                        Our chauffeurs are available 24/7 to make your next trip secure and comfortable. So, count on us for business or professional trips in Chicago and its surroundings because our chauffeur limo service in Chicago is perfect for all your special occasions.
                                    </p>
                                    <p>
                                        The expert chauffeurs use a completely personalized approach to handle your luxury travel. We are not ordinary chauffeur limo service providers in Chicago, as we know how to provide VIP services without costing you a fortune.
                                    </p>
                                    <p>Book our chauffeur limo services for your friends, family, and colleagues now.
                                    </p>
                                </div>
                              
                            </div>
                        
                        </div>
                    </div>
                
                    
                
                </div>
    
            </div>

        </div>
    </div>




    <div class="container-fluid px-0 services-why-spotlimo book-limo"  style="background-image: url('{{ Vite::asset('resources/images/banners/book-limo-services.png') }}'); background-position:center top;">
        <div class="container-md py-4">
            <div class="about-us-content-block content-block">
                <div class="row align-items-xl-center p-4">
                    <div class="title-wrp col-12 px-0">
                        <h4 class="title text-center">
                            Discover Why You Should Book Our Chauffeur Limo Service in Chicago
                        </h4>
                    </div>
                    <div class="col-lg-12 text-center content-wrp px-0">
                            <div class="text-wrp">
                                <div class="text-content ">
                                    <p class="text-justify">
                                        Our chauffeurs are your next travel companion for all good reasons. From punctual pickups to attentive service, our chauffeurs are trained to provide the ultimate next-level limo experience while prioritizing your satisfaction.
                                    </p>
                                    <p class="text-justify">
                                        Their hospitality makes you think of being at home, and their driving skills are exceptional. So, say no to local taxi drivers and get stuck in the congested traffic of Chicago with the annoying drivers. Spotlimo’s professional Chauffeur services are just one click away. 
                                    </p>                            
                                    <p class="text-justify">
                                        Book our excellent chauffeur limo service in advance and enjoy your next trip with complete security and relaxation.
                                    </p>
                                    {{-- <p class="text-justify">
                                        Book our excellent chauffeur limo service in advance and enjoy your next trip with complete security and relaxation. 
                                    </p>                             --}}
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
    </div>





    
@endsection
