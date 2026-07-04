@extends('layouts.app')

@section('content')

    <div class="w-100 hero-section-wrp">
        <div class="hero-content-wrp inner-page">
            <div class="img-wrp">
                <div class="img-hero " style="background-image: url('{{ Vite::asset('resources/images/banners/hero-img-airtport-services.png') }}')">
          
                    <div class="hero-text-content-wrp container-md">
                        <div class="text-center col-12   ">
                            <div class="hero-title-wrp">
                                <h1>
                                    <span>Spot Limo - Airport Services</span>
                                    Midway Signature Airport in Chicago 

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
            <div class="row">
             <div class="col-lg-6 img-wrp">
                 <div class="img-intro mb-5 ">
                    <img src="{{ Vite::asset('resources/images/banners/services-1.png') }}" alt="" class="img-fluid">
                 </div>
             </div>
             <div class="col-lg-6 content-wrp mt-2">
                     <div class="text-wrp">
                         <div class="title-wrp">
                             <h4 class="title">
                                Taking You On The Cloud Nine Before Your Flight Take Off
                            </h4>
                         </div>
                         <div class="text-content">
                             <p>
                                Serving our customers with utmost dedication, we are passionate about delivering the best airport transport services. Whether you need to travel to Midway Signature Airport for a flight or need a car service for traveling from the airport to any region of Illinois after a long flight, be at ease.                             </p>
                             <p>
                                Because we are responsible for catering to your every need with our customer-centric services, at SpotLimo, we ensure disinfected and properly sanitized vehicles with our expert chauffeurs that reach you at your destination safely. 
                            </p>
                             <p>
                                Also, being the second largest airport in Chicago, Midway Airport is a hub of international and national flights, so you can face a little hassle finding a suitable vehicle. Pre-booking airport transfer services can save you from the unnecessary fatigue of finding any car. In addition, let's not forget the class and luxury of our Limousines in Chicago!                             </p>
                             <p>
                                You can pre-schedule your Midway Airport services with SpotLimo, as our professional chauffeurs will pick you up upon arrival.
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

    <div class="container-fluid px-0 services-why-spotlimo"  style="background-image: url('{{ Vite::asset('resources/images/banners/services-airport-why.png') }}')">
        <div class="container-md py-4">
            <div class="about-us-content-block content-block">
                <div class="row ">
                    <div class="title-wrp col-12">
                        <h4 class="title text-center py-3">
                            Your Trusted Travel Partner at Chicago Midway Airport For Legit Reasons 
                        </h4>
                    </div>
                    <div class="col-lg-6 content-wrp">
                            <div class="text-wrp">
                                <div class="text-content">
                                    <p class="text-justify">
                                        SpotLimo has established itself as a trusted partner for airport transportation in Chicago by providing exceptional services within Illions. We have served countless satisfied clients, earning a reputation for excellent customer service and reliability. Our commitment to providing a seamless travel experience has made us the go-to choice for discerning travelers seeking comfort and luxury.
                                    </p>
                                    <p class="text-justify">
                                        Also, our fleet comprises the latest models, and all are maintained to ensure a superior travel experience. Whether you prefer a Limo's sleekness or an SUV's spaciousness, we have the perfect vehicle to meet your needs and preferences. So, no matter if you are traveling alone, with your family, or as part of a corporate group, our airport limousine service in Chicago can be customized to accommodate your requirements. 
                                    </p>
                                    <p>Additionally, we offer a range of amenities and extras to make your journey even more enjoyable. Sit back, relax, and let us take care of the details.
                                    </p>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6 content-wrp">
                            <div class="text-wrp">
                                <div class="text-content ">
                                    <p class="text-justify">
                                        We are available 24/7 ‘To and From’ Midway airport. Our airport limo service is convenient and affordable at Midway airport. You can also count on us for last-minute airport services because our fleets can arrange your dream car even at short notice. 
                                    </p>
                                    <p class="text-justify">
                                        If you want to book a ride for your friends, family, and colleagues, you are more than welcome because we will treat them as our chief guests. 
                                    </p>
                                    <p class="text-justify">
                                        Our customer reviews and testimonials prove that we are the best limo service provider in Illinois and its surrounding.
                                    </p>
                            
                                </div>
                              
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
                                    Exceptional Midway Airport Limo Service for Executive Travel Needs                                </h4>
                            </div>
                            <div class="text-content">
                                <p>
                                    Experience luxury and convenience with our premier limousine services exclusively designed for Midway Signature Airport travelers. We understand that your journey begins and ends at the airport, and we are here to ensure that every step of the way is nothing short of exceptional.
                                </p>
                                <p>
                                    And the bonus is that our exclusive services are affordable and reliable. You do not need to pay extra for our luxurious limousine services as our charges are economical.
                                </p>
                                <p>
                                    To secure your spot in one of our elegant limousines, click the button below to access our easy-to-use online booking system. Our dedicated team is available 24/7 to assist you in creating a personalized journey that exceeds your expectations. 
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
             <div class="col-lg-6 img-wrp">
                 <div class="img-intro swap-img">
                    <img src="{{ Vite::asset('resources/images/banners/about-us-personalised.png') }}" alt="" class="img-fluid">
                 </div>
             </div>
            </div>

        </div>

    </div>

    








    
@endsection
