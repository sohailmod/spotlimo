@extends('layouts.app')

@section('content')

    <div class="w-100 hero-section-wrp">
        <div class="hero-content-wrp inner-page">
            <div class="img-wrp">
                <div class="img-hero" style="background-image: url('{{ Vite::asset('resources/images/banners/hero-img-airtport-services.png') }}')">
          
                    <div class="hero-text-content-wrp container-md">
                        <div class="text-center col-12   ">
                            <div class="hero-title-wrp">
                                <h1>
                                    <span>Spot Limo - Airport Services</span>
                                    Gary International Airport In Chicago                                 </h1>
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
                    <img src="{{ Vite::asset('resources/images/banners/services-2big.png') }}" alt="" class="img-fluid">
                 </div>
             </div>
             <div class="col-lg-6 content-wrp">
                     <div class="text-wrp">
                         <div class="title-wrp">
                             <h4 class="title">
                                Trust the Professionals at Gary International Airport 
                            </h4>
                         </div>
                         <div class="text-content">
                             <p>
                                Experience luxury and convenience like never before with our exceptional limousine service in Chicago, explicitly tailored for Gary International Airport, Chicago.                             </p>
                             <p>
                                Whether you are traveling for business or pleasure, we are here to make your airport transportation experience unforgettable. At SpotLimo, we understand that your journey begins when you leave your home. 
                            </p>
                            <p>That is why we aim to provide a seamless and fun-packed travel experience from door to door or within the winding corridors of the airport, as we also offer a shuttle service. Our professional chauffeurs are committed to ensuring comfort, safety, and satisfaction throughout your Limo journey. 
                            </p>
                            <p>And do not worry about any delays in your schedule; we are here to accommodate you in the best possible. </p>
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

    <div class="container-fluid px-0 services-why-spotlimo"  style="background-image: url('{{ Vite::asset('resources/images/banners/services-airport-why-2.png') }}')">
        <div class="container-md py-4">
            <div class="about-us-content-block content-block">
                <div class="row ">
                    <div class="title-wrp col-12">
                        <h4 class="title text-center py-3">
                            We Got You The Offers Beyond Your Expectation 
                        </h4>
                    </div>
                    <div class="col-lg-6 content-wrp">
                            <div class="text-wrp">
                                <div class="text-content">
                                    <p class="text-justify">
                                        At SpotLimo, we provide to and from airport transportation services for Gray International Airport in multiple offers. Whether you need a limo for selected hours for visiting various places or for a door-to-door journey, we are here to serve you the best. 
                                    </p>
                                    <p class="text-justify">
                                        In hourly services, our professional chauffeurs will be at your service to take you wherever you want in Illinois. Besides, our limos are deluxe and comfiest, making you as comfortable as sitting in your TV lounge. 
                                    </p>
                                    <p>So, forget about the tiredness of travel and get in touch with our customer care representative to find the best offer for yourself. 
                                    </p>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6 content-wrp">
                            <div class="text-wrp">
                                <div class="text-content ">
                                    <p class="text-justify">
                                        When you start your trip from Gary airport after long hour tiring flight, nothing pleases you more than finding a private transfer service when chauffeurs wait for you outside the airport before your arrival. 
                                    </p>
                                    <p class="text-justify">
                                        So, don’t share a shuttle or skip taxi rides because we don’t make multiple stops and take you to your desired destination on time. We will also help you with your luggage as you we want you to sit back, power up your phone and enjoy your journey.
                                    </p>
                                    
                            
                                </div>
                              
                            </div>
                    </div>

                    <div class="col-12 my-2">
                        <div class="bookNow-btn-wrp text-center">
                            <p class="text-white">
                                <b>Gladly, our spacious cars and SUVs can carry up to 6 passenger so you don’t need to book multiple rides for your guests. </b>
                            </p>
                       
                        </div>
                    </div>
                
                </div>
    
            </div>

        </div>
    </div>

    <div class="container-md personalised-limo-block">
        <div class="about-us-content-block content-block">
            <div class="row flex-lg-row flex-column-reverse">
                <div class="col-lg-6 content-wrp">
                        <div class="text-wrp">
                            <div class="title-wrp">
                                <h4 class="title">
                                    Step into Unmatched Luxury and Unleash Your Senses
                                </h4>
                            </div>
                            <div class="text-content">
                                <p>
                                    At SpotLimo, we believe that every moment of your journey should be exceptional. That'sThat's why we have spared no expense in creating an interior that is as captivating as it is comfortable. We invite you to enter our unmatched luxury world and indulge in the ultimate limousine experience.                                </p>
                                <p>
                                    Our limousines are not just vehicles. They are elegant cocoons designed to delight your senses. But the luxury does not end there. Our limousines are equipped with additional amenities to make your journey truly extraordinary. 
                                </p>
                                <p>
                                    Enjoy the modern marvels of technology with state-of-the-art audio and video systems, or do you need to charge your devices? Fear not; our limousines feature every possible amenity to make your trip delightful. 
                                </p>
                            </div>
                          
                        </div>
                </div>
             <div class="col-lg-6 img-wrp">
                 <div class="img-intro swap-img ">
                    <img src="{{ Vite::asset('resources/images/banners/services-19.png') }}" alt="" class="img-fluid">
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
                    <img src="{{ Vite::asset('resources/images/banners/services-3big.png') }}" alt="" class="img-fluid">
                 </div>
             </div>
             <div class="col-lg-6 content-wrp">
                     <div class="text-wrp">
                         <div class="title-wrp">
                             <h4 class="title">
                                We are the Best Taxi Alternative at Gray International Airport
                            </h4>
                         </div>
                         <div class="text-content">
                             <p>
                                We are available 24/7 ‘To and From’ Gray International Airport. Our chauffeurs have strong connectivity with the dispatch, and they reach the airport before the landing of flights and guests. In addition, they always ask about your preferred route or follow the most direct route to avoid traffic.
                            </p>
                             <p>
                                Above all, our airport limo service is convenient and affordable at Gray International Airport. You can also count on us for last-minute airport services because our fleets can arrange your dream car even at short notice.
                            </p>
                             <p>
                                Moreover, if you want to book a ride for your friends, family, and colleagues, you are more than welcome because we will treat them as our chief guests. Our customer reviews, and testimonials prove that we are the best limo service provider in Illinois and its surrounding.
                            </p>
                            <p>Trust us, and you will not get tired of thanking us! 
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
