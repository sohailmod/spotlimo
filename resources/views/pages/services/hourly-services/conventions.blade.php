@extends('layouts.app')

@section('content')

    <div class="w-100 hero-section-wrp">
        <div class="hero-content-wrp inner-page">
            <div class="img-wrp">
                <div class="img-hero" style="background-image: url('{{ Vite::asset('resources/images/banners/hero-img-exe-tra.png') }}')">
          
                    <div class="hero-text-content-wrp container-md">
                        <div class="text-center col-12   ">
                            <div class="hero-title-wrp">
                                <h1>
                                    <span>Spot Limo</span>
                                    Convention Transportation Services
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
                    <img src="{{ Vite::asset('resources/images/banners/services-19.png') }}" alt="" class="img-fluid">
                 </div>
             </div>
             <div class="col-lg-6 content-wrp">
                     <div class="text-wrp">
                         <div class="title-wrp">
                             <h4 class="title">
                                Have the Most Economical Hourly Convention Transportation Services in Illinois
                             </h4>
                         </div>
                         <div class="text-content">
                             <p>
                                Spot Limo offers hourly Convention Transportation and management limousine services for conventions and related events at the most reasonable rates without compromising quality standards. 
                             </p>
                             <p>
                                If your company is holding a convention or planning to attend one, contact us now, as we can take care of all your convention transportation needs by considering all major details.
                             </p>
                             <p>
                                Our <a href="{{ route('chauffeur-services')}}"><i>professional chauffeurs</i></a> and licensed drivers can take you and all your participants to the convention at the pre-decided scheduled time. 
                             </p>
                             <p>
                                We will designate skilled chauffeurs, prompt services, exact routing, and a classy limousine for your timely transportation to the convention. Our limo chauffeurs are discreet, well-mannered, respectful, and punctual. We have trained them to act gently and maintain a professional attitude. 
                             </p>
                             <p>
                                Moreover, our <a href="{{ route('executive-transport')}}"><i>executive car service</i></a> in Illinois is perfect for your trip to the convention and other corporate events. 
                             </p>
                             <p>
                                You can contact us anytime or visit our website to discover our quoted offers according to your requirements.
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

    <div class="container-fluid px-0 services-why-spotlimo"  style="background-image: url('{{ Vite::asset('resources/images/banners/services-airport-why-2.png') }}')">
        <div class="container-md py-4">
            <div class="about-us-content-block content-block">
                <div class="row ">
                    <div class="title-wrp col-12">
                        <h4 class="title text-center py-3">
                            Group Limo Service Illinois to the Convention and Conference Centre
                        </h4>
                    </div>
                    <div class="col-lg-6 content-wrp">
                            <div class="text-wrp">
                                <div class="text-content">
                                    <p class="text-justify">
                                        Are you looking for group transportation to a business event in Illinois? In that case, our reliable hourly limo service ensures all your group members reach the desired destination safely and on time. 
                                    </p>
                                    <p class="text-justify">
                                        You don’t need to drive on your own or pay considerably for average transportation. You can travel in our top-class vehicles to your convention and conference center at the most competitive rate.
                                    </p>
                                  
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6 content-wrp">
                            <div class="text-wrp">
                                <div class="text-content ">
                                    <p class="text-justify">
                                        Our cozy vans, mini buses, and SUVs can accommodate up to 20 passengers. Also, our chauffeurs follow GPS locations and choose the safest and quickest route to your desired location.
                                    </p>
                                    <p class="text-justify">
                                        If you want to ride back to your home, office, hotel, airport, or any other place, you can make your reservation in advance to avoid catching a bus, waiting for a taxi, or ride cancellation.
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
                                    Save Your Time, Money and Book Our Hourly Limo Service Today 
                                </h4>
                            </div>
                            <div class="text-content">
                                <p>
                                    You can request an online quotation or call us anytime, as our customer support team is available 24 hours a day to assist you. You can also make an online reservation by filling out the online <a href="{{ route('home')}}#bookingBlock"><i>form</i></a> on the website. 
                                </p>
                                <p>
                                    We know transportation organizations might be challenging for you. But don’t worry; we ensure 24/7 availability to resolve all your queries related to our limo rental services.
                                </p>
                                <p>
                                    Trust us; our quality services will exceed your expectations. Moreover, our chauffeurs will treat you and your business client with respect. 
                                </p>
                            </div>
                         
                        </div>
                </div>
             <div class="col-lg-6 img-wrp">
                 <div class="img-intro swap-img">
                    <img src="{{ Vite::asset('resources/images/banners/services-16.png') }}" alt="" class="img-fluid">
                 </div>
             </div>
            </div>

        </div>

    </div>
    
@endsection
