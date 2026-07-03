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
                                    O'Hare Airport In Chicago
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
                 <div class="img-intro ">
                    <img src="{{ Vite::asset('resources/images/banners/services-1.png') }}" alt="" class="img-fluid">
                 </div>
             </div>
             <div class="col-lg-6 content-wrp">
                     <div class="text-wrp">
                         <div class="title-wrp">
                             <h4 class="title">
                                Reliable O'Hare Airport Limo Service

                             </h4>
                         </div>
                         <div class="text-content">
                             <p>
                                A fleet of sleek or glistening limousines awaits your arrival at O'Hare Airport in Chicago. Because we understand the importance of punctuality, especially in airport transportation. So, once you book our reliable Chicago Limo services, we are liable for making sure you catch your flight timely or get the deluxe Limo available after a tiring flight.                              </p>
                             <p>
                                You can book our O'Hare Airport Limo services by calling or visiting our website, as we are available 24/7 to assist you. We offer secure limo service and guarantee your safety with the clean driving record of our Chauffeurs, who are trained, licensed, and knowledgeable.
                            </p>
                        
                             <p>
                                From the moment you book with us to the final farewell, we are dedicated to surpassing your expectations. 
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
                                    Our Hourly Basis O'Hare Airport Limo Service
                                </h4>
                            </div>
                            <div class="text-content">
                                <p>
                                    If you are looking for a luxurious limo service hourly for executive needs, you are on the right page. SpotLimo takes pride in serving you in the best possible ways, covering all your requirements. 
                                </p>
                                <p>
                                    We understand customers' requirements, no matter for a business trip, a celebration of a memorable day, or any other purpose. Our hourly O'Hare Airport service is a testament to our customer-centric approach. It is a small gesture highlighting our commitment to putting our customers at the forefront of everything we do.
                                </p>
                                <p>
                                    You can book your desired fleet by making an advanced booking before someone else reserves it. Take advantage of the opportunity to ensure your preferred vehicle is available for your upcoming trip.
                                </p>
                            </div>
                        
                        </div>
                </div>
             <div class="col-lg-6 img-wrp">
                 <div class="img-intro swap-img">
                    <img src="{{ Vite::asset('resources/images/banners/services-17.png') }}" alt="" class="img-fluid">
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
                            Why Our Chicago Limo Services For O'Hare Airport?
                        </h4>
                    </div>
                    <div class="col-lg-6 content-wrp">
                            <div class="text-wrp">
                                <div class="text-content">
                                    <p class="text-justify">
                                        First thing first, we specialize in O'Hare Airport transportation, ensuring a smooth and hassle-free experience from the moment you arrive. Our drivers are well-versed in the airport's layout, procedures, and traffic patterns, guaranteeing efficient transfers between the airport and your desired destination.
                                    </p>
                                    <p class="text-justify">
                                        We understand the importance of punctuality, particularly regarding air travel. With our O'Hare Airport limo services, you can rely on our commitment to timeliness. Our drivers are adept at navigating through traffic and choosing the most efficient routes, ensuring you reach your destination promptly and without unnecessary delays.
                                    </p>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6 content-wrp">
                            <div class="text-wrp">
                                <div class="text-content ">
                                    <p class="text-justify">
                                        Lastly, our vehicles undergo regular maintenance and inspections to ensure their optimal condition. Additionally, they often come equipped with advanced safety features, providing peace of mind during airport transportation.
                                    </p>
                                 <p class="text-justify">Hire Us Now </p>
                                    <p class="text-justify">
                                        Call us at <a href="tel:+1{{str_replace('-','',theme_options()->where('key', 'hotline')->first()->value)}}" class="text-light"><i>{{ theme_options()->where('key', 'hotline')->first()->value }}</i>
                                        </a> or book your ride online.
                                        {{-- Don’t wait; call us at <a href="tel:+1{{str_replace('-','',theme_options()->where('key', 'hotline')->first()->value)}}" class="text-light"><i>{{ theme_options()->where('key', 'hotline')->first()->value }}</i>
                                        </a> or book your ride online.  --}}
                                    </p>
                            
                                </div>
                              
                            </div>
                    </div>

                    <div class="col-12 my-2">
                        <div class="bookNow-btn-wrp text-center">
                            {{-- <div class="title-wrp">
                                <h3 class="mb-0">
                                    Book Your 
                                </h3>
                            </div> --}}
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


    








    
@endsection
