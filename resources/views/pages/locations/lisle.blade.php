@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row align-items-center mb-5">
        <div class="col-md-8">
            <h1 class="fw-bold mb-3">Limo Service in Lisle, IL | Spot Limo</h1>
            <p class="lead">Premium black car and limousine service in Lisle, Illinois. Home to major corporate campuses along the I-88 technology corridor, Lisle is one of DuPage County's key business communities. Spot Limo provides professional chauffeur service 24/7 for corporate travel, airport transfers, wedding limos, and all special occasions.</p>
            <a href="{{ url('/#bookingBlock') }}" class="btn btn-dark btn-lg me-3">Book Now</a>
            <a href="tel:+16302901761" class="btn btn-outline-dark btn-lg">Call 630-290-1761</a>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-12"><h2 class="fw-bold mb-4">Our Limo Services in Lisle, Illinois</h2></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">O'Hare Airport Limo from Lisle</h3>
            <p>Professional airport transfers from Lisle to O'Hare with real-time flight tracking and flat rate pricing. Our chauffeurs know every I-88 and I-290 shortcut to keep you on schedule.</p>
            <a href="{{ route('ohare-airport') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Corporate Car Service Lisle IL</h3>
            <p>Lisle is home to NICOR, Navistar, and dozens of I-88 tech corridor companies. Spot Limo provides reliable executive black car service for all of Lisle's corporate campuses and business parks.</p>
            <a href="{{ route('corporate-limo-transport') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Wedding Limo Lisle IL</h3>
            <p>Serving Lisle's beautiful wedding venues including Arrowhead Golf Club and surrounding DuPage County locations. Elegant transportation for your most special day.</p>
            <a href="{{ route('wedding-services') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Conference & Hotel Transportation Lisle</h3>
            <p>Lisle's Marriott and Hilton hotels host major corporate conferences. Spot Limo provides group and individual transportation for all Lisle hotel guests and conference attendees.</p>
            <a href="{{ route('corporate-limo-transport') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Midway Airport Transfer Lisle</h3>
            <p>Convenient Midway Airport car service from Lisle. Professional chauffeurs available 24/7 with guaranteed on-time arrival for every flight time.</p>
            <a href="{{ route('midway-signature') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Morton Arboretum Events Lisle</h3>
            <p>The Morton Arboretum hosts beautiful weddings, galas, and seasonal events. Spot Limo provides elegant transportation to and from all Morton Arboretum events in Lisle.</p>
            <a href="{{ route('chauffeur-services') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
    </div>
    <div class="row mb-5 bg-light p-4 rounded">
        <div class="col-12"><h2 class="fw-bold mb-4">FAQs — Lisle Limo Service</h2></div>
        <div class="col-12 mb-3"><h3 class="h5 fw-bold">Do you provide corporate accounts for Lisle businesses?</h3><p>Yes — Spot Limo offers corporate accounts for Lisle businesses with monthly invoicing, priority booking, and dedicated support. Call 630-290-1761 for details.</p></div>
        <div class="col-12 mb-3"><h3 class="h5 fw-bold">Do you serve Morton Arboretum events?</h3><p>Yes — we provide transportation to and from all Morton Arboretum events including weddings, galas, and seasonal festivals.</p></div>
    </div>
    <div class="row bg-dark text-white p-5 rounded text-center">
        <div class="col-12">
            <h2 class="fw-bold mb-3">Book Your Lisle Limo Today</h2>
            <a href="{{ url('/#bookingBlock') }}" class="btn btn-light btn-lg me-3">Book Online Now</a>
            <a href="tel:+16302901761" class="btn btn-outline-light btn-lg">Call 630-290-1761</a>
        </div>
    </div>
</div>
@endsection
