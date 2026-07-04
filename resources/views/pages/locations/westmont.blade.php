@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row align-items-center mb-5">
        <div class="col-md-8">
            <h1 class="fw-bold mb-3">Limo Service in Westmont, IL | Spot Limo</h1>
            <p class="lead">Premium black car and limousine service in Westmont, Illinois. Spot Limo serves Westmont with professional chauffeur service 24/7. Airport transfers, corporate travel, wedding limos, prom transportation, and special events throughout Westmont and DuPage County.</p>
            <a href="{{ url('/#bookingBlock') }}" class="btn btn-dark btn-lg me-3">Book Now</a>
            <a href="tel:+16302901761" class="btn btn-outline-dark btn-lg">Call 630-290-1761</a>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-12"><h2 class="fw-bold mb-4">Our Limo Services in Westmont, Illinois</h2></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">O'Hare Airport Limo from Westmont</h3>
            <p>Reliable airport transfers from Westmont to O'Hare with real-time flight tracking, flat rate pricing, and 24/7 availability. Our professional chauffeurs handle all the driving while you relax.</p>
            <a href="{{ route('ohare-airport') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Wedding Limo Westmont IL</h3>
            <p>Serving Westmont and surrounding DuPage County wedding venues. Our professional chauffeurs and elegant fleet make your wedding transportation as beautiful as your celebration.</p>
            <a href="{{ route('wedding-services') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Corporate Car Service Westmont</h3>
            <p>Executive black car service for Westmont professionals. Whether commuting to Chicago or meeting clients at O'Hare, Spot Limo provides reliable luxury transportation every time.</p>
            <a href="{{ route('corporate-limo-transport') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Prom Limo Westmont IL</h3>
            <p>Serving Westmont High School and surrounding schools for prom night transportation. Stylish stretch limos and luxury SUVs for an unforgettable prom experience.</p>
            <a href="{{ route('prom-nights') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Midway Airport Transfer Westmont</h3>
            <p>Convenient Midway Airport car service from Westmont with professional chauffeurs available for all flight times and guaranteed on-time pickups every day of the year.</p>
            <a href="{{ route('midway-signature') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Hourly Limo Service Westmont</h3>
            <p>Flexible hourly chauffeur service for dining, shopping, and entertainment throughout Westmont and the greater Chicago area. Your driver stays with you for every stop.</p>
            <a href="{{ route('chauffeur-services') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
    </div>
    <div class="row bg-dark text-white p-5 rounded text-center">
        <div class="col-12">
            <h2 class="fw-bold mb-3">Book Your Westmont Limo Today</h2>
            <a href="{{ url('/#bookingBlock') }}" class="btn btn-light btn-lg me-3">Book Online Now</a>
            <a href="tel:+16302901761" class="btn btn-outline-light btn-lg">Call 630-290-1761</a>
        </div>
    </div>
</div>
@endsection
