@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row align-items-center mb-5">
        <div class="col-md-8">
            <h1 class="fw-bold mb-3">Limo Service in Roselle, IL | Spot Limo</h1>
            <p class="lead">Premium black car and limousine service in Roselle, Illinois. Spot Limo serves Roselle and surrounding DuPage County communities with professional chauffeur service available 24/7. Airport transfers to O'Hare and Midway, corporate travel, wedding limos, prom transportation, and all special occasions.</p>
            <a href="{{ url('/#bookingBlock') }}" class="btn btn-dark btn-lg me-3">Book Now</a>
            <a href="tel:+16302901761" class="btn btn-outline-dark btn-lg">Call 630-290-1761</a>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-12"><h2 class="fw-bold mb-4">Our Limo Services in Roselle, Illinois</h2></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">O'Hare Airport Limo from Roselle</h3>
            <p>Reliable airport transfers from Roselle to O'Hare with real-time flight tracking and flat rate pricing. Our professional chauffeurs ensure stress-free airport travel 24 hours a day.</p>
            <a href="{{ route('ohare-airport') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Wedding Limo Roselle IL</h3>
            <p>Elegant wedding transportation serving Roselle and all DuPage County venues. Stretch limos, luxury SUVs, and executive sedans for weddings of every size and style.</p>
            <a href="{{ route('wedding-services') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Prom Limo Roselle IL</h3>
            <p>Serving Lake Park High School and surrounding Roselle area schools for prom night transportation. Safe, stylish, and on time for the most memorable night of the school year.</p>
            <a href="{{ route('prom-nights') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Corporate Car Service Roselle</h3>
            <p>Professional black car service for Roselle's business travelers. Daily commutes to Chicago, O'Hare corporate meetings, and client pickups handled with reliability every time.</p>
            <a href="{{ route('corporate-limo-transport') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Midway Airport Car Service Roselle</h3>
            <p>Convenient Midway Airport transportation from Roselle. Professional chauffeurs available for all flight times including early morning and late night departures.</p>
            <a href="{{ route('midway-signature') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Hourly Limo Service Roselle</h3>
            <p>Flexible hourly chauffeur service for shopping, dining, and entertainment in the Roselle area and greater Chicago metro. Your driver stays with you for every stop.</p>
            <a href="{{ route('chauffeur-services') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
    </div>
    <div class="row bg-dark text-white p-5 rounded text-center">
        <div class="col-12">
            <h2 class="fw-bold mb-3">Book Your Roselle Limo Today</h2>
            <a href="{{ url('/#bookingBlock') }}" class="btn btn-light btn-lg me-3">Book Online Now</a>
            <a href="tel:+16302901761" class="btn btn-outline-light btn-lg">Call 630-290-1761</a>
        </div>
    </div>
</div>
@endsection
