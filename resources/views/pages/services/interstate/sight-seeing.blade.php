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
                                    Sightseeing Limo Services
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
                    <img src="{{ Vite::asset('resources/images/banners/executive-transfers.png') }}" alt="" class="img-fluid">
                 </div>
             </div>
             <div class="col-lg-6 content-wrp">
                     <div class="text-wrp">
                         <div class="title-wrp">
                             <h4 class="title">
                                City Tour and Sightseeing Limo Services Illinois 
                             </h4>
                         </div>
                         <div class="text-content">
                             <p>
                                With so much to see and little time on your hand, why don’t you choose Spot limo for sightseeing and city tour limo and car rental services in Illinois? 
                             </p>
                             <p>
                                Our professional and licensed <a href="{{  route('chauffeur-services') }}"><i>chauffeurs</i></a> can take you everywhere in Illinois and nearby areas. You can relax in the climate-controlled vehicle of your choice that can take you quietly through different tourist attractions and historical locations. Our private and luxury <a href="{{  route('vehicle-rates') }}"><i>fleet</i></a> can make your trip memorable and secure. 
                             </p>
                             <p>
                                So, do you want to enjoy the best sightseeing of the area and city tour within your affordability? If yes, then <a href="{{  route('home') }}#bookingBlock"><i>reserve</i></a> one of our limousines, and our trained chauffeurs will show you what Illinois has to offer. 
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

    <div class="container-fluid px-0 services-why-spotlimo my-5"  style="background-image: url('{{ Vite::asset('resources/images/banners/services-airport-why.png') }}')">
        <div class="container-md py-4">
            <div class="about-us-content-block content-block">
                <div class="row">
                    <div class="col-lg-6 mx-auto content-wrp">
                        <div class="title-wrp col-lg-12">
                            <h4 class="title  py-3">
                                What Makes Us the Best Sightseeing Limo Service Provider in Illinois?
                            </h4>
                        </div>
                            <div class="text-wrp">
                                <div class="text-content">
                                    <p class="text-justify">
                                        We are available 24 hours a day to take you anywhere in Illinois and its suburbs. You can choose the number of hours, and we will make the best of your time. 
                                    </p>
                                    <p class="text-justify">
                                        Book our private car and see how beautiful the city is. Our drivers have complete knowledge of the city’s renowned tourist places so that you can enjoy the view. We can pick you up at the prearranged pick-up time and drop you off at the final stop when the ride ends.
                                    </p>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6 mx-auto content-wrp">
                        <div class="title-wrp col-lg-10">
                            <h4 class="title  py-3">
                                Here’s why; you can count on us.
                            </h4>
                        </div>
                            <div class="text-wrp">
                                <div class="text-content ">
                                    <div class="list">
                                        <ul>
                                            <li class="list-items text-white" style="background-image:url('{{ Vite::asset('resources/images/other/list-check-w.png') }}');">
                                                We have luxury vehicles and expert chauffeurs
                                            </li>
                                            <li class="list-items text-white" style="background-image:url('{{ Vite::asset('resources/images/other/list-check-w.png') }}');">
                                                Special treatment from the first minute to last
                                            </li>
                                            <li class="list-items text-white" style="background-image:url('{{ Vite::asset('resources/images/other/list-check-w.png') }}');">
                                                Your preferable itinerary, and we can take you everywhere
                                            </li>
                                            <li class="list-items text-white" style="background-image:url('{{ Vite::asset('resources/images/other/list-check-w.png') }}');">
                                                We offer complimentary beverages to make your trip joyous
                                            </li>
                                            <li class="list-items text-white" style="background-image:url('{{ Vite::asset('resources/images/other/list-check-w.png') }}');">
                                                Our hourly limo services are secure, efficient and prompt
                                            </li>
                                            <li class="list-items text-white" style="background-image:url('{{ Vite::asset('resources/images/other/list-check-w.png') }}');">
                                                No last-minute ride cancellations or extra charges
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="text-justify">
                                        Contact us or visit our website to get the exact quoted price according to the number of passengers and other requirements. 
                                    </p>

                            
                                </div>
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
                                Our Quick Booking and Reservation Process for Limo Sightseeing Tour Service
                             </h4>
                         </div>
                         <div class="text-content">
                             <p>
                                Spot Limo is all about affordable car service in Illinois with an immediate booking process. Thanks to the advanced technology we use, you can get quoted offer in less than 30 seconds and make your final reservation within 2 minutes.
                             </p>
                             <p>
                                You can also choose our hourly limo service, starting at least 3 hours per vehicle. Car rates vary as they are different for each vehicle. 
                             </p>
                             <p>
                                You can also contact our customer support representatives, who can better assist you with available packages and vehicles according to your preferences. 
                             </p>
                             <p>
                                So, enjoy our fast reservation process and explore your city in style. 
                             </p>
                          
                         </div>
                        
                     </div>
             </div>
            </div>

        </div>
    </div>

@endsection
