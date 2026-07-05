@extends('layouts.app')

@section('customStyles')
<style>
    .spot-limo-intro-block,
    .personalised-limo-block,
    .ideal-travel-partner-block,
    .about-us-content-block,
    .about-us-content-block .text-wrp,
    .about-us-content-block .text-content,
    .about-us-content-block .text-content p,
    .about-us-content-block .text-content li {
        color: #f8f4e8 !important;
    }

    .about-us-content-block .title-wrp .title,
    .about-us-content-block h1,
    .about-us-content-block h2,
    .about-us-content-block h3,
    .about-us-content-block h4 {
        color: #ffffff !important;
    }

    .about-us-content-block a,
    .about-us-content-block a i {
        color: #f0d28a !important;
    }
</style>
@endsection

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
                                    About Us
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
                                 Spot Limo Offers Top Rated Limousine and Car Services in Chicago 
                             </h4>
                         </div>
                         <div class="text-content">
                             <p>
                                 We are the top-rated and renowned limo service company in Chicago for all good reasons. Customers admire and trust our car and limo services throughout the Chicago area. 
                             </p>
                             <p>
                                 Our top cars, professional drivers, passionate chauffeurs, and most competitive rates make us an ideal choice to serve you and your guests. That’s why; we have become a reliable and trustworthy name for executive transportation in the Chicago area. 
                             </p>
                             <p>
                                 You can always find trendy magazines, beverages, and newspapers inside our cars to make your travel enjoyable.  
                             </p>
                             <p>
                                 So, count on us for hassle-free trips because our rates are so low you won’t think twice.
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
                                    Personalized Limo Services for Your Special Occasions 
                                </h4>
                            </div>
                            <div class="text-content">
                                <p>
                                    Whether you want luxurious car service for weddings, anniversaries, or any other special occasion, you can get our limo service to and from Chicago anytime. We know how to handle large or small groups or tend to your individual needs from convention centers, hotels, and marriage halls. 
                                </p>
                                <p>
                                    No worries, if you want to enjoy a Chicago trip at reasonable rates, you can call us, and we will show you the beauty of Chicago and its surroundings within your budget.
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

    <div class="container-fluid px-0 ideal-travel-partner-block">
        <div class="container-md py-4">
            <div class="about-us-content-block content-block">
                <div class="row align-items-xl-center">
                    <div class="col-lg-6 img-wrp">
                        <div class="img-intro">
                            <img src="{{ Vite::asset('resources/images/banners/about-us-ideal.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 content-wrp">
                            <div class="text-wrp">
                                <div class="title-wrp">
                                    <h4 class="title">
                                        What Makes Spot Limo Your Ideal Travel Partner? 
                                    </h4>
                                </div>
                                <div class="text-content">
                                    <div class="list">
                                        <ul>
                                            <li class="list-items" style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                                We offer limo car services at economical rates. 
                                            </li>
                                            <li class="list-items" style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                                We have expert chauffeurs and professional drivers.
                                            </li>
                                            <li class="list-items" style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                                Our company only hires drivers with the Professional Chauffeur Livery License.
                                            </li>
                                            <li class="list-items" style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                                We ensure 24/7 availability for all your special occasions without booking charges. 
                                            </li>
                                            <li class="list-items" style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                                Our GPS tracking policy ensures safe travel and security. 
                                            </li>
                                            <li class="list-items" style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                                You can have complete control of your destination with stepovers of your preference.
                                            </li>
                                            <li class="list-items" style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                                We comply with commercial Illinois security inspections. 
                                            </li>
                                            <li class="list-items" style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                                We capture our vehicles’ Commercial License Plates Movements using pre-built cameras. 
                                            </li>
                                            <li class="list-items" style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                                You can easily track customers’ flights to ensure timely pick and drop-off.
                                            </li>
                                            <li class="list-items" style="background-image:url('{{ Vite::asset('resources/images/other/list-check.png') }}');">
                                                We have vehicles with complete liability insurance protection. 
                                            </li>
                                        </ul>
                                    </div>
                                    <p>
                                        Making your drive the best is our responsibility. So contact us at <a href="tel:+1{{str_replace('-','',theme_options()->where('key', 'hotline')->first()->value)}}" class=""> <i>{{ theme_options()->where('key', 'hotline')->first()->value }}</i>
                                        </a> and have more fun with your favorite car. 
                                    </p>
                                </div>
                                <div class="bookNow-btn-wrp">
                                   <a href="{{ route('home') }}/#bookingBlock" class="btn btn-default btn-book-now btn-wide icon-btn">
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
