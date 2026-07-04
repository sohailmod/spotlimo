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
                                    New Year's Eve Services
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
                    <img src="{{ Vite::asset('resources/images/banners/services-3.png') }}" alt="" class="img-fluid">
                 </div>
             </div>
             <div class="col-lg-6 content-wrp">
                     <div class="text-wrp">
                         <div class="title-wrp">
                             <h4 class="title">
                                Dependable, safe and Efficient Private Transportation for New Year's Eve in Illinois 
                             </h4>
                         </div>
                         <div class="text-content">
                             <p>
                                No one wants to worry about driving, parking, and waiting in line at nightclubs on the last night of the new year. Don't worry; you can count on us as you can travel around Illinois in our stretch limo, SUV, and party bus.  
                             </p>
                             <p>
                                It's a great way to cherish the special moment with your loved ones before the year ends. Whether you want to go to your New Year party or go out on NYE with your friends, our top-class luxury limo service should be part of your planning.
                             </p>
                             <p>
                                No worries if you are leaving the party late, our <a href="{{  route('chauffeur-services') }}"><i>chauffeurs</i></a> can wait for you to escort you to your destination safely.
                             </p>
                             <p>
                                So, bring in the new year with style and let us pick you up and drop you off at party destinations timely.
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
            <div class="row align-items-xl-center flex-lg-row flex-column-reverse">
                <div class="col-lg-6 content-wrp">
                        <div class="text-wrp">
                            <div class="title-wrp">
                                <h4 class="title">
                                    Avoid Last Minute Transportation Stress & Ride With Our Limo Service for New Year Celebration
                                </h4>
                            </div>
                            <div class="text-content">
                                <p>
                                    If you want to avoid the stress of a last-minute ride reservation or you don't want to travel by public transport, then you can make an <a href="{{  route('home') }}#bookingBlock"><i>online reservation</i></a> in advance. Based on provided information and your requirements, we offer the most suitable quoted price for your trip.
                                </p>
                                <p>
                                    We have a well-equipped fleet of luxurious vehicles, and our chauffeurs provide their services with complete professionalism and devotion. No worries if a large group of friends want to relish NYE, as our party bus and stretch limo can accommodate maximum passengers.
                                </p>
                                <p>
                                    You can relax and enjoy the entire evening travelling in a comfortable limo without any hassle. 
                                </p>
                            </div>
                         
                        </div>
                </div>
             <div class="col-lg-6 img-wrp">
                 <div class="img-intro swap-img">
                    <img src="{{ Vite::asset('resources/images/banners/services-16.png') }}" alt="" class="img-fluid">
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
                            <img src="{{ Vite::asset('resources/images/banners/corporate-transfers.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 content-wrp">
                        <div class="text-wrp">
                            <div class="title-wrp">
                                <h4 class="title">
                                    Why Should You Choose Our Limo Service for New Year's Evening?
                                </h4>
                            </div>

                            <div class="text-content">
                                <div>
                                    <p class="mb-0">
                                        NYE is the biggest night to chill out with your friends, family and beloved ones. Our quality and reasonable private transportation services in Illinois can make your occasion joyous.                                      
                                    </p>
                                    <p>
                                        Here's why you should choose us;
                                    </p>
                                </div>
                                <div class="list">
                                    <ul>
                                        <li class="list-items" style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                            One of the best things about choosing our limousine or party bus is that we keep the party rolling while heading from one event to another.
                                        </li>
                                        <li class="list-items" style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                            You can avoid rushing and reach home safely soon after the party ends. You don't need to look for cabs at costly rates.
                                        </li>
                                        <li class="list-items" style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                            Treat your beloved ones with special limousine services, as our drivers ensure you enjoy the ride.
                                        </li>
                                     
                                    </ul>
                                </div>
                                <p>
                                    So, don't you want to make every moment memorable before the year ends or when the new year begins?
                                </p>
                                <p>
                                    Try us; we will make your celebration extraordinary. 
                                </p>
                              
                            </div>
                        
                        </div>
                    </div>
                
                    
                
                </div>
    
            </div>

        </div>
    </div>










    
@endsection
