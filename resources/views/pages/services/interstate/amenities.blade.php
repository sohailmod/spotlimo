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
                                    Amenitites
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
                                The Most Versatile Limousine Company in Illinois 
                             </h4>
                         </div>
                         <div class="text-content">
                             <p>
                                From limousines to party buses and town cars, you name it, and we have them all.                                                       
                             </p>
                             <p>
                                We are renowned and most versatile limousine service providers in Illinois and accommodate maximum number of passengers by ensuring safety and comfort.
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



  

<div class="container services-grid-block-amenities our-services-section">
    <div class="services-content">
       
        <div class="services-cards">
            <div class="row">
                <div class="col-lg-6 ">
                    <div class="card-content">
                        <div class="col-lg-12 col-md-8 col-sm-10 col-12 service-card card-airport-tra px-0">
                            
                                <div class="img-wrp">
                                    <img src="{{ Vite::asset('resources/images/services/airport-tra.png') }}" alt="" class="img-fluid ">
                                </div>
                               
                            
                        </div>
                        
                        <div class="col-lg-10 col-sm-10 col-12 service-card card-chauffeur-tra ">
                            <div class="title-wrp">
                                <h4 class="title" ><span>Airport Pick-Up</span></h4>
                            </div>
                            <div class="sub-text-wrp">
                                <p class="mb-0">We ensure guaranteed timely <a href="/"><i>airport</i></a> shuttle service. Our expert and responsible chauffeurs provide safe and comfortable travel. We also offer VIP airport pick-up service and reach before the arrival of guests.We ensure guaranteed timely airport shuttle service. Our expert and responsible chauffeurs provide safe and comfortable travel. We also offer VIP airport pick-up service and reach before the arrival of guests.</p>
                                <p>
                                    You can book our limousine in person on a call or make an <a href="{{  route('home') }}#bookingBlock"><i>online reservation</i></a> in advance and forget about making last-minute reservations or catching a bus to travel around Illinois and the nearby area.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="card-content">
                        <div class="col-lg-12 col-md-8 col-sm-10 col-12 service-card card-airport-tra px-0">
                           
                                <div class="img-wrp">
                                    <img src="{{ Vite::asset('resources/images/services/chauffeur-tra.png') }}" alt="" class="img-fluid">
                                </div>
                               
                           
                        </div>
                        
                        <div class="col-lg-10 col-sm-10 col-12 service-card card-chauffeur-tra ">
                            <div class="title-wrp">
                                <h4 class="title" ><span>Special Occasions</span></h4>
                            </div>
                            <div class="sub-text-wrp">
                                <p class="mb-0">Having a vehicle according to your special occasion is convenient and joyous. We have well-equipped and top-quality limousines and party buses for your special occasions. Also, we can accommodate a maximum number of passengers so that you can take all your family members and friends to a birthday party, wedding, or any other special event.Do you need assistance in planning a special event? You can call us, and we will be pleased to assist you.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="card-content">
                        <div class="col-lg-12 col-md-8 col-sm-10 col-12 service-card card-airport-tra px-0">
                           
                                <div class="img-wrp">
                                    <img src="{{ Vite::asset('resources/images/services/executive-tra.png') }}" alt="" class="img-fluid">
                                </div>
                               
                            
                        </div>
                        
                        <div class="col-lg-10 col-sm-10 col-12 service-card card-chauffeur-tra ">
                            <div class="title-wrp">
                                <h4 class="title" ><span>Wedding Service</span></h4>
                            </div>
                            <div class="sub-text-wrp">
                                <p class="mb-0">We ensure perfection. We can go above and beyond to make your wedding day memorable by providing quality limousine and party bus services. We are well-known as the best wedding transportation service provider in Illinois due to our exceptional amenities, including special car seats and booster seats we offer.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="card-content">
                        <div class="col-lg-12 col-md-8 col-sm-10 col-12 service-card card-airport-tra px-0">
                          
                                <div class="img-wrp">
                                    <img src="{{ Vite::asset('resources/images/services/wedding-tra.png') }}" alt="" class="img-fluid">
                                </div>
                               
                          
                        </div>
                        
                        <div class="col-lg-10 col-sm-10 col-12 service-card card-chauffeur-tra ">
                            <div class="title-wrp">
                                <h4 class="title" ><span>Party Bus Packages</span></h4>
                            </div>
                            <div class="sub-text-wrp">
                                <p class="mb-0">We have uniquely designed party buses, and we can pick you up and drop you off at desired party destinations on time. Each party bus is built with a unique theme and contains all of the premium limousine amenities with an exceptional light show.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

          
              
         
                
            </div>
        </div>
    </div>
</div>

<div class="container-fluid px-0 ideal-travel-partner-block amenities-accordion-block">
    <div class="container">
        <div class="content-wrp">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-wrp">
                        <div class="title-wrp">
                            <h4 class="title">
                                What Makes Us Special?
                            </h4>
                        </div>

                        <div class="text-content">
                            <div>
                                <p class="mb-0">
                                    There are no limousine service providers in Illinois. We are a family-run company and treat all our clients like valued family members. You can try us once, and we assure you will not choose any other limousine service providers in Illinois.                                  
                                </p>
                                <p>
                                    Contact us, and we’ll make your trip unforgettable.   
                                </p>

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
                <div class="col-lg-7">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                We Are Proud of What We Offer
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <div class="text-content">
                            <p class="mb-0">
                                    We transport hundreds of clients daily at the highest level of service in the Illinois area. Our expert and courteous chauffeurs have extensive knowledge of Illinois and the nearby regions.
                            </p>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Highly Trained Chauffeurs
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="text-content">
                                        <p class="mb-0">
                                            We hire our chauffeurs with complete background checks, including their licenses and years of expertise.
                                        </p>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                We Provide 24 Hours Dispatch Assistance
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="text-content">
                                    <p class="mb-0">
                                        We have 24/7 phone coverage and are available every time to assist you.
                                    </p>
                            </div>
                            </div>
                        </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>

    </div>
    
</div>






  


    
@endsection
