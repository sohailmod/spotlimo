<nav class="navbar main-navbar">
    <style>
        nav.main-navbar {
            height: 72px;
        }
        nav.main-navbar .container-wrp .navigation-wrapper {
            height: 72px;
        }
        nav.main-navbar .container-wrp .logo-wrapper {
            max-width: 176px;
        }
        nav.main-navbar .container-wrp .navigation-wrapper .navigation .links .nav-items {
            align-items: center;
        }
        nav.main-navbar .container-wrp .navigation-wrapper .navigation .links .nav-items .call-us-item .wrapper {
            padding: 9px 18px 8px;
            border-radius: 24px;
            background-color: rgba(3, 128, 136, 1);
            text-decoration: none;
            margin-left: 8px;
        }
        nav.main-navbar .container-wrp .navigation-wrapper .navigation .links .nav-items .call-us-item .wrapper span,
        nav.main-navbar .container-wrp .navigation-wrapper .navigation .links .nav-items .call-us-item .wrapper i {
            color: #f8f4e8;
        }
        nav.main-navbar .container-wrp .navigation-wrapper .navigation .links .nav-items .call-us-item .wrapper .phone-number {
            font-weight: 700;
            line-height: 1.1;
        }
        @media (max-width: 991.98px) {
            nav.main-navbar .container-wrp .logo-wrapper {
                max-width: 144px;
            }
        }
        @media (max-width: 767.98px) {
            nav.main-navbar {
                height: 56px;
            }
            nav.main-navbar .container-wrp .navigation-wrapper {
                height: 56px;
            }
            nav.main-navbar .container-wrp .logo-wrapper {
                max-width: 124px;
            }
        }
    </style>
    <div class="container-wrp container-lg">

        <div class="d-flex w-100 justify-content-between">

            {{-- Logo --}}
            <div class="col-lg-auto col-md-2 logo-wrapper">
                <div class="logo">
                    <a href="{{ route('home') }}" class="d-block">
                        <div class="desktop-logo app-logo">
                            <img src="{{ Vite::asset('resources/images/logo/desktop-logo-full.png') }}" alt="Spot Limo - Luxury Limo & Black Car Service Chicago Suburbs" class="img-fluid">
                        </div>
                    </a>
                </div>
            </div>

            {{-- Navigation --}}
            <div class="col-lg-8 col-md-8 navigation-wrapper">
                <div class="navigation">
                    <span class="d-md-none d-block testi"></span>
                    <div class="links">
                        <div class="nav-items">

                            {{-- Home --}}
                            <div class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">Home</a>
                            </div>

                            {{-- Services Dropdown --}}
                            <div class="nav-item dropdown-wrp">
                                <a class="nav-link" href="javascript:void(0)">Services</a>
                                <span class="down-arrow d-md-none d-flex">
                                    <i class="bi bi-caret-down-fill"></i>
                                </span>
                                <div class="dropdown-menu-wrp sub-dropdown">

                                    {{-- Airport Transportation --}}
                                    <div class="nav-item sub-dropdown-wrp">
                                        <a class="nav-link" href="{{ route('airport-services') }}">Airport Transportation</a>
                                        <span><i class="bi bi-caret-down-fill"></i></span>
                                        <div class="nav-item sub-dropdown-menu">
                                            <div class="nav-item"><a class="nav-link" href="{{ route('ohare-airport') }}">O'Hare Airport</a></div>
                                            <div class="nav-item"><a class="nav-link" href="{{ route('midway-signature') }}">Midway Signature Airport</a></div>
                                            <div class="nav-item"><a class="nav-link" href="{{ route('milwaukee-airport') }}">Milwaukee International Airport</a></div>
                                            <div class="nav-item"><a class="nav-link" href="{{ route('dupage-airport') }}">Dupage Airport</a></div>
                                            <div class="nav-item"><a class="nav-link" href="{{ route('chicago-airport') }}">Chicago Executive Airport</a></div>
                                            <div class="nav-item"><a class="nav-link" href="{{ route('gary-international') }}">Gary International Airport</a></div>
                                        </div>
                                    </div>

                                    {{-- Chauffeur Services --}}
                                    <div class="nav-item sub-dropdown-wrp">
                                        <a class="nav-link" href="{{ route('chauffeur-services') }}">Reasonable Chauffeur Services</a>
                                        <span><i class="bi bi-caret-down-fill"></i></span>
                                        <div class="nav-item sub-dropdown-menu">
                                            <div class="nav-item"><a class="nav-link" href="{{ route('chauffeur-services-chicago') }}">Chauffeur Services</a></div>
                                            <div class="nav-item"><a class="nav-link" href="{{ route('multilingual-chauffeurs-services') }}">Multilingual Chauffeurs Services</a></div>
                                            <div class="nav-item"><a class="nav-link" href="{{ route('chauffeur-services-major') }}">Chauffeur Services Major</a></div>
                                        </div>
                                    </div>

                                    {{-- Hourly Executive --}}
                                    <div class="nav-item sub-dropdown-wrp">
                                        <a class="nav-link" href="{{ route('executive-transport') }}">Hourly Executive Transportation</a>
                                        <span><i class="bi bi-caret-down-fill"></i></span>
                                        <div class="nav-item sub-dropdown-menu">
                                            <div class="nav-item"><a class="nav-link" href="{{ route('business-trip') }}">Business Trip</a></div>
                                            <div class="nav-item"><a class="nav-link" href="{{ route('family-get-together') }}">Family Get Together</a></div>
                                            <div class="nav-item"><a class="nav-link" href="{{ route('sports-event') }}">Sports Events</a></div>
                                            <div class="nav-item"><a class="nav-link" href="{{ route('concerts') }}">Concerts And Party</a></div>
                                            <div class="nav-item"><a class="nav-link" href="{{ route('conventions') }}">Conventions</a></div>
                                        </div>
                                    </div>

                                    {{-- Special Occasions --}}
                                    <div class="nav-item sub-dropdown-wrp">
                                        <a class="nav-link" href="{{ route('wedding-transport') }}">Special Occasions Services</a>
                                        <span><i class="bi bi-caret-down-fill"></i></span>
                                        <div class="nav-item sub-dropdown-menu">
                                            <div class="nav-item"><a class="nav-link" href="{{ route('wedding-services') }}">Wedding Day</a></div>
                                            <div class="nav-item"><a class="nav-link" href="{{ route('prom-nights') }}">Prom Nights</a></div>
                                            <div class="nav-item"><a class="nav-link" href="{{ route('holiday-parties') }}">Holiday Parties</a></div>
                                            <div class="nav-item"><a class="nav-link" href="{{ route('independence-day') }}">Independence Day Celebration</a></div>
                                            <div class="nav-item"><a class="nav-link" href="{{ route('newyear-nights') }}">New Year's Night Out</a></div>
                                        </div>
                                    </div>

                                    {{-- Interstate Services --}}
                                    <div class="nav-item sub-dropdown-wrp">
                                        <a class="nav-link" href="{{ route('interstate-transport') }}">Interstate Services</a>
                                        <span><i class="bi bi-caret-down-fill"></i></span>
                                        <div class="nav-item sub-dropdown-menu">
                                            <div class="nav-item"><a class="nav-link" href="{{ route('corporate-travel') }}">Corporate Travel Service</a></div>
                                            <div class="nav-item"><a class="nav-link" href="{{ route('luxury-car') }}">Luxury Car Charter</a></div>
                                            <div class="nav-item"><a class="nav-link" href="{{ route('local-attraction') }}">Local Attractions</a></div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            {{-- Fleet --}}
                            <div class="nav-item">
                                <a class="nav-link" href="{{ route('vehicle-rates') }}">Fleet</a>
                            </div>

                            {{-- About --}}
                            <div class="nav-item">
                                <a class="nav-link" href="{{ route('about') }}">About</a>
                            </div>

                            {{-- Blogs --}}
                            <div class="nav-item">
                                <a class="nav-link" href="{{ route('our-blogs') }}">Blogs</a>
                            </div>

                            {{-- FAQ --}}
                            <div class="nav-item">
                                <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
                            </div>

                            {{-- Contact --}}
                            <div class="nav-item">
                                <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                            </div>

                            {{-- Call Button --}}
                            <div class="nav-item call-us-item d-none d-md-block">
                                <a href="tel:+1{{ str_replace('-', '', theme_options()->where('key', 'hotline')->first()->value) }}"
                                    class="wrapper d-flex align-items-center">
                                    <span class="d-sm-block d-none me-2">
                                        <i class="bi bi-telephone-fill"></i>
                                    </span>
                                    <span class="d-flex flex-column mb-1">
                                        <span>Call Us</span>
                                        <span class="phone-number">{{ theme_options()->where('key', 'hotline')->first()->value }}</span>
                                    </span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            {{-- Hamburger --}}
            <div class="hamburger-wrp d-flex d-md-none">
                <span></span>
                <span></span>
                <span></span>
            </div>

        </div>
    </div>
</nav>

<button type="button" class="btn backtotop" id="backToTop">
    <i class="bi bi-arrow-up"></i>
</button>

@section('scripts')
    <script></script>
@endsection