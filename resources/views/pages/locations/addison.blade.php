@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row align-items-center mb-5">
        <div class="col-md-8">
            <h1 class="fw-bold mb-3">Limo Service in Addison, IL | Spot Limo</h1>
            <p class="lead">Premium black car and limousine service in Addison, Illinois. Spot Limo serves Addison with professional chauffeur service 24/7. Conveniently located near O'Hare and major expressways, Addison residents enjoy fast, reliable airport transfers, corporate travel, wedding limos, and all special occasion transportation.</p>
            <a href="{{ url('/#bookingBlock') }}" class="btn btn-dark btn-lg me-3">Book Now</a>
            <a href="tel:+16302901761" class="btn btn-outline-dark btn-lg">Call 630-290-1761</a>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-12"><h2 class="fw-bold mb-4">Our Limo Services in Addison, Illinois</h2></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">O'Hare Airport Limo from Addison</h3>
            <p>Addison is just 10 miles from O'Hare — perfect for fast, convenient airport transfers. Our professional chauffeurs provide real-time flight tracking and flat rate pricing available 24/7.</p>
            <a href="{{ route('ohare-airport') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Corporate Car Service Addison IL</h3>
            <p>Addison's industrial and business corridors along Lake Street and Army Trail Road are served by Spot Limo's professional executive car service. Reliable, on-time transportation for all business needs.</p>
            <a href="{{ route('corporate-limo-transport') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Wedding Limo Addison IL</h3>
            <p>Serving Addison and surrounding DuPage County wedding venues. Elegant stretch limos, luxury SUVs, and executive sedans for weddings of every style and size.</p>
            <a href="{{ route('wedding-services') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Prom Limo Addison IL</h3>
            <p>Serving Addison Trail High School and surrounding schools for prom night transportation. Safe, stylish, and on-time limos for the most memorable night of the year.</p>
            <a href="{{ route('prom-nights') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Midway Airport Car Service Addison</h3>
            <p>Reliable Midway Airport transfers from Addison with professional chauffeurs available for all flight times including early morning and late night departures.</p>
            <a href="{{ route('midway-signature') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Hourly Limo Service Addison IL</h3>
            <p>Flexible hourly chauffeur service throughout Addison and the greater DuPage County area. Your professional driver handles every stop on your schedule.</p>
            <a href="{{ route('chauffeur-services') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
    </div>
    <div class="row mb-5 bg-light p-4 rounded">
        <div class="col-12"><h2 class="fw-bold mb-4">FAQs — Addison Limo Service</h2></div>
        <div class="col-12 mb-3"><h3 class="h5 fw-bold">How far is Addison from O'Hare Airport?</h3><p>Addison is approximately 10 miles from O'Hare — a short 15–20 minute drive with our professional chauffeurs navigating the best route.</p></div>
        <div class="col-12 mb-3"><h3 class="h5 fw-bold">Is Spot Limo available 24/7 in Addison?</h3><p>Yes — available 24 hours a day, 7 days a week including holidays. Call or WhatsApp 630-290-1761 anytime to book.</p></div>
    </div>
    <div class="row bg-dark text-white p-5 rounded text-center">
        <div class="col-12">
            <h2 class="fw-bold mb-3">Book Your Addison Limo Today</h2>
            <a href="{{ url('/#bookingBlock') }}" class="btn btn-light btn-lg me-3">Book Online Now</a>
            <a href="tel:+16302901761" class="btn btn-outline-light btn-lg">Call 630-290-1761</a>
        </div>
    </div>
</div>
@endsection
