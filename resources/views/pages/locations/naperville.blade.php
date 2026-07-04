@extends('layouts.app')

@section('content')

<div class="container py-5">

    {{-- Hero Section --}}
    <div class="row align-items-center mb-5">
        <div class="col-md-8">
            <h1 class="fw-bold mb-3">Limo Service in Naperville, IL | Spot Limo</h1>
            <p class="lead">Premium black car and limousine service in Naperville, Illinois. Whether you need an airport transfer to O'Hare or Midway, a wedding limo, corporate car service, or prom night transportation — Spot Limo is Naperville's trusted luxury ground transportation provider, available 24/7.</p>
            <a href="{{ url('/#bookingBlock') }}" class="btn btn-dark btn-lg me-3">Book Now</a>
            <a href="tel:+16302901761" class="btn btn-outline-dark btn-lg">Call 630-290-1761</a>
        </div>
        <div class="col-md-4 text-center">
            <img src="{{ Vite::asset('resources/images/logo/desktop-logo-full.png') }}" alt="Spot Limo Naperville IL" class="img-fluid">
        </div>
    </div>

    {{-- Services Section --}}
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="fw-bold mb-4">Our Limo Services in Naperville, Illinois</h2>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h3 class="h5 fw-bold">O'Hare Airport Limo from Naperville</h3>
                    <p>Skip the stress of driving to O'Hare. Our professional chauffeurs provide reliable, on-time airport transfers from Naperville to O'Hare International Airport 24 hours a day, 7 days a week. Flight tracking included — we monitor your flight and adjust pickup time automatically.</p>
                    <a href="{{ route('ohare-airport') }}" class="btn btn-sm btn-dark">Learn More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h3 class="h5 fw-bold">Midway Airport Car Service Naperville</h3>
                    <p>Need a ride to Midway Airport from Naperville? Spot Limo provides comfortable, luxury car service to Midway with professional drivers who know the fastest routes. Available for early morning and late night flights.</p>
                    <a href="{{ route('midway-signature') }}" class="btn btn-sm btn-dark">Learn More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h3 class="h5 fw-bold">Wedding Limo Service Naperville</h3>
                    <p>Make your wedding day unforgettable with Spot Limo. We serve Naperville's top wedding venues including Drury Lane, Bolingbrook Golf Club, and Stonegate Conference Centre. Choose from stretch limos, luxury SUVs, and executive sedans.</p>
                    <a href="{{ route('wedding-services') }}" class="btn btn-sm btn-dark">Learn More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h3 class="h5 fw-bold">Corporate Car Service Naperville</h3>
                    <p>Naperville is home to major corporate headquarters including Nicor, OfficeMax, and Nalco. Spot Limo provides reliable executive black car service for business meetings, client pickups, and corporate events throughout the Naperville business corridor.</p>
                    <a href="{{ route('corporate-limo-transport') }}" class="btn btn-sm btn-dark">Learn More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h3 class="h5 fw-bold">Prom Limo Naperville IL</h3>
                    <p>Serving Naperville North, Naperville Central, and Neuqua Valley High School proms. Our stretch limos and party buses make prom night safe and memorable. Book early — prom season fills fast in Naperville.</p>
                    <a href="{{ route('prom-nights') }}" class="btn btn-sm btn-dark">Learn More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h3 class="h5 fw-bold">Hourly Chauffeur Service Naperville</h3>
                    <p>Need a driver for the day? Our hourly chauffeur service in Naperville is perfect for wine tours, shopping trips to Naperville's downtown district, or multi-stop business days. Minimum 2 hours, available 24/7.</p>
                    <a href="{{ route('chauffeur-services') }}" class="btn btn-sm btn-dark">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Why Choose Section --}}
    <div class="row mb-5 bg-light p-4 rounded">
        <div class="col-12">
            <h2 class="fw-bold mb-4">Why Naperville Chooses Spot Limo</h2>
        </div>
        <div class="col-md-3 text-center mb-3">
            <div class="display-6 fw-bold text-dark">24/7</div>
            <p>Available round the clock for all pickups in Naperville</p>
        </div>
        <div class="col-md-3 text-center mb-3">
            <div class="display-6 fw-bold text-dark">5★</div>
            <p>Top-rated luxury transportation in the Chicago suburbs</p>
        </div>
        <div class="col-md-3 text-center mb-3">
            <div class="display-6 fw-bold text-dark">15+</div>
            <p>Years serving Naperville and surrounding suburbs</p>
        </div>
        <div class="col-md-3 text-center mb-3">
            <div class="display-6 fw-bold text-dark">5</div>
            <p>Luxury vehicle types to choose from</p>
        </div>
    </div>

    {{-- Fleet Section --}}
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="fw-bold mb-4">Our Fleet Available in Naperville</h2>
            <p>All vehicles are professionally maintained, fully insured, and driven by licensed chauffeurs. Choose the perfect vehicle for your occasion:</p>
        </div>
        <div class="col-md-4 mb-3">
            <h4 class="h6 fw-bold">✓ Black Sedan</h4>
            <p>Ideal for airport transfers and business travel. Up to 3 passengers.</p>
        </div>
        <div class="col-md-4 mb-3">
            <h4 class="h6 fw-bold">✓ Luxury SUV</h4>
            <p>Perfect for families and groups. Up to 7 passengers with luggage.</p>
        </div>
        <div class="col-md-4 mb-3">
            <h4 class="h6 fw-bold">✓ Stretch Limousine</h4>
            <p>Classic choice for weddings, proms, and special events. Up to 8 passengers.</p>
        </div>
        <div class="col-md-4 mb-3">
            <h4 class="h6 fw-bold">✓ Stretch SUV</h4>
            <p>Ultimate luxury for larger groups. Up to 14 passengers.</p>
        </div>
        <div class="col-md-4 mb-3">
            <h4 class="h6 fw-bold">✓ Executive Van</h4>
            <p>Best for corporate groups and airport shuttles. Up to 15 passengers.</p>
        </div>
        <div class="col-md-4 mb-3 d-flex align-items-center">
            <a href="{{ route('vehicle-rates') }}" class="btn btn-dark">View Full Fleet</a>
        </div>
    </div>

    {{-- Local Area Section --}}
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="fw-bold mb-4">Serving All of Naperville & Surrounding Areas</h2>
            <p>Spot Limo provides pickup and drop-off service throughout all Naperville zip codes including 60540, 60563, 60564, and 60565. We also serve neighboring communities from Naperville including:</p>
            <div class="row">
                <div class="col-md-3"><ul>
                    <li><a href="{{ url('/limo-service-aurora-il') }}">Aurora</a></li>
                    <li><a href="{{ url('/limo-service-bolingbrook-il') }}">Bolingbrook</a></li>
                    <li><a href="{{ url('/limo-service-lisle-il') }}">Lisle</a></li>
                </ul></div>
                <div class="col-md-3"><ul>
                    <li><a href="{{ url('/limo-service-wheaton-il') }}">Wheaton</a></li>
                    <li><a href="{{ url('/limo-service-downers-grove-il') }}">Downers Grove</a></li>
                    <li><a href="{{ url('/limo-service-oak-brook-il') }}">Oak Brook</a></li>
                </ul></div>
                <div class="col-md-3"><ul>
                    <li><a href="{{ url('/limo-service-hinsdale-il') }}">Hinsdale</a></li>
                    <li><a href="{{ url('/limo-service-elmhurst-il') }}">Elmhurst</a></li>
                    <li><a href="{{ url('/limo-service-schaumburg-il') }}">Schaumburg</a></li>
                </ul></div>
            </div>
        </div>
    </div>

    {{-- FAQ Section --}}
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="fw-bold mb-4">Frequently Asked Questions — Naperville Limo Service</h2>
        </div>
        <div class="col-12 mb-3">
            <h3 class="h5 fw-bold">How much does a limo from Naperville to O'Hare cost?</h3>
            <p>Pricing depends on vehicle type and time of day. Sedan transfers from Naperville to O'Hare typically start around $75–$95. SUVs start around $95–$120. Contact us at 630-290-1761 for an exact quote or book online for instant pricing.</p>
        </div>
        <div class="col-12 mb-3">
            <h3 class="h5 fw-bold">How far in advance should I book a limo in Naperville?</h3>
            <p>For airport transfers, we recommend booking at least 24 hours in advance. For weddings and proms, book 2–4 weeks ahead. We do accommodate same-day bookings based on availability — call 630-290-1761 for same-day requests.</p>
        </div>
        <div class="col-12 mb-3">
            <h3 class="h5 fw-bold">Do you serve Naperville North and Naperville Central for prom?</h3>
            <p>Yes — we serve all Naperville high schools including Naperville North, Naperville Central, and Neuqua Valley for prom night transportation. Stretch limos and party buses available.</p>
        </div>
        <div class="col-12 mb-3">
            <h3 class="h5 fw-bold">Is Spot Limo available 24/7 in Naperville?</h3>
            <p>Yes. Our Naperville limo service operates 24 hours a day, 7 days a week, 365 days a year including holidays. Early morning airport runs and late night event pickups are our specialty.</p>
        </div>
    </div>

    {{-- CTA Section --}}
    <div class="row bg-dark text-white p-5 rounded text-center">
        <div class="col-12">
            <h2 class="fw-bold mb-3">Book Your Naperville Limo Today</h2>
            <p class="lead mb-4">Professional, affordable luxury transportation in Naperville, IL. Available 24/7 for airport transfers, weddings, corporate travel, and special events.</p>
            <a href="{{ url('/#bookingBlock') }}" class="btn btn-light btn-lg me-3">Book Online Now</a>
            <a href="tel:+16302901761" class="btn btn-outline-light btn-lg">Call 630-290-1761</a>
        </div>
    </div>

</div>

@endsection