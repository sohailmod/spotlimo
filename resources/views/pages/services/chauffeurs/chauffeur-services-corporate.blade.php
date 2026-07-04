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
                                    Chauffeur Services Corporate
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
                    <img src="{{ Vite::asset('resources/images/banners/services-13.png') }}" alt="" class="img-fluid">
                 </div>
             </div>
             <div class="col-lg-6 content-wrp">
                     <div class="text-wrp">
                         <div class="title-wrp">
                             <h4 class="title">
                                Custom Crafted Corporate Lime Service Illinois 
                             </h4>
                         </div>
                         <div class="text-content">
                             <p>
                                We prioritize the safety and comfort of our staff and valuable customers. That’s why; we provide complete, sanitized corporate limo service in Illinois and its suburbs. Spot Limo offers private car service and corporate limo service in Illinois and its surrounding.  
                             </p>
                             <p>
                                So, book our executive and luxurious ground transportation services for your next trip.
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
                                    Professional Chauffeurs Service in Illinois and Nearby
                                </h4>
                            </div>
                            <div class="text-content">
                                <p>
                                    Spot Limo hires trained and licensed chauffeurs after checking their driving records as we aim to cater to the needs of our corporate clients. We leave no stone unturned in developing a long-lasting and more robust relationship with our customers. Indeed, as a corporate, you have multiple ground transportation needs, and our expert chauffeurs are available 24/7 for all your special events and occasions. 
                                </p>
                                <p>
                                    Our sophisticated fleet takes care of all our corporate partners. You can enjoy the custom craft and executive traveling experience by hiring our professional chauffeurs.  Our trained and experienced chauffeurs take care of all your travel needs. 
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
                                    Why Should You Hire Our Trained Chauffeurs for Corporate Limo Service?
                                </h4>
                            </div>

                            <div class="text-content">
                                <div>
                                    <p class="mb-0">
                                        Hiring our reputable car service with luxurious cars and professional chauffeurs is a big plus for your company’s good image.                                         
                                    </p>
                                    <p>
                                        Here’s why; you must hire our trained chauffeurs for your corporate travel needs.  
                                    </p>
                                </div>
                                <div class="list">
                                    <ul>
                                        <li class="list-items" style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                            We offer you a fleet of luxurious cars to keep you comfortable while making a business phone call or preparing an important presentation.
                                        </li>
                                        <li class="list-items" style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                            Our trained chauffeurs are obligated to be punctual and responsible. Whether you are coming from the airport or leaving your office, our chauffeurs arrive at the agreed time to pick you up and get you to your desired destination without delay.
                                        </li>
                                        <li class="list-items" style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                            Our corporate limo car service is open 24/7, and you can hire us at any time of the day. 
                                        </li>
                                        <li class="list-items" style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                            Our chauffeurs can make your corporate road trip simple and convenient without worrying about traffic signs and traffic.
                                        </li>
                                    </ul>
                                </div>
                                <p>
                                    So, do you need any other reason to hire our chauffeurs for corporate limo car service? Don’t waste your time, and make your reservation now.
                                </p>
                              
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
                        <h4 class="title">
                            Book Our 24/7 Corporate Limo Service for Your Next Business Trip or Meeting 
                        </h4>
                    </div>
                    <div class="col-lg-6 content-wrp px-0">
                            <div class="text-wrp">
                                <div class="text-content ">
                                    <p class="text-justify">
                                        Are you looking for affordable and secure corporate limo services in Illinois and nearby? Look no further because the licensed chauffeurs at Spot Limo are always available for the quality of your ground transportation needs.
                                    </p>
                                    <p class="text-justify">
                                        You can also count on us for your last-minute corporate trip to the office or any other location. Call us or make an online reservation now.
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
    </div>





    
@endsection
