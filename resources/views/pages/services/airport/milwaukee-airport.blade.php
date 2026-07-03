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
                                    Milwaukee International Airport in Chicago                                 </h1>
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
                                Professional Milwaukee International Airport Chicago Limo Services
                            </h4>
                         </div>
                         <div class="text-content">
                             <p>
                                At Spotlimo, we understand that your journey doesn't end when you land. That's why we offer top-notch airport transportation services to ensure a seamless and stress-free experience for our valued passengers. 
                            </p>
                             <p>
                                Whether you need transport from the Milwaukee International Airport or to the airport, we got you covered with our reliable and customer-centric Chicago limousine service. 
                            </p>
                            <p>Call us now if you need top-notch limo service ‘To and From’ Milwaukee International Airport.
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

    <div class="to-and-from-services container-fluid">
        <div class="container-lg">
            <div class="container-wrp">
                <div class="row">
                    <div class="col-lg-12 text-center">
                       <div class="col-lg-8 col-md-10 col-12 mx-auto text-center">
                            <div class="title-wrp">
                                <h4 class="title">
                                    What Makes Us The Best Limo Service Provides In Chicago For Milwaukee International Airport                                 </h4>
                            </div>
                            <div class="text-content">
                                <p>
                                    <i>See why our limo service stands out as the top choice for transportation to and from Milwaukee International Airport.</i>
                                </p>
                            </div>
                       </div>
                    </div>
                    <div class="col-lg-4 col-md-4 block-1 block-feature">
                        <div class="content-wrp">
                            <div class="img-wrp icon-wrp">
                                <img src="{{ Vite::asset('resources/images/services/icons/on-time.png') }}" alt="" class="img-fluid ">
                            </div>
                            <div class="text-content-wrp text-center">
                                <div class="title-wrp">
                                    <h5 class="title">Extensive Coverage</h5>
                        </div>
                                <div class="text-wrp">
                                    <p class="">
                                        Whether you're traveling from the Milwaukee International Airport to anywhere in Illinois or vice versa, simply book your favorite fleet online, and it's done. Also, we offer flexible hourly service, so you can book our services for as long as you want.                                    </p>
                                </div>
                            </div>
    
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 block-2 block-feature">
                        <div class="content-wrp">
                            <div class="img-wrp icon-wrp">
                                <img src="{{ Vite::asset('resources/images/services/icons/hourly.png') }}" alt="" class="img-fluid ">
                            </div>
                            <div class="text-content-wrp text-center">
                                <div class="title-wrp">
                                    <h5 class="title">Professional Chauffeurs </h5>
                        </div>
                                <div class="text-wrp">
                                    <p class="mb-1">
                                        Whether assisting with luggage, offering helpful local insights, or providing a warm and welcoming atmosphere, our well-trained chauffeurs go the extra mile to cater to your specific needs. They understand the importance of hospitality and personalized attention. 
                                    </p>
                                    {{-- <p class="mb-0">
                                        Our per-hour limo rental services can offer ultimate satisfaction as we aim to provide you with a comfortable trip within your affordability.                                     
                                    </p> --}}
                                </div>
                            </div>
    
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 block-3 block-feature">
                        <div class="content-wrp">
                            <div class="img-wrp icon-wrp">
                                <img src="{{ Vite::asset('resources/images/services/icons/point-to-point.png') }}" alt="" class="img-fluid ">
                            </div>
                            <div class="text-content-wrp text-center">
                                <div class="title-wrp">
                                    <h5 class="title">Economical Rates </h5>
                        </div>
                                <div class="text-wrp">
                                    <p class="">
                                        At SpotLimo, we believe that luxury should be accessible to all, which is why we offer economical pricing that fits everyone’s budget. That’s why we are known as the best taxi alternative for the Milwaukee International Airport. 
                                    </p>
                                </div>
                            </div>
    
                        </div>
                    </div>
                
                </div>
            </div>

        </div>
    </div>

    <div class="container-md personalised-limo-block mb-3">
        <div class="about-us-content-block content-block">
            <div class="row align-items-xl-center flex-lg-row flex-column-reverse">
                <div class="col-lg-6 img-wrp">
                    <div class="img-intro">
                       <img src="{{ Vite::asset('resources/images/banners/about-us-personalised.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 content-wrp">
                        <div class="text-wrp">
                            <div class="title-wrp">
                                <h4 class="title">
                                    We Will Take You There, On Time and in Style
                                </h4>
                            </div>
                            <div class="text-content">
                                <p>
                                    Traveling to or from the Milwaukee Airport could be hectic due to traffic congestion on the route. But choosing SpotLimo professional Chicago Limo services could be your rescuing angle. 
                                </p>
                                <p>
                                    Our well-trained chauffeurs know the easiest routes and professionally wind through the busiest streets of Chicago to let you reach the airport on time. While ensuring timely arrival, we also pay attention to the class and comfort of our clients.                                 </p>
                                <p>
                                    Above all, our Limo services in Chicago won’t charge hefty amounts but never let you compromise comfort and professionalism. Trust as your travel partner for Milwaukee Airport, and you won’t regret it!                                 </p>
                            </div>
                  
                        </div>
                </div>
             
            </div>

        </div>

    </div>

    <div class="container-fluid px-0 services-why-spotlimo book-limo"  style="background-image: url('{{ Vite::asset('resources/images/banners/book-limo-services.png') }}')">
        <div class="container-md py-4">
            <div class="about-us-content-block content-block">
                <div class="row align-items-xl-center p-4">
                    <div class="title-wrp col-12 px-0">
                        <h4 class="title">
                            Convenience at Your Fingertips With Online Limo Service in Chicago                         </h4>
                    </div>
                    <div class="col-lg-6 content-wrp px-0">
                            <div class="text-wrp">
                                <div class="text-content ">
                                    <p class="text-justify">
                                        Booking your airport transportation with Spotlimo is quick and hassle-free.                                    </p>
                                    <p class="text-justify">
                                        Our user-friendly online platform allows you to manage your bookings online, track your chauffeur's location, and effortlessly make any necessary changes to your itinerary.                                    </p>
                                    <p class="text-justify">
                                        So, book your ride today and let Spotlimo take care of your airport transportation needs at Milwaukee International Airport, ensuring a seamless and enjoyable travel experience from start to finish.                                    </p>
                            
                            <p class="text-justufy">Don't wait, contact us now!</p>
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
