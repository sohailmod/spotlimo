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
                                    Interstate Transportation Services 
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
                                Most Affordable Interstate Car Services in Illinois 
                             </h4>
                         </div>
                         <div class="text-content">
                             <p>
                                Spot limo offers interstate services with an inexpensive, prompt, and hassle-free ride. If you are at Midway or O’Hare airport and looking for a Limo service to get to your desired location, then you are at the right place.
                             </p>
                             <p>
                                We will take you into Illinois and its surrounding at the most reasonable rates and on time. No matter if your flight leaves early or late, we will pick you up and drop you off timely.  
                             </p>
                             <p>
                                Our professional chauffeurs can take you anywhere in Illinois at any time of the day. Spot Limo has 24 hours reservations and dispatches specialists to help you arrange the required car services 24/7. You can choose the desired vehicle for your next trip, as your comfort matters the most.   
                             </p>
                             <p>
                                So, don’t wait; call us now and be on your way today.
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
                <div class="row ">
                    <div class="title-wrp col-lg-12 text-center">
                        <h4 class="title  py-3">
                            Best Vehicles for Interstate Limo Services
                        </h4>
                    </div>
                    <div class="col-lg-6 mx-auto content-wrp">
                            <div class="text-wrp">
                                <div class="text-content">
                                    <p class="text-justify">
                                        We have the best vehicles, including Sedans and SUVs, to make your interstate trip relaxed and memorable. All our vehicles are luxurious, spacious, and comfortable. In fact, our vehicles have a 4-wheel drive that makes them reliable even during bad weather.
                                    </p>
                                    <p class="text-justify">
                                        We prefer SUVs for interstate travel compared to Sedans and Limos are they are faster than other vehicles.
                                    </p>
                                    <p class="text-justify">
                                        Spot limo is the best interstate Limo service provider and stands out from the crowd as we have professional chauffeurs and technically advanced vehicles.
                                    </p>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6 mx-auto content-wrp">
                            <div class="text-wrp">
                                <div class="text-content ">
                                    <p class="text-justify">
                                         Besides, we pay complete attention to every detail our customers provide to give them a hassle-free experience within their affordability.
                                    </p>
                                    <p class="text-justify">
                                        Our luxurious vehicles suit business, special occasions, and executive travel. Our chauffeurs are well-mannered, extraordinarily knowledgeable, and professionally dressed. 
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
            <div class="row ">
                <div class="col-lg-7 content-wrp">
                    <div class="text-wrp">
                        <div class="title-wrp">
                            <h4 class="title">
                               Book Interstate Ride with Us at the Most Amazing and Reasonable Rates
                            </h4>
                        </div>
                        <div class="text-content">
                            <p>
                               We are available 24/7 with our exclusive car range, and we can go anywhere in Illinois and its suburbs. We are a popular and trustworthy last minutes Illinois car service from Midway or O’Hare airport.  
                            </p>
                            <p>
                               The most incredible thing about our interstate limo service is that our rates are cheaper than other interstate transportation service providers. We are open 24 hours a day and welcome last-minute O’Hare or Midway Airport Limo services.  
                            </p>
                            <p>
                               We provide long-distance rides to other cities in Illinois, including Ohio, Lowa, Indiana, Minnesota, Missouri, and Wisconsin. 
                            </p>
                            <p>
                               So, do you want to travel interstate without worrying about car rental charges and expenses? You can book your ride in advance or get our free quoted offer now.
                            </p>
                         
                        </div>
                     
                    </div>
            </div>
             <div class="col-lg-5 img-wrp">
                 <div class="img-intro swap-img">
                    <img src="{{ Vite::asset('resources/images/banners/services-22.png') }}" alt="" class="img-fluid">
                 </div>
             </div>
             
            </div>

        </div>
    </div>


    









  


    
@endsection
