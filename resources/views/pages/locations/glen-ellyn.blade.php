@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row align-items-center mb-5">
        <div class="col-md-8">
            <h1 class="fw-bold mb-3">Limo Service in Glen Ellyn, IL | Spot Limo</h1>
            <p class="lead">Premium black car and limousine service in Glen Ellyn, Illinois. One of DuPage County's most charming and sought-after communities, Glen Ellyn deserves exceptional transportation. Spot Limo provides professional chauffeur service 24/7 for airport transfers, corporate travel, wedding limos, proms, and all special occasions.</p>
            <a href="{{ url('/#bookingBlock') }}" class="btn btn-dark btn-lg me-3">Book Now</a>
            <a href="tel:+16302901761" class="btn btn-outline-dark btn-lg">Call 630-290-1761</a>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-12"><h2 class="fw-bold mb-4">Our Limo Services in Glen Ellyn, Illinois</h2></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">O'Hare Airport Limo from Glen Ellyn</h3>
            <p>Skip the stress of driving to O'Hare from Glen Ellyn. Our professional chauffeurs provide door-to-door service with real-time flight tracking and flat rate pricing every day of the year.</p>
            <a href="{{ route('ohare-airport') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Wedding Limo Glen Ellyn IL</h3>
            <p>Glen Ellyn's beautiful downtown and surrounding venues deserve elegant wedding transportation. Spot Limo's fleet includes stretch limos, luxury SUVs, and executive sedans for your perfect wedding day.</p>
            <a href="{{ route('wedding-services') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Corporate Car Service Glen Ellyn</h3>
            <p>Glen Ellyn professionals commuting to Chicago or meeting clients deserve reliable luxury transportation. Spot Limo provides executive black car service tailored to Glen Ellyn's business community.</p>
            <a href="{{ route('corporate-limo-transport') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Prom Limo Glen Ellyn IL</h3>
            <p>Serving Glenbard West High School — one of Illinois' most prestigious high schools — for prom night. Stylish stretch limos and luxury SUVs for an unforgettable evening.</p>
            <a href="{{ route('prom-nights') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Midway Airport Car Service Glen Ellyn</h3>
            <p>Reliable Midway Airport transfers from Glen Ellyn. Professional chauffeurs available for all flight times — we guarantee on-time arrival regardless of your departure hour.</p>
            <a href="{{ route('midway-signature') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Downtown Glen Ellyn & Fine Dining</h3>
            <p>Enjoy Glen Ellyn's award-winning restaurants and boutiques without worrying about parking or driving. Our hourly chauffeur service makes evenings out in Glen Ellyn completely stress-free.</p>
            <a href="{{ route('chauffeur-services') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
    </div>
    <div class="row mb-5 bg-light p-4 rounded">
        <div class="col-12"><h2 class="fw-bold mb-4">FAQs — Glen Ellyn Limo Service</h2></div>
        <div class="col-12 mb-3"><h3 class="h5 fw-bold">How much is a limo from Glen Ellyn to O'Hare?</h3><p>Sedan transfers from Glen Ellyn to O'Hare start around $70–$85. Call 630-290-1761 for exact pricing.</p></div>
        <div class="col-12 mb-3"><h3 class="h5 fw-bold">Is Spot Limo available 24/7 in Glen Ellyn?</h3><p>Yes — available 24 hours a day, 7 days a week including holidays. Call or WhatsApp 630-290-1761 anytime.</p></div>
    </div>
    <div class="row bg-dark text-white p-5 rounded text-center">
        <div class="col-12">
            <h2 class="fw-bold mb-3">Book Your Glen Ellyn Limo Today</h2>
            <a href="{{ url('/#bookingBlock') }}" class="btn btn-light btn-lg me-3">Book Online Now</a>
            <a href="tel:+16302901761" class="btn btn-outline-light btn-lg">Call 630-290-1761</a>
        </div>
    </div>
</div>
@endsection
