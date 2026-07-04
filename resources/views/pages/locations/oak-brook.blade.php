@extends('layouts.app')

@section('content')

<div class="container py-5">

    {{-- Hero Section --}}
    <div class="row align-items-center mb-5">
        <div class="col-md-8">
            <h1 class="fw-bold mb-3">Limo Service in Oak Brook, IL | Spot Limo</h1>
            <p class="lead">Premium black car and limousine service in Oak Brook, Illinois. Spot Limo serves Oak Brook's corporate headquarters, luxury hotels, Oakbrook Center, and surrounding areas with professional chauffeur service available 24/7. Airport transfers, corporate travel, weddings, and special events.</p>
            <a href="{{ url('/#bookingBlock') }}" class="btn btn-dark btn-lg me-3">Book Now</a>
            <a href="tel:+16302901761" class="btn btn-outline-dark btn-lg">Call 630-290-1761</a>
        </div>
        <div class="col-md-4 text-center">
            <img src="{{ Vite::asset('resources/images/logo/desktop-logo-full.png') }}" alt="Spot Limo Oak Brook IL" class="img-fluid">
        </div>
    </div>

    {{-- Services Section --}}
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="fw-bold mb-4">Our Limo Services in Oak Brook, Illinois</h2>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h3 class="h5 fw-bold">Corporate Car Service Oak Brook</h3>
                    <p>Oak Brook is home to McDonald's HQ, Ace Hardware, and dozens of Fortune 500 companies. Spot Limo provides executive black car service for Oak Brook's business community — client pickups, airport transfers, and corporate events handled with discretion and professionalism.</p>
                    <a href="{{ route('corporate-limo-transport') }}" class="btn btn-sm btn-dark">Learn More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h3 class="h5 fw-bold">O'Hare Airport Limo from Oak Brook</h3>
                    <p>Oak Brook to O'Hare in comfort and style. Our professional chauffeurs monitor your flight in real time and adjust pickup accordingly. No surge pricing, no surprises — flat rate airport transfers from Oak Brook 24/7.</p>
                    <a href="{{ route('ohare-airport') }}" class="btn btn-sm btn-dark">Learn More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h3 class="h5 fw-bold">Midway Airport Car Service Oak Brook</h3>
                    <p>Reliable Midway Airport transportation from Oak Brook. Whether you're flying Southwest or catching an early connection, Spot Limo ensures you arrive on time without the parking headache.</p>
                    <a href="{{ route('midway-signature') }}" class="btn btn-sm btn-dark">Learn More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h3 class="h5 fw-bold">Wedding Limo Service Oak Brook</h3>
                    <p>Oak Brook offers some of Illinois' most prestigious wedding venues — Drury Lane Theatre, Abbington Distinctive Banquets, and Oak Brook Hills Marriott Resort. Spot Limo provides elegant wedding transportation to and from all Oak Brook venues.</p>
                    <a href="{{ route('wedding-services') }}" class="btn btn-sm btn-dark">Learn More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h3 class="h5 fw-bold">Oakbrook Center Shopping Transfers</h3>
                    <p>Arrive at Oakbrook Center in style. Our hourly chauffeur service is perfect for shopping trips, dining at Oak Brook's top restaurants, or attending events at Oakbrook Center. Relax — we'll handle the driving and parking.</p>
                    <a href="{{ route('chauffeur-services') }}" class="btn btn-sm btn-dark">Learn More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h3 class="h5 fw-bold">Executive Transport Oak Brook</h3>
                    <p>For Oak Brook's executive community, Spot Limo offers discreet, professional black car service for all occasions. Our drivers are background-checked, professionally dressed, and knowledgeable about Oak Brook's business landscape.</p>
                    <a href="{{ route('executive-transport') }}" class="btn btn-sm btn-dark">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Why Choose Section --}}
    <div class="row mb-5 bg-light p-4 rounded">
        <div class="col-12">
            <h2 class="fw-bold mb-4">Why Oak Brook Chooses Spot Limo</h2>
        </div>
        <div class="col-md-3 text-center mb-3">
            <div class="display-6 fw-bold text-dark">24/7</div>
            <p>Available around the clock for all Oak Brook pickups</p>
        </div>
        <div class="col-md-3 text-center mb-3">
            <div class="display-6 fw-bold text-dark">5★</div>
            <p>Top-rated luxury transportation in Oak Brook</p>
        </div>
        <div class="col-md-3 text-center mb-3">
            <div class="display-6 fw-bold text-dark">Local</div>
            <p>Based in Oakbrook Terrace — minutes from Oak Brook</p>
        </div>
        <div class="col-md-3 text-center mb-3">
            <div class="display-6 fw-bold text-dark">5</div>
            <p>Luxury vehicle types available</p>
        </div>
    </div>

    {{-- Fleet Section --}}
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="fw-bold mb-4">Our Fleet Available in Oak Brook</h2>
            <p>All vehicles are professionally maintained, fully insured, and driven by licensed chauffeurs serving Oak Brook and surrounding suburbs:</p>
        </div>
        <div class="col-md-4 mb-3">
            <h4 class="h6 fw-bold">✓ Black Sedan</h4>
            <p>Ideal for executive travel and airport transfers. Up to 3 passengers.</p>
        </div>
        <div class="col-md-4 mb-3">
            <h4 class="h6 fw-bold">✓ Luxury SUV</h4>
            <p>Perfect for families and small groups. Up to 7 passengers.</p>
        </div>
        <div class="col-md-4 mb-3">
            <h4 class="h6 fw-bold">✓ Stretch Limousine</h4>
            <p>Classic choice for weddings and special events. Up to 8 passengers.</p>
        </div>
        <div class="col-md-4 mb-3">
            <h4 class="h6 fw-bold">✓ Stretch SUV</h4>
            <p>Ultimate luxury for larger groups. Up to 14 passengers.</p>
        </div>
        <div class="col-md-4 mb-3">
            <h4 class="h6 fw-bold">✓ Executive Van</h4>
            <p>Best for corporate groups. Up to 15 passengers.</p>
        </div>
        <div class="col-md-4 mb-3 d-flex align-items-center">
            <a href="{{ route('vehicle-rates') }}" class="btn btn-dark">View Full Fleet</a>
        </div>
    </div>

    {{-- Local Area Section --}}
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="fw-bold mb-4">Serving Oak Brook & Surrounding Suburbs</h2>
            <p>Based in nearby Oakbrook Terrace, Spot Limo provides pickup and drop-off throughout Oak Brook and all surrounding communities:</p>
            <div class="row">
                <div class="col-md-3"><ul>
                    <li><a href="{{ url('/limo-service-hinsdale-il') }}">Hinsdale</a></li>
                    <li><a href="{{ url('/limo-service-burr-ridge-il') }}">Burr Ridge</a></li>
                    <li><a href="{{ url('/limo-service-westmont-il') }}">Westmont</a></li>
                </ul></div>
                <div class="col-md-3"><ul>
                    <li><a href="{{ url('/limo-service-downers-grove-il') }}">Downers Grove</a></li>
                    <li><a href="{{ url('/limo-service-elmhurst-il') }}">Elmhurst</a></li>
                    <li><a href="{{ url('/limo-service-lombard-il') }}">Lombard</a></li>
                </ul></div>
                <div class="col-md-3"><ul>
                    <li><a href="{{ url('/limo-service-naperville-il') }}">Naperville</a></li>
                    <li><a href="{{ url('/limo-service-wheaton-il') }}">Wheaton</a></li>
                    <li><a href="{{ url('/limo-service-schaumburg-il') }}">Schaumburg</a></li>
                </ul></div>
            </div>
        </div>
    </div>

    {{-- FAQ Section --}}
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="fw-bold mb-4">Frequently Asked Questions — Oak Brook Limo Service</h2>
        </div>
        <div class="col-12 mb-3">
            <h3 class="h5 fw-bold">How much does a limo from Oak Brook to O'Hare cost?</h3>
            <p>Sedan transfers from Oak Brook to O'Hare typically start around $65–$85. SUVs start around $85–$110. Call 630-290-1761 or book online for instant pricing with no hidden fees.</p>
        </div>
        <div class="col-12 mb-3">
            <h3 class="h5 fw-bold">Do you serve McDonald's HQ and corporate campuses in Oak Brook?</h3>
            <p>Yes — Spot Limo regularly serves Oak Brook's corporate community including McDonald's headquarters, Ace Hardware, and other corporate campuses for executive transportation, client pickups, and employee shuttles.</p>
        </div>
        <div class="col-12 mb-3">
            <h3 class="h5 fw-bold">Can I book a limo for Drury Lane events in Oak Brook?</h3>
            <p>Absolutely. We provide door-to-door service to Drury Lane Theatre, including pre-show dinners and post-show pickups. Hourly chauffeur service is perfect for Oak Brook dinner and show packages.</p>
        </div>
        <div class="col-12 mb-3">
            <h3 class="h5 fw-bold">Is Spot Limo available 24/7 in Oak Brook?</h3>
            <p>Yes. Our Oak Brook limo service operates 24 hours a day, 7 days a week including all holidays. We specialize in early morning airport runs and late night event pickups throughout Oak Brook.</p>
        </div>
    </div>

    {{-- CTA Section --}}
    <div class="row bg-dark text-white p-5 rounded text-center">
        <div class="col-12">
            <h2 class="fw-bold mb-3">Book Your Oak Brook Limo Today</h2>
            <p class="lead mb-4">Professional, affordable luxury transportation in Oak Brook, IL. Available 24/7 for airport transfers, corporate travel, weddings, and special events.</p>
            <a href="{{ url('/#bookingBlock') }}" class="btn btn-light btn-lg me-3">Book Online Now</a>
            <a href="tel:+16302901761" class="btn btn-outline-light btn-lg">Call 630-290-1761</a>
        </div>
    </div>

</div>

@endsection