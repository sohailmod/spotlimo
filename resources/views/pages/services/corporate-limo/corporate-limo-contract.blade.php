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
                                    Corporate Limo Contracts
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
                    <img src="{{ Vite::asset('resources/images/banners/about-us-intro.png') }}" alt="" class="img-fluid">
                 </div>
             </div>
             <div class="col-lg-6 content-wrp">
                     <div class="text-wrp">
                         <div class="title-wrp">
                             <h4 class="title">
                                Spot Limo Provides Premium Quality and Exceptional Shuttling Services to Illinois and Nearby Areas
                             </h4>
                         </div>
                         <div class="text-content">
                             <p>
                                Spot Limo is the most reliable limo and car service provider in Illinois. You can trust our 24X7 shuttle service to various small and large businesses, <a href="{{  route('airport-services') }}"><i>airports</i></a>, hotels, bus stations and parking lots. We also provide quality limo services for special events, including conventions, sports events or whatever your need may be. 
                             </p>
                             <p>
                                Our Shuttle Contract Service features professional and licensed <a href="{{  route('chauffeur-services') }}"><i>chauffeurs</i></a> who consistently establish and practice reliable driving skills. Our deluxe shuttle service providers can pick you up and drop you off at the desired location timely. Besides, we ensure flexible shuttling services according to your availability and event type.
                             </p>
                             <p>
                                So, travel in style and be completely safe with us. You can contact us at any time or visit  <a href="{{  route('home') }}"><i>Our Website</i></a> to get more details about our services.
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
            <div class="row align-items-xl-center flex-lg-row flex-column-reverse">
                <div class="col-lg-6 content-wrp">
                    <div class="text-wrp">
                        <div class="title-wrp">
                            <h4 class="title">
                                Mini Coach Charter Services at The Most Affordable Rates
                            </h4>
                        </div>
                        <div class="text-content">
                            <p>
                                You can also rely on your 24 hours Illinois Mini Coach Charter Service without any doubt. We are a professional and organized company with premium quality operating standards our chauffeurs stand by. 
                            </p>
                            <p>
                                Our main objective is to offer convenient, uninterrupted services 24 hours a day. That's why; we follow specific policies and principles to make our service dependable.

                            </p>
                            <p>
                                We have various fleets available according to your preference and budget type. You can make a a <a href="{{  route('home') }}/#bookingBlock"><i>reservation in advance</i></a> to avoid last-minute inconvenience.
                            </p>
                        </div>
              
                    </div>
                </div>
                <div class="col-lg-6 img-wrp">
                    <div class="img-intro swap-img" >
                       <img src="{{ Vite::asset('resources/images/banners/about-us-personalised.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
               
             
            </div>

        </div>

    </div>

    <div class="to-and-from-services corporate-limo-contract container-fluid">
        <div class="container-lg">
            <div class="container-wrp">
                <div class="row">
                    <div class="col-lg-12 text-center">
                       <div class="col-lg-8 col-md-10 col-12 mx-auto text-center">
                            <div class="title-wrp">
                                <h4 class="title">
                                    Why Should You Choose Our Shuttling Service in Illinois?
                                </h4>
                            </div>
                            <div class="text-content">
                                <p>
                                    <i>Here’s why our shuttling services in Illinois are the best.</i>
                                </p>
                            </div>
                       </div>
                    </div>
                    <div class="col-lg-3 col-md-4 block-1 block-feature">
                        <div class="content-wrp set-min-height">
                            <div class="img-wrp icon-wrp">
                                <img src="{{ Vite::asset('resources/images/services/icons/flexibility.png') }}" alt="" class="img-fluid ">
                            </div>
                            <div class="text-content-wrp text-center">
                                <div class="title-wrp">
                                    <h5 class="title">Flexibility</h5>
                        </div>
                                <div class="text-wrp">
                                    <p class="">
                                        We understand plans can be changed at any time. So, if you want to make any last-minute changes to your plans, you can contact us, and we'll adapt accordingly. 
                                    </p>
                                </div>
                            </div>
    
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 block-2 block-feature">
                        <div class="content-wrp set-min-height">
                            <div class="img-wrp icon-wrp">
                                <img src="{{ Vite::asset('resources/images/services/icons/accessibility.png') }}" alt="" class="img-fluid ">
                            </div>
                            <div class="text-content-wrp text-center">
                                <div class="title-wrp">
                                    <h5 class="title">Accessibility</h5>
                        </div>
                                <div class="text-wrp">
                                    <p class="mb-1">
                                        We are available 24/7 to assist you. Our supportive customer care representatives are always to resolve your queries related to our vehicles and their price plan.                                   
                                    </p>
                                </div>
                            </div>
    
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 block-3 block-feature">
                        <div class="content-wrp set-min-height">
                            <div class="img-wrp icon-wrp">
                                <img src="{{ Vite::asset('resources/images/services/icons/professionalism.png') }}" alt="" class="img-fluid ">
                            </div>
                            <div class="text-content-wrp text-center">
                                <div class="title-wrp">
                                    <h5 class="title">Professionalism</h5>
                        </div>
                                <div class="text-wrp">
                                    <p class="">
                                        Our cost-effective charter bus rental Illinois drivers are well-mannered, friendly and professional. They arrive timely and drop off at your destination timely.                                
                                    </p>
                                </div>
                            </div>
    
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 block-3 block-feature">
                        <div class="content-wrp set-min-height">
                            <div class="img-wrp icon-wrp">
                                <img src="{{ Vite::asset('resources/images/services/icons/accommodation.png') }}" alt="" class="img-fluid ">
                            </div>
                            <div class="text-content-wrp text-center">
                                <div class="title-wrp">
                                    <h5 class="title">Accommodation</h5>
                        </div>
                                <div class="text-wrp">
                                    <p class="">
                                        We have different vehicles for several passengers and your personal needs. If you want to travel in any particular vehicle, you can share your needs with us. We will be glad to assist you.                                 
                                    </p>
                                </div>
                            </div>
    
                        </div>
                    </div>

                    <div class="col-lg-12 text-center mt-5">
                        <div class="col-lg-8 col-md-10 col-12 mx-auto text-center">
                             <div class="text-content">
                                 <p>
                                     <i>Don't look further, as our limo shuttling services are affordable, comfortable and efficient. </i>
                                 </p>
                             </div>
                        </div>
                     </div>
                
                </div>
            </div>

        </div>
    </div>








    
@endsection
