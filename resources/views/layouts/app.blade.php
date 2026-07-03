<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NTRM2SQ');</script>
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="canonical" href="{{ url()->current() }}" />

    @php
        $currentSlug = Request::path();
        $meta = config('meta');
        $metaDescription = $meta[$currentSlug] ?? '';
    @endphp

    <link rel="icon" type="image/x-icon" href="{{ Vite::asset('resources/images/logo/favicon.png') }}">

    <title>{{ isset($pageTitle) ? $pageTitle . ' | Luxury Limo & Black Car Service Chicago Suburbs IL' : 'Spot Limo - Luxury Limo & Black Car Service Chicago Suburbs IL' }}</title>

    <meta name="description" content="@php
        if (isset($description) && $description !== '') {
            echo $description;
        } elseif (isset($metaDescription) && $metaDescription !== '') {
            echo $metaDescription;
        } else {
            echo 'Spot Limo offers premium black car & limousine service across 20 Chicago suburbs. 24/7 airport transfers, weddings & corporate travel. Call 630-290-1761.';
        }
    @endphp" />

    <!-- Open Graph -->
    <meta property="og:title"       content="{{ $pageTitle ?? 'Spot Limo | Luxury Limo & Black Car Service Chicago Suburbs IL' }}">
    <meta property="og:description" content="{{ $metaDescription ?? 'Spot Limo offers premium black car & limousine service across 20 Chicago suburbs. 24/7 airport transfers, weddings & corporate travel.' }}">
    <meta property="og:url"         content="{{ url()->current() }}">
    <meta property="og:type"        content="website">
    <meta property="og:image"       content="{{ Vite::asset('resources/images/logo/favicon.png') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Business Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LimousineService",
        "name": "Spot Limo LLC",
        "telephone": "630-290-1761",
        "email": "info@spotlimo.com",
        "url": "https://www.spotlimo.com",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "1 Mid America Plaza",
            "addressLocality": "Oakbrook Terrace",
            "addressRegion": "IL",
            "postalCode": "60181"
        },
        "areaServed": [
            "Naperville","Schaumburg","Oak Brook","Hinsdale","Elmhurst",
            "Downers Grove","Wheaton","Lombard","Burr Ridge","Lisle",
            "Bolingbrook","Aurora","Barrington","Itasca","Roselle",
            "Carol Stream","Glen Ellyn","Westmont","Clarendon Hills",
            "Villa Park","Addison","Oakbrook Terrace"
        ],
        "openingHours": "Mo-Su 00:00-24:00",
        "priceRange": "$$"
    }
    </script>

    <!-- Styles -->
    @vite(['resources/sass/app.scss'])
    @vite(['resources/css/circle.css'])
    @yield('customStyles')
    @yield('sliderCSS')
    @yield('testimsliderCSS')

    <!-- WhatsApp Button Style -->
    <style>
        #whatsapp-button {
            position: fixed;
            bottom: 50px;
            right: 50px;
            z-index: 9999;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            box-shadow: rgba(255,255,255,0.1) 0px 1px 1px 0px inset,
                        rgba(50,50,93,0.25) 0px 50px 100px -20px,
                        rgba(0,0,0,0.3) 0px 30px 60px -30px;
            overflow: hidden;
            animation: bounce 1s infinite;
        }
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            25%, 75%  { transform: translateY(-15px); }
            50%       { transform: translateY(-10px); }
        }
    </style>

</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NTRM2SQ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- WhatsApp Button -->
    <div id="whatsapp-button">
        <a href="https://api.whatsapp.com/send?phone=16302901761&text=Let%27s%20Talk%20!" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="60px" height="60px" fill-rule="evenodd" clip-rule="evenodd">
                <path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"/>
                <path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"/>
                <path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"/>
                <path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"/>
                <path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"/>
            </svg>
        </a>
    </div>

    <div id="app">
        @include('components.header')

        <main>
            <div class="container-fluid px-0">
                @yield('content')
            </div>
        </main>

        @include('components.footer')
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    @vite(['resources/js/app.js'])
    @vite(['resources/js/circle.js'])
    @yield('scripts')
    @yield('sliderJS')
    @yield('testimsliderJS')

    <script>
        $(document).ready(function() {
            $(".hamburger-wrp").on("click", function() {
                $(this).toggleClass('active');
                $(".navigation").toggleClass('active');
                $(".testi").toggleClass('active');
                $("body").toggleClass('no-scroll');
            });

            $(".navigation .links .nav-items .dropdown-wrp .down-arrow").on("click", function() {
                $(this).parents('.dropdown-wrp').toggleClass('active').siblings().removeClass('active');
            });

            $("#backToTop").on("click", function() {
                $("body, html").scrollTop(0);
            });
        });
    </script>

    @if (session('success'))
        <script>
            alert('{{ session('success') }}');
        </script>
    @endif

</body>

</html>