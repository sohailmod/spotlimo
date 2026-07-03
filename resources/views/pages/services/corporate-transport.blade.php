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
                                    Corporate Limo Transportation
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
                    <img src="{{ Vite::asset('resources/images/banners/corporate-transfers.png') }}" alt="" class="img-fluid">
                 </div>
             </div>
             <div class="col-lg-6 content-wrp">
                     <div class="text-wrp">
                         <div class="title-wrp">
                             <h4 class="title">
                                Corporate Luxury and Limousine Hire in Illinois  
                             </h4>
                         </div>
                         <div class="text-content">
                             <p>
                                Spot limo prioritizes customers’ and staff’s safety before anything else. That’s why; we ensure reliable, efficient, and secure corporate limo services in Illinois and its surrounding. 
                             </p>
                             <p>
                                Besides, everything is included when you book the ride with us. So, just relax and enjoy your trip at the most reasonable rates. 
                             </p>
                             <p>
                                Our corporate limo services can be used for a wide range of purposes including trips to and from the airport (with meet and greet if needed). You can also book our ride for annual business dinners, and parties, or we can also get you from one meeting to the next one on time. You can simply discuss anything we can do for you to make your corporate trips more comfortable.  
                             </p>
                             <p class="mb-0">
                                <b>So, call us at <a href="tel:+1{{str_replace('-','',theme_options()->where('key', 'hotline')->first()->value)}}" class=""><i>{{ theme_options()->where('key', 'hotline')->first()->value }}</i>
                                </a>and discuss all the requirements you may have.</b>
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

    <div class="container-fluid px-0 ideal-travel-partner-block">
        <div class="container-md py-4">
            <div class="about-us-content-block content-block">
                <div class="row  flex-lg-row flex-column-reverse">
                    <div class="col-lg-6 content-wrp">
                        <div class="text-wrp">
                            <div class="title-wrp">
                                <h4 class="title">
                                    Corporate Limo Services We offer
                                </h4>
                            </div>

                            <div class="text-content">
                                <div>
                                    <p class="mb-0">
                                        Here’s the list of our corporate services including.                                        
                                    </p>
                                </div>
                                <div class="list">
                                    <ul>
                                        <li class="list-items" style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                            Trips ‘To and From’ all Illinois airports
                                        </li>
                                        <li class="list-items" style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                            Meet and greet services for your executives or clients arriving at the airport
                                        </li>
                                        <li class="list-items" style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                            Trip ‘To and From’ your meeting destinations. Our chauffeurs can wait for you until the meetings are finished.
                                        </li>
                                       
                                    </ul>
                                </div>
                                <p>
                                    Combining our luxury vehicles with expert and polite chauffeurs ensures that you are our valuable guests, and your comfort is our utmost preference. 
                                </p>
                            
                            </div>
                       
                        </div>
                    </div>
                    <div class="col-lg-6 img-wrp">
                        <div class="img-intro swap-img">
                            <img src="{{ Vite::asset('resources/images/banners/about-us-ideal.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    
                
                </div>
    
            </div>

        </div>
    </div>

    <div class="container-md spot-limo-intro-block">
        <div class="about-us-content-block content-block">
            <div class="row">
             <div class="col-lg-6 img-wrp">
                 <div class="img-intro ">
                    <img src="{{ Vite::asset('resources/images/banners/about-us-intro.png') }}" alt="" class="img-fluid">
                 </div>
             </div>
             <div class="col-lg-6 content-wrp">
                     <div class="text-wrp">
                         <div class="title-wrp">
                             <h4 class="title">
                                What Makes Us the Best Corporate Limo Service Provider in Illinois?
                             </h4>
                         </div>
                         <div class="text-content">
                             <p>
                                We give top priority to our corporate clients’ needs. That’s why; we believe in maintaining a long-term and strong relationship with our clients. Moreover, we try to fulfill all ground transportation needs for corporate events, meetings, and other special occasions.
                             </p>
                             <p>
                                Besides, we have deployed a graceful fleet to take the best care of all our honorable corporate clients. Our luxurious and classy limos make the executive travel experience more comfortable. 
                             </p>
                             <p>
                                You don’t need to worry about your travel needs as our licensed and professional chauffeurs are available 24/7 to cater to your requirements.  
                             </p>
                          
                         </div>
                 
                     </div>
             </div>
            </div>

        </div>
    </div>

    <div class="container-fluid px-0 services-why-spotlimo"  style="background-image: url('{{ Vite::asset('resources/images/banners/services-airport-why.png') }}')">
        <div class="container-md py-4">
            <div class="about-us-content-block content-block">
                <div class="title-wrp text-center col-lg-12">
                    <h4 class="title  py-3">
                        Looking for a Reliable and Budget-Friendly Corporate Limo Service in Illinois? Try US
                    </h4>
                </div>
                <div class="row ">
                    <div class="col-lg-6 mx-auto content-wrp">
                            <div class="text-wrp">
                                <div class="text-content">
                                    <p class="text-justify">
                                        If you require corporate limo service in Illinois and its suburbs, then ‘Spot Limo’ is the name you can trust. Our long-term quality relationship with businesses makes us better than our corporate limo service providers in Illinois.
                                    </p>
                                    <p class="text-justify">
                                        We give key preference to reliability and safety. That’s why; we hire background-checked chauffeurs to avoid any inconvenience. We are available to everyone in Illinois at your request. 
                                    </p>
                                    <p class="text-justify">
                                        If you want to explore Illinois to explore more business opportunities, then give us a chance to serve you with on-time corporate limo services.
                                    </p>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6 mx-auto content-wrp">
                            <div class="text-wrp">
                                <div class="text-content ">
                                    <p class="text-justify">
                                        We are always available to take you to your favorite spot and will wait for you outside whenever you want. Amazingly, our professional chauffeurs have already learned Illinois routing. So, they can take you to any street or spot without using a GPS map.
                                    </p>
                                    <p class="text-justify">
                                        Whether you have a business meeting or annual dinner, just let us know your needs and we will serve you with the best transportation services within Illinois.  
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



    










  


    
@endsection
