@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row align-items-center mb-5">
        <div class="col-md-8">
            <h1 class="fw-bold mb-3">Limo Service in Clarendon Hills, IL | Spot Limo</h1>
            <p class="lead">Premium black car and limousine service in Clarendon Hills, Illinois. This charming DuPage County village is home to discerning residents who expect the finest in luxury ground transportation. Spot Limo provides professional chauffeur service 24/7 for airport transfers, corporate travel, weddings, and all special occasions.</p>
            <a href="{{ url('/#bookingBlock') }}" class="btn btn-dark btn-lg me-3">Book Now</a>
            <a href="tel:+16302901761" class="btn btn-outline-dark btn-lg">Call 630-290-1761</a>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-12"><h2 class="fw-bold mb-4">Our Limo Services in Clarendon Hills, Illinois</h2></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">O'Hare Airport Limo from Clarendon Hills</h3>
            <p>Door-to-door airport transfers from Clarendon Hills to O'Hare. Flat rate pricing, real-time flight monitoring, and professional chauffeurs available around the clock.</p>
            <a href="{{ route('ohare-airport') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Luxury Car Service Clarendon Hills</h3>
            <p>Clarendon Hills residents trust Spot Limo for premium black car service. From daily Chicago commutes to special occasion transportation, our executive fleet delivers elegance every time.</p>
            <a href="{{ route('executive-transport') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Wedding Limo Clarendon Hills IL</h3>
            <p>Serving Clarendon Hills and neighboring Hinsdale, Burr Ridge, and Western Springs venues. Elegant wedding transportation for DuPage County's most beautiful celebrations.</p>
            <a href="{{ route('wedding-services') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Prom Limo Clarendon Hills IL</h3>
            <p>Serving Hinsdale Central and surrounding area high schools for prom night. Safe, stylish stretch limos and luxury SUVs for students in Clarendon Hills.</p>
            <a href="{{ route('prom-nights') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Midway Airport Car Service Clarendon Hills</h3>
            <p>Professional Midway Airport transportation from Clarendon Hills. Our drivers know every route and are available for all flight times with guaranteed on-time pickup.</p>
            <a href="{{ route('midway-signature') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
        <div class="col-md-4 mb-4"><div class="card h-100 shadow-sm"><div class="card-body">
            <h3 class="h5 fw-bold">Hourly Chauffeur Clarendon Hills</h3>
            <p>Flexible hourly black car service for Clarendon Hills residents. Shopping at Oakbrook Center, fine dining in Hinsdale, or a night in Chicago — your chauffeur handles it all.</p>
            <a href="{{ route('chauffeur-services') }}" class="btn btn-sm btn-dark">Learn More</a>
        </div></div></div>
    </div>
    <div class="row bg-dark text-white p-5 rounded text-center">
        <div class="col-12">
            <h2 class="fw-bold mb-3">Book Your Clarendon Hills Limo Today</h2>
            <a href="{{ url('/#bookingBlock') }}" class="btn btn-light btn-lg me-3">Book Online Now</a>
            <a href="tel:+16302901761" class="btn btn-outline-light btn-lg">Call 630-290-1761</a>
        </div>
    </div>
</div>
@endsection
