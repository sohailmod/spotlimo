@extends('layouts.app')

@section('content')
    <div class="w-100 hero-section-wrp">
        <div class="hero-content-wrp inner-page">
            <div class="img-wrp">
                <div class="img-hero"
                    style="background-image: url('{{ Vite::asset('resources/images/banners/book-limo-services-3.png') }}')">

                    <div class="hero-text-content-wrp container-md">
                        <div class="text-center col-12   ">
                            <div class="hero-title-wrp">
                                <h1>
                                    <span>SpotLimo</span>
                                    Wedding Limo Service
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
                        <img src="{{ Vite::asset('resources/images/banners/services-23.png') }}" alt=""
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 content-wrp">
                    <div class="text-wrp">
                        <div class="title-wrp">
                            <h4 class="title">
                                Personalized and Luxury Wedding Limo Service in Chicago </h4>
                        </div>
                        <div class="text-content">
                            <p>
                                If you want to arrive at a wedding in full style or you are looking for a high-class
                                transportation service for any wedding event, then our wedding limo service in Chicago with
                                personalized features is perfect for you. </p>
                            <p>
                                Or, if you are planning a great entry for your wedding, consider the regal entry of arriving
                                and leaving the venue in full grace with our SpotLimo Limousine service in Chicago. We
                                understand that selecting a limo service for your wedding ceremony entails more than just a
                                standard transportation option. </p>
                            <p>
                                That’s why we go above and to deliver an unparalleled and unforgettable experience. Our
                                dedicated team will collaborate closely with you to ensure you make your entry as you’ve
                                dreamed of. Your unique desires and preferences are our top priority. </p>

                            <p>With our professional and sophisticated limo service, you don't just arrive at your wedding,
                                you make a grand entrance that leaves everyone in awe. So, let us handle it professionally
                                while you live those special moments to the fullest. </p>

                        </div>
                        <div class="bookNow-btn-wrp">
                            <a href="{{ route('home') }}#bookingBlock"
                                class="btn btn-default btn-book-now btn-wide icon-btn">
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
            <div class="row  flex-lg-row flex-column-reverse">
                <div class="col-lg-6 content-wrp">
                    <div class="text-wrp">
                        <div class="title-wrp">
                            <h4 class="title">
                                Experienced and Well-Trained Chauffeurs for Unmatched Wedding Transport Experience </h4>
                        </div>
                        <div class="text-content">
                            <p>
                                At SpotLimo, we take pride in our team of highly trained and professional Chauffeurs. Each
                                of them holds the necessary licenses and certifications from relevant authorities,
                                guaranteeing their expertise and reliability. </p>
                            <p>
                                But it doesn't stop there. They are true connoisseurs of driving luxury limo vehicles,
                                making your journey an exceptional experience. We understand the importance of Chauffeurs in
                                wedding transport. That's why our Chauffeurs are skilled drivers and the epitome of
                                sophistication. </p>
                            <p>
                                They are always appropriately dressed and maintain the decorum of a higher level of esteem
                                and prestige. Also, with years of Chauffeuring services under their belt, they have honed
                                their skills to perfection. </p>

                        </div>

                    </div>
                </div>
                <div class="col-lg-6 img-wrp mt-5">

                    <div class="img-intro swap-img">
                        <img src="{{ Vite::asset('resources/images/banners/services-2.png') }}" alt=""
                            class="img-fluid">
                    </div>

                </div>

            </div>

        </div>

    </div>


    <div class="container-fluid px-0 services-why-spotlimo"
        style="background-image: url('{{ Vite::asset('resources/images/banners/book-limo-services-4.png') }}')">
        <div class="container-md py-5">
            <div class="about-us-content-block content-block py-5">
                <div class="row ">
                    <div class="title-wrp col-12 px-0">
                        <h4 class="title text-center">
                            No More Financial Strain On Your Wedding Budget With Our Economical Yet Trusted Wedding
                            Transportation Services
                    </div>

                    <div class="text-center col-12   ">
                        <p class="text-light"><i>Your wedding day is a once-in-a-lifetime occasion, and we want to make it
                                extraordinary without compromising on your budget. Because your special day should be filled
                                with joy and cherished memories, not financial worries - that’s what we believe. </i></p>

                        <p class="text-light"><i>Our professional wedding transportation services are flexible enough to
                                provide fully personalized transportation services. We take pride in offering a wide range
                                of options that cater to various budgets, seating requirements, and fleet choices. </i></p>
                        <p class="text-light"><i>Call us or visit our website to make an online reservation! </i></p>

                        <div class="bookNow-btn-wrp">
                            <a href="{{ route('home') }}/#bookingBlock"
                                class="btn btn-default btn-book-now btn-wide icon-btn">
                                Book Now
                                <i class="bi bi-arrow-right-circle-fill"></i>
                            </a>
                        </div>
                    </div>
                    {{-- <div class="col-lg-6 content-wrp">
                        <div class="text-wrp">
                            <div class="text-content">
                                <p class="text-justify">
                                    Your wedding day is a once-in-a-lifetime occasion, and we want to make it extraordinary without compromising on your budget. Because your special day should be filled with joy and cherished memories, not financial worries - that’s what we believe. 
                                </p>
                                <p class="text-justify">
                                    So, try us and let us make your wedding day more special and luxurious with our
                                    incomparable top-quality vehicles equipped with all the amenities and driven by
                                    well-dressed chauffeurs.
                                </p>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-6 content-wrp">
                        <div class="text-wrp">
                            <div class="text-content ">
                                <p class="text-justify">
                                    We can always assist you and offer the most suitable quoted price for our personalized
                                    limousine service according to your needs.
                                </p>
                                <p class="text-justify">
                                    Call us or visit our website and fill out the online reservation form to avoid last
                                    minute hassle.
                                </p>

                                <div class="bookNow-btn-wrp">
                                    <a href="{{ route('home') }}/#bookingBlock"
                                        class="btn btn-default btn-book-now btn-wide icon-btn">
                                        Book Now
                                        <i class="bi bi-arrow-right-circle-fill"></i>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div> --}}

                </div>

            </div>

        </div>
    </div>
@endsection
