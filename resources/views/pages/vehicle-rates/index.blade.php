@extends('layouts.app')

@section('content')
    <div class="w-100 hero-section-wrp">
        <div class="hero-content-wrp inner-page vehicle-rates">
            <div class="img-wrp">
                <div class="img-hero"
                    style="background-image: url('{{ Vite::asset('resources/images/banners/hero-img-aboutus.png') }}')">

                    <div class="hero-text-content-wrp container-md">
                        <div class="text-center col-12   ">
                            <div class="hero-title-wrp">
                                <h1>
                                    <span>Spot Limo</span>
                                    Our Fleets
                                </h1>
                            </div>
                        </div>
                    </div>

                    <span class="overlay"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xl spot-limo-pricing-blocks">
        <div class="">
            <div class="title-wrp d-none">
                <h1 class="title">
                    To Airport Pricing Details
                </h1>
            </div>
            <div class="pricing-cards-wrp">
                <div class="row">
                    @foreach ($rates as $rate)
                        <div class="col-lg-4 col-md-4 pricing-card-wrp">
                            <div class="pricing-card  ">
                                <a href="/">
                                    <div class="img-wrp">
                                        <img src="{{ $rate->image }}" alt="{{ $rate->name }}" class="img-fluid">
                                    </div>
                                    <div class="text-wrp">
                                        <h5 class=" title text-center">
                                            {{ $rate->name }}
                                        </h5>

                                        <div class="priceperblock text-center">
                                            @if ($rate->id == 4 || $rate->id == 5)
                                                <div class="data">Call for price</div>
                                            @else
                                                <div class="data">${{ $rate->per_mile_charge }} per mile + 15%
                                                    gratuaity(Tip)</div>
                                            @endif
                                            <div class="heading">Price per mile</div>
                                        </div>
                                        <div class="priceperblock text-center">

                                            @if ($rate->id == 4 || $rate->id == 5)
                                                <div class="data">Call for price</div>
                                            @else
                                                <div class="data">${{ $rate->rush_hour_charge }} per mile + 15%
                                                    gratuaity(Tip)
                                                </div>
                                            @endif

                                            <div class="heading">Rush hour Price</div>
                                        </div>
                                        <div class="priceperblock text-center">
                                            <div class="data">${{ $rate->hourly_charge }}/hour (two hours minimum)</div>
                                            <div class="heading">Charter pricing/Hourly pricing</div>
                                        </div>


                                    </div>
                                </a>
                                <div class="button-wrp d-none">
                                    <a href="{{  route('home') }}/#bookingBlock"
                                        class="btn btn-default btn-book-now btn-wide icon-btn">
                                        Book Now
                                        <i class="bi bi-arrow-right-circle-fill"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container-fluid px-0 spot-limo-pricing-accordion-wrp d-none">

        <div class="col-lg-6 col-md-8 col-sm-10 col-11 mx-auto spot-limo-pricing-accordion spot-limo-pricing-blocks">
            <div class="title-wrp">
                <h2 class="title text-center mb-4">
                    Other Pricing Details
                </h2>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Rush hour times Regular days
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="list">
                                <ul>
                                    <li>6-9 am - 3-7 Mon- Friday</li>
                                    <li>6-9 am - 3-7 Mon- Friday</li>
                                    <li>6-9 am - 3-7 Mon- Friday</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Weekend rush hour timing
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="list">
                                <ul>
                                    <li>Friday 4pm - 8 pm / 10 pm-2am </li>
                                    <li>Saturday 4pm - 8 pm / 10 pm - 2am</li>
                                    <li>Sunday rush hour 4 am-7am </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Cancelation Fee
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="list">
                                <ul>
                                    <li>Full refund if canceled more than 2 hours prior to scheduled pickup </li>
                                    <li>No refund if canceled 2 hours prior to scheduled pickup</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Cleaning Fee
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="list">
                                <ul>
                                    <li>
                                        <div class="d-flex justify-content-between"><span> Sedan </span> <span> $150</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex justify-content-between"><span> Suv </span> <span> $250</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex justify-content-between"><span> Stretch Limo </span> <span>
                                                $350</span></div>
                                    </li>
                                    <li>
                                        <div class="d-flex justify-content-between"><span> Executive Van </span> <span>
                                                $400</span></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Ameneties
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="list">
                                <ul>
                                    <li>
                                        <div class="d-flex justify-content-between"> <span> Booster Seat </span> <span>
                                                $10</span></div>
                                    </li>
                                    <li>
                                        <div class="d-flex justify-content-between"> <span> Car Seat </span> <span> $20
                                                Each</span></div>
                                    </li>
                                    <li>
                                        <div class="d-flex justify-content-between"> <span> Meet and Greet </span> <span>
                                                $30</span></div>
                                    </li>
                                    <li>
                                        <div class="d-flex justify-content-between"> <span> Water </span> <span> Fee</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> --}}
@endsection
