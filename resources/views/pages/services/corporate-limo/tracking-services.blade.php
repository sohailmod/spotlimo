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
                                    <span>Spot Limo - Airport Services</span>
                                    Corporate Schedule Tracking
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
                                Exquisite and Cost Effective Corporate Limo Service
                             </h4>
                         </div>
                         <div class="text-content">
                             <p>
                                Whether you are booking a quick ride to the <a href="{{  route('airport-services') }}"><i>airport</i></a> for business or require group transport for your corporate events, Spot Limo is available 24X7 to offer impeccable limo and car rental services at the most incredible rates.
                             </p>
                             <p>
                                No doubt, high stake corporate events require top-of-the-line fleets. That’s why; our expert and licensed chauffeurs are available 24X7 to offer you incomparable corporate limo and tracking services at the most cost-effective rates. 
                             </p>
                             <p>
                                Our executive staff works with corporate event and meeting planners to ensure we meet all your requirements perfectly.
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

    <div class="attached-blocks">
        <div class="container-fluid px-0 services-why-spotlimo "  style="background-image: url('{{ Vite::asset('resources/images/banners/services-airport-why.png') }}')">
            <div class="container-md py-4">
                <div class="about-us-content-block content-block">
                    <div class="row align-items-xl-center">
                        <div class="col-lg-6 mx-auto content-wrp">
                                <div class="text-wrp">
                                    <div class="text-content">
                                        <p class="text-justify">
                                            Besides, we have a top-quality dispatch and reservation system. Our dedicated customer support team is available 24X7 to assist you. From the detailed itinerary requirement to incomparable fleet and amenities requirements, our cooperative staff can dwell on details so you can sit back, relax and enjoy your trip. 
                                        </p>
                                        <p class="text-justify">
                                            You can count on our reliable dispatch and reservation system that offers emergency backups and cellular communication with GPS and FAA flight monitoring so that you enjoy your trip without any delay.
                                        </p>
                                    </div>
                                </div>
                        </div>
                        <div class="col-lg-6 mx-auto content-wrp">
                          
                                <div class="text-wrp">
                                    <div class="text-content ">
                                        <p class="text-justify">
                                            Moreover, we have personalized <a class="text-light" href="{{  route('vehicle-rates') }}"><i>fleets</i></a>, including limousines, SUVs, and luxury stretch limo buses to accommodate maximum passengers. Our expert and well-trained <a href="{{  route('chauffeur-services') }}" class="text-light"><i>chauffeurs</i></a> safely travel within Illinois and its nearby areas. They plan for contingencies in advance so we can respond to your requirements immediately.
                                        </p>
                                        <p class="text-justify">
                                            So, contact us now as we look forward to driving you soon.
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
    
        <div class="container-fluid px-0 services-why-spotlimo  book-limo no-img"  style="">
            <div class="container-md">
                <div class="about-us-content-block content-block">
                    <div class="row  p-4">
                        <div class="title-wrp col-12 px-0">
                            <h4 class="title text-center">
                                We Can Meet Your Business Transportation Needs
                            </h4>
                        </div>
                        <div class="col-lg-6 content-wrp">
                                <div class="text-wrp">
                                    <div class="text-content ">
                                        <p class="text-justify">
                                            Spot Limo offers point-to-point booking and charter services to meet all your business transportation needs. 
                                        </p>
                                        <p class="text-justify">
                                            Our Point-to-Point services are recommended when you travel from Point A to Point B without any additional stops. We don't offer this service to and from the airport as this service is preferable for a late-night trip and business meeting with a client at some specific location.
                                        </p>
                                        <p class="text-justify">
                                            You can also consider our <a class="text-light" href="{{  route('executive-transport') }}"><i>charter rides</i></a>, as we offer hourly charges with a minimum of two hours. 
                                        </p>
                                      
                                
                                    </div>
                                   
                                </div>
                        </div>
                    <div class="col-lg-6 content-wrp">
                        <div class="text-wrp">
                        <div class="text-content">
                            <p class="text-justify">
                                You don't need to pay anything extra for additional late-night trips.Remember, our rates differ for different vehicles, as you may need to pay a little extra for luxury limousines or SUVs. 
                            </p>
                            <p class="text-justify">
                                We recommend you choose our hourly charter rides if you have to make multiple stops, unlike point-to-point us.
                            </p>
                            <p class="text-justify">
                                So, contact us and share your requirements with us. We can choose the most suitable vehicles according to the number of passengers and your travel needs
                            </p>
                        </div>
                        
                        </div>
                    </div>
                    </div>
        
                </div>
    
            </div>
        </div>
        
        <div class="to-and-from-services container-fluid ">
            <div class="container-lg">
                <div class="container-wrp">
                    <div class="row">
    
                      <div class="col-12">
                        <div class="title-wrp text-center">
                            <h4 class="title">
                                Corporate Limo Service We Offer
                            </h4>
                        </div>
                        <div class="text-content text-center">
                            <p>We offer different corporate limo services, including;</p>
                        </div>
                      </div>
    
                        <div class="col-lg-4 col-md-4 block-1 block">
                            <div class="content-wrp">
                                <div class="img-wrp">
                                    <img src="{{ Vite::asset('resources/images/services/airport-tra.png') }}" alt="" class="img-fluid w-100">
                                </div>
                                <div class="text-content-wrp">
                                    <div class="title-wrp">
                                        <h5 class="title">Airport Transportation</h5>
                                    </div>
                                    <div class="text-wrp">
                                        <p class="text-justify">
                                            We specialize in airport transportation services To and From O'Hare Airport, Midway Airport and other private airports within Illinois. We also offer meet-and-greet services at reasonable rates.
            
                                        </p>
                                    </div>
    
                                </div>
        
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 block-2 block">
                            <div class="content-wrp">
                                <div class="img-wrp">
                                    <img src="{{ Vite::asset('resources/images/services/chauffeur-tra.png') }}" alt="" class="img-fluid w-100">
                                </div>
                                <div class="text-content-wrp">
                                    <div class="title-wrp">
                                        <h5 class="title">Conferences/Trade Show</h5>
                                    </div>
                                    <div class="text-wrp">
                                        <p class="text-justify">
                                            Our transport planners work with your team to ensure a perfect experience and provide a match to meet your event needs, fleet requirements and related amenities. 
                                        </p>
                                    </div>
                                </div>
        
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 block-3 block">
                            <div class="content-wrp">
                                <div class="img-wrp">
                                    <img src="{{ Vite::asset('resources/images/services/interstate-tra.png') }}" alt="" class="img-fluid w-100">
                                </div>
                                <div class="text-content-wrp">
                                    <div class="title-wrp">
                                        <h5 class="title">Onsite Meetings</h5>
                                    </div>
                                    <div class="text-wrp">
                                        <p class="text-justify">
                                            We can flawlessly manage all your onsite meeting needs, from managing the incoming and departure schedule of your guests. Besides, we take care of their fleet needs and timely pick-up and drop-off.
                                        </p>
                                    </div>
                                </div>
        
                            </div>
                        </div>
    
                        <div class="col-12">
                            <div class="text-content text-center">
                                <p><a href="{{  route('contact') }}"><i>Call us</i></a> to know more.</p>
                            </div>
                          </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>









    
@endsection
