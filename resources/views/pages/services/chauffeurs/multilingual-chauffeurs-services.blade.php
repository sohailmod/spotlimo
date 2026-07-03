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
                                    Multilingual Chauffeurs Services in Chicago                                </h1>
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
                                Get Multilingual Chauffeurs Services in Chicago for a Stress-free Chicago Trip 
                            </h4>
                         </div>
                         <div class="text-content">
                             <p>
                                We understand how nerve-wracking the journey could be while traveling alone in a foreign country and facing a language barrier. Imagine if you need to ask or make last-minute changing in your destination; how will you convey it to your driver? 
                            </p>
                             <p>
                                Well, it could create a lot of hassle, so we provide multilingual chauffeur services. Our chauffeurs know more than one language and are trained to cater to your diverse needs. 
                            </p>
                            <p>Whether you need to make a last-minute change in your plan or need assistance in any other way, they are trained to serve you the best. 
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
                                    Language Is A No More Barrier To Your Comfort 
                                </h4>
                            </div>
                            <div class="text-content">
                                <p>
                                    Language barriers fade away as our chauffeurs communicate fluently in various languages, providing personalized assistance and a warm welcome to travelers from all over the world. 
                                </p>
                                <p>
                                    At SpotLimo, our chauffeur services cater to international travelers, ensuring a seamless experience as you explore the vibrant city of Chicago.
                                </p>
                                <p>
                                    From airport pickups to sightseeing tours, our team is dedicated to making your journey memorable. Explore Chicago's iconic landmarks, and travel in Chicago with the confidence of having a reliable and language-friendly chauffeur by your side. 

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

    {{-- <div class="container-fluid px-0 ideal-travel-partner-block">
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
    </div> --}}




    <div class="container-fluid px-0 services-why-spotlimo book-limo"  style="background-image: url('{{ Vite::asset('resources/images/banners/book-limo-services.png') }}'); background-position:center top;">
        <div class="container-md py-4">
            <div class="about-us-content-block content-block">
                <div class="row align-items-xl-center p-4">
                    <div class="title-wrp col-12 px-0">
                        <h4 class="title text-center">
                            Chauffeur Services That Provide the Global Convenience 
                        </h4>
                    </div>
                    <div class="col-lg-12 text-center content-wrp px-0">
                            <div class="text-wrp">
                                <div class="text-content ">
                                    <p class="text-justify">
                                        SpotLimo takes pride in providing the ultimate global convenience to all foreign travelers. We literally go above and beyond in facilitating our valued customers. That’s why we have provided this incredible service for our foreign travelers. 
                                    </p>
                                    <p class="text-justify">
                                        Our well-trained and licensed chauffeurs are hospitable and know multiple languages so that you won’t face any communication problems. Whether you're here for business or leisure, our multilingual chauffeur services offer you the comfort and ease you deserve.
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
