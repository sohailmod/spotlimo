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
                                    Meet & Greet Airport Services 
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
                                Meet and Greet Airport Services Illinois
                             </h4>
                         </div>
                         <div class="text-content">
                             <p>
                                Whether you are flying to Midway Airport, O'Hare Airport or any other airport, we offer top-quality airport meet-and-greet services at the most affordable rates. We meet guests as soon as they arrive at the airport and can take you anywhere safely and comfortably. As a part of our meet and greet service, our professional <a href="{{  route('chauffeur-services') }}"><i>chauffeurs</i></a> can help you with any baggage. 
                             </p>
                             <p>
                                Whether you are traveling with heavy or light luggage, our driving experts ensure that every piece of luggage is placed safely into the vehicle. Our meet-and-greet services are all about flawless and personalized assistance.
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
    <div class="container-md spot-limo-intro-block">
        <div class="about-us-content-block content-block">
            <div class="row align-items-xl-center">
                <div class="col-lg-6 content-wrp">
                        <div class="text-wrp">
                            <div class="title-wrp">
                                <h4 class="title">
                                    Here’s the list of services we ensure
                                </h4>
                            </div>
                            <div class="text-content">
                                <div class="list">
                                    <ul>
                                        <li class="list-items" style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                            A personalized text message with contact information.
                                        </li>
                                        <li class="list-items" style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                            Our chauffeurs will greet you at baggage upon your arrival at the airport
                                        </li>
                                        <li class="list-items" style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                            Our professional drivers can assist you with all your luggage
                                        </li>
                                        <li class="list-items" style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                            Escorting to the vehicle and much more
                                        </li>
                                    </ul>
                                </div>

                                <p>
                                    Our chauffeurs will meet you at the baggage with a personalized last name written on the board. We will also send you a text message, and contact information as the process will make the meet and greet process easier for you at the <a href="{{  route('airport-services') }}"><i>airport</i></a>.
                                 </p>

                                 <p>
                                    So, choose us and let us make the 'Meet and Greet' procedure at the airport simpler for you. 
                                 </p>
                            </div>
                        </div>
                </div>
             <div class="col-lg-6 img-wrp">
                 <div class="img-intro swap-img">
                    <img src="{{ Vite::asset('resources/images/banners/about-us-intro.png') }}" alt="" class="img-fluid">
                 </div>
             </div>
            </div>

        </div>
    </div>

    <div class="container-fluid px-0 services-why-spotlimo"  style="background-image: url('{{ Vite::asset('resources/images/banners/services-airport-why.png') }}')">
        <div class="container-md py-4">
            <div class="about-us-content-block content-block">
                <div class="row">
                    <div class="title-wrp col-lg-12 ps-4">
                        <h4 class="title">
                            Cost-Effective Meet and Greet Service Illinois 
                        </h4>
                    </div>
                    <div class="col-lg-6 mx-auto content-wrp">
                            <div class="text-wrp">
                                <div class="text-content">
                                    <p class="text-justify">
                                        We offer to meet and greet service at Midway Airport, O'Hare Airport or any other private airport at the most economical rates and without any trouble. After being satisfied with the name board showing your company's name or logo, you will be conducted from multiple checkpoints.
                                    </p>
                                    <p class="text-justify">
                                        Our professional chauffeurs reach the airport before your arrival and take care of additional airport assistance. 
                                    </p>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6 mx-auto content-wrp">
                            <div class="text-wrp">
                                <div class="text-content ">
                                    <p class="text-justify">
                                        Besides, we can accommodate your friends, family and colleagues upon your request.
                                    </p>
                                    <p class="text-justify">
                                        We offer top-quality fleets to make your experience to and from the airport easy and comfortable. So, if you have any specific requirements for our limo services, share them with us. We will provide our services as per your preferences and personal needs.
                                    </p>
                                    <p class="text-justify">
                                        Make your <a class="text-light" href="{{  route('home') }}/#bookingBlock"><i>reservation in advance</i></a> to avoid last-minute ride cancellation. 
                                    </p>
                            
                                </div>
                               
                            </div>
                    </div>
                
                </div>
    
            </div>

        </div>
    </div>


    <div class="container-fluid px-0 ideal-travel-partner-block mt-0">
        <div class="container-md py-4">
            <div class="about-us-content-block content-block">
                <div class="row  flex-lg-row flex-column-reverse">
                    <div class="col-lg-6 content-wrp">
                        <div class="text-wrp">
                            <div class="title-wrp">
                                <h4 class="title">
                                    Why Do You Need Our Meet and Greet Airport Service?
                                </h4>
                            </div>

                            <div class="text-content">
                                <div>
                                    <p class="mb-0">
                                        Booking a ride to and from the airport and carrying luggage with you is a daunting process. Spot Limo can make airport meet and greet services hassle-free for you by helping you leave the airport as soon as possible.                                      
                                    </p>
                                    <p>
                                        Besides, our meet and greet services are imperative if you need an extra hand with heavy luggage, especially a mom with kids, tourists and older people. 
                                    </p>
                                    <p>
                                        So, don't you deserve extra peace of mind after the hectic tour? 
                                        <b>Surely yes</b>
                                    </p>
                                    <p>That’s why; Spot Limo is available to help you.</p>
                                </div>
                           
                            </div>
                          
                        </div>
                    </div>
                    <div class="col-lg-6 img-wrp">
                        <div class="img-intro swap-img">
                            <img src="{{ Vite::asset('resources/images/banners/about-us-ideal.png') }}" alt="" class="img-fluid">
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
                            Make an Online Reservation and Enjoy Our Meet & Greet Services Without any Hassle.
                        </h4>
                    </div>
                    <div class="col-lg-6 content-wrp px-0">
                            <div class="text-wrp">
                                <div class="text-content ">
                                    <p class="text-justify">
                                        We have hired well-trained chauffeurs with years of expertise and training. That's why; they know how to perform their task flawlessly. 
                                    </p>
                                    <p class="text-justify">
                                        WAfter your arrival, you can also take advantage of hot or cold drinks and light refreshments. 
                                    </p>
                                    <p class="text-justify">
                                        So, <a class="text-light" href="{{  route('contact') }}"><i>count on us</i></a> for exceptional Meet and Greet services anywhere in Illinois and nearby.
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
