@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row align-items-center mb-5">
        <div class="col-md-8">
            <h1 class="fw-bold mb-3">Limo Service in Itasca, IL | Spot Limo</h1>
            <p class="lead">Premium black car and limousine service in Itasca, Illinois. Located just minutes from O'Hare International Airport, Itasca is home to major corporate headquarters and the prestigious Itasca Country Club. Spot Limo provides professional chauffeur service 24/7 for airport transfers, corporate travel, weddings, and special events.</p>
            <a href="{{ url('/#bookingBlock') }}" class="btn btn-dark btn-lg me-3">Book Now</a>
            <a href="tel:+16302901761" class="btn btn-outline-dark btn-lg">Call 630-290-1761</a>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-12"><h2 class="fw-bold mb-4">Our Limo Services in Itasca, Illinois</h2></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">O'Hare Airport Limo from Itasca</h3>
            <p>Itasca is one of the closest suburbs to O'Hare — just 5 miles away. Our professional chauffeurs provide seamless airport transfers with real-time flight tracking and flat rate pricing, 24 hours a day.</p>
            <a href="{{ route('ohare-airport') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Corporate Car Service Itasca</h3>
            <p>Itasca hosts major companies including Motorola Solutions global headquarters and numerous DuPage County businesses. Spot Limo provides executive black car service for Itasca's corporate community.</p>
            <a href="{{ route('corporate-limo-transport') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Wedding Limo Itasca IL</h3>
            <p>Itasca Country Club and surrounding DuPage County venues deserve elegant transportation. Spot Limo provides sophisticated wedding limos and luxury SUVs for your special day in Itasca.</p>
            <a href="{{ route('wedding-services') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Hotel & Conference Transportation</h3>
            <p>Itasca's Renaissance Hotel and Eaglewood Resort host major conferences and corporate events year-round. Spot Limo provides group transportation and executive car service for all Itasca hotel guests.</p>
            <a href="{{ route('corporate-limo-transport') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Midway Airport Transfer Itasca</h3>
            <p>Need a ride to Midway from Itasca? Our professional drivers know every route and are available for all flight times including early morning and late night pickups.</p>
            <a href="{{ route('midway-signature') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Hourly Chauffeur Itasca IL</h3>
            <p>Flexible hourly black car service throughout Itasca and surrounding communities. Perfect for multi-stop business trips, client entertainment, or a night out in Chicago.</p>
            <a href="{{ route('chauffeur-services') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
    </div>
    <div class="row mb-5 bg-light p-4 rounded">
        <div class="col-12"><h2 class="fw-bold mb-4">FAQs — Itasca Limo Service</h2></div>
        <div class="col-12 mb-3"><h3 class="h5 fw-bold">How close is Itasca to O'Hare Airport?</h3><p>Itasca is approximately 5 miles from O'Hare — one of the closest Chicago suburbs to the airport. Our transfers typically take 10–15 minutes depending on traffic.</p></div>
        <div class="col-12 mb-3"><h3 class="h5 fw-bold">Do you provide transportation for Itasca conference guests?</h3><p>Yes — we provide group and individual transportation for guests at Renaissance Hotel, Eaglewood Resort, and all Itasca conference facilities. Call 630-290-1761 for group rates.</p></div>
        <div class="col-12 mb-3"><h3 class="h5 fw-bold">Is Spot Limo available 24/7 in Itasca?</h3><p>Yes. Our Itasca limo service operates 24 hours a day, 7 days a week including all holidays.</p></div>
    </div>
    <div class="row bg-dark text-white p-5 rounded text-center">
        <div class="col-12">
            <h2 class="fw-bold mb-3">Book Your Itasca Limo Today</h2>
            <p class="lead mb-4">Professional luxury transportation in Itasca, IL. Available 24/7.</p>
            <a href="{{ url('/#bookingBlock') }}" class="btn btn-light btn-lg me-3">Book Online Now</a>
            <a href="tel:+16302901761" class="btn btn-outline-light btn-lg">Call 630-290-1761</a>
        </div>
    </div>
</div>
@endsection