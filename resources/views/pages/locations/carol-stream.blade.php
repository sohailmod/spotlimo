@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row align-items-center mb-5">
        <div class="col-md-8">
            <h1 class="fw-bold mb-3">Limo Service in Carol Stream, IL | Spot Limo</h1>
            <p class="lead">Premium black car and limousine service in Carol Stream, Illinois. Spot Limo provides professional chauffeur service throughout Carol Stream and DuPage County available 24/7. Airport transfers to O'Hare and Midway, corporate travel, wedding limos, prom transportation, and special events.</p>
            <a href="{{ url('/#bookingBlock') }}" class="btn btn-dark btn-lg me-3">Book Now</a>
            <a href="tel:+16302901761" class="btn btn-outline-dark btn-lg">Call 630-290-1761</a>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-12"><h2 class="fw-bold mb-4">Our Limo Services in Carol Stream, Illinois</h2></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">O'Hare Airport Limo from Carol Stream</h3>
            <p>Professional airport transfers from Carol Stream to O'Hare. Flat rate pricing, real-time flight tracking, and professional chauffeurs available around the clock every day of the year.</p>
            <a href="{{ route('ohare-airport') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Corporate Car Service Carol Stream</h3>
            <p>Carol Stream hosts major employers including Solo Cup Company and Nalco Chemical. Spot Limo provides reliable executive black car service for Carol Stream's business community.</p>
            <a href="{{ route('corporate-limo-transport') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Wedding Limo Carol Stream IL</h3>
            <p>Serving Carol Stream and surrounding DuPage County wedding venues. Elegant stretch limos and luxury SUVs for your most important day. Professional chauffeurs, impeccable service.</p>
            <a href="{{ route('wedding-services') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Prom Limo Carol Stream IL</h3>
            <p>Serving Glenbard North High School and surrounding schools for prom night. Book early — Carol Stream prom limo dates fill quickly every spring season.</p>
            <a href="{{ route('prom-nights') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Midway Airport Transfer Carol Stream</h3>
            <p>Convenient Midway Airport car service from Carol Stream. Professional drivers, luggage assistance, and on-time guaranteed pickups for all departure times.</p>
            <a href="{{ route('midway-signature') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Hourly Chauffeur Carol Stream</h3>
            <p>Flexible hourly limo service throughout Carol Stream. Perfect for shopping at Stratford Square Mall, dining, or a night out in downtown Chicago.</p>
            <a href="{{ route('chauffeur-services') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
    </div>
    <div class="row bg-dark text-white p-5 rounded text-center">
        <div class="col-12">
            <h2 class="fw-bold mb-3">Book Your Carol Stream Limo Today</h2>
            <a href="{{ url('/#bookingBlock') }}" class="btn btn-light btn-lg me-3">Book Online Now</a>
            <a href="tel:+16302901761" class="btn btn-outline-light btn-lg">Call 630-290-1761</a>
        </div>
    </div>
</div>
@endsection
