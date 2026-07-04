@extends('layouts.app')

@section('content')

    <div class="w-100 hero-section-wrp">
        <div class="hero-content-wrp">
            <div class="img-wrp">
                <div class="img-hero" style="background-image: url('{{ Vite::asset('resources/images/banners/hero-img.png') }}')">

                    <div class="hero-text-content-wrp">
                        <div class="container-lg">
                            <div class="col-xxl-7 col-xl-9 col-lg-10 col-md-8 col-12   ">
                                <div class="hero-title-wrp mt-5">
                                    <h1 > 
                                        Luxurious Limousine and Black Car Service Everyone Can Afford
                                    </h1>
                                </div>
                                <div class="hero-btns-wrp">
                                    <span class="guide-text">Spot Limo brings Black Sedans, Stretch limousines, Luxurious SUVs, and party bus rentals for every special occasion. You can experience the exquisite drive for all occasions and events at the most affordable hourly rates.</span>
                                    <div class="btns-wrp d-flex align-items-center flex-sm-row flex-column">


                                        <div class="bookNow-btn-wrp">
                                            <a href="#bookingBlock" class="btn btn-default btn-book-now btn-wide icon-btn">
                                                Book Now
                                                <i class="bi bi-arrow-right-circle-fill"></i>
                                            </a>
                                        </div>
                                        <span>Or</span>
                                        <div class="text-call-btn-wrp">
                                            <a href="tel:+1{{str_replace('-','',theme_options()->where('key', 'hotline')->first()->value)}}" class="btn btn-outlined btn-darkbg btn-text-call">
                                                Text/Call :  {{ theme_options()->where('key', 'hotline')->first()->value }}
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <span class="overlay"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="container-md booking-block-mainwrp" id="bookingBlock">
        @include('components.vehicles-card-slider')
    </div>

    <div class="w-100 our-services-section ">
        <div class="services-content">
            <div class="services-title">
                <h1 class="title">Our Services</h1>
                <span class="overlay-title">Affordable Transportation Services We Offer</span>
            </div>
            <div class="services-cards">
                <div class="row mx-0 px-0">
                    <div class="col-lg-4 col-md-6 col-sm-6 service-card card-airport-tra px-0">
                        <a href="{{ route('airport-services') }}" class="d-block">
                            <div class="img-wrp">
                                <img src="{{ Vite::asset('resources/images/services/airport-tra.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="text-wrp">
                                <div class="title-wrp">
                                    <h4 class="title" ><span>Airport Transportation</span></h4>
                                </div>
                                <div class="sub-text-wrp">
                                    <p class="mb-0">We provide luxurious to and from transportation services from all major airports within Illinois and its suburbs. Our vehicles include Stretch Limo, a Town Car, and a luxury SUV.</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 service-card card-chauffeur-tra px-0">
                        <a href="{{  route('chauffeur-services') }}" class="d-block">
                            <div class="img-wrp">
                                <img src="{{ Vite::asset('resources/images/services/chauffeur-tra.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="text-wrp">
                                <div class="title-wrp">
                                    <h4 class="title" ><span>Reasonable Chauffeur Services</span></h4>
                                </div>
                                <div class="sub-text-wrp">
                                    <p class="mb-0">We have chauffeurs with a clean driving record as we aim to provide 24/7 chauffeur limousine car service all over Illinois without any inconvenience. </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 service-card card-executive-tra px-0">
                        <a href="{{  route('executive-transport') }}" class="d-block">
                            <div class="img-wrp">
                                <img src="{{ Vite::asset('resources/images/services/executive-tra.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="text-wrp">
                                <div class="title-wrp">
                                    <h4 class="title" ><span>Hourly Executive Transportation
                                    </span></h4>
                                </div>
                                <div class="sub-text-wrp">
                                    <p class="mb-0">You can trust our inexpensive hourly executive transportation services for your business and family trips.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 service-card card-wedding-tra px-0">
                        <a href="{{  route('wedding-transport') }}" class="d-block">
                            <div class="img-wrp">
                                <img src="{{ Vite::asset('resources/images/services/wedding-tra.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="text-wrp">
                                <div class="title-wrp">
                                    <h4 class="title" ><span>Wedding Limo Services</span></h4>
                                </div>
                                <div class="sub-text-wrp">
                                    <p class="mb-0">We offer wedding limo services with personalized and luxurious features. Whether you want a venue appearance in an elegant limousine or need ground transportation services to pick up and drop off guests, we got you covered.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 service-card card-interstate-tra px-0">
                        <a href="{{  route('interstate-transport') }}" class="d-block">
                            <div class="img-wrp">
                                <img src="{{ Vite::asset('resources/images/services/interstate-tra.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="text-wrp">
                                <div class="title-wrp">
                                    <h4 class="title" ><span>Interstate Service</span></h4>
                                </div>
                                <div class="sub-text-wrp">
                                    <p class="mb-0">We can serve you all over the Illinois area. You can count on us for all your ground transportation requirement. You can book a ride by visiting our website at any time or calling us.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 service-card card-corporate-tra px-0">
                        <a href="{{  route('corporate-limo-transport') }}" class="d-block">
                            <div class="img-wrp">
                                <img src="{{ Vite::asset('resources/images/services/corporate-tra.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="text-wrp">
                                <div class="title-wrp">
                                    <h4 class="title" ><span>Corporate Limo Transportation
                                    </span></h4>
                                </div>
                                <div class="sub-text-wrp">
                                    <p class="mb-0">If your company’s guests or employees travel more often, our executive transportation is perfect for them. Our long-term reliable relationship with serving businesses makes us stand out.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-md home-contact-us-section contact-us-section pt-5 pb-5">
        <div class="contactus-content-wrp">
            <div class="img-wrp d-lg-block d-none">
                <img src="{{ Vite::asset('resources/images/banners/contact-us-banner.png') }}" alt="" class="img-fluid mx-auto d-block">
            </div>
            <div class="contact-us-form-wrp px-sm-5 px-3 py-4">

                <div class="sub-heading">
                    <h4 class="title mb-0">Contact Spot Limo Now &amp; Make Your Drive Easy,</h4>
                </div>
                <div class="form-wrp">
                    <div class="title-wrp">
                        <h1 class="title">Contact Us</h1>
                    </div>
                    <div class="intro pt-3">
                        <p class="mb-0 pb-3" style="border-bottom:1px solid black; ;font-size: 16px; font-style:italic;">Our professional
                            drivers and chauffeurs offer prompt pick-and-drop services.Besides, our response time and impressive reputation make us the best and most reliable limo rental and car service provider in Illinois.
                            <br>
                            <b>So, contact us now if you want to spend less and hire the best.</b>
                        </p>
                    </div>
                    @include('components.contact-us-form')
                </div>
            </div>
        </div>
    </div>

    <div class="container-md testimonials-secton">
        @include('components.testimonials')
    </div>

@endsection

@section('scripts')

<!-- Add the SweetAlert library -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function() {
        // Submit the form using AJAX
        $('#contactForm').on('submit', function(event) {
            event.preventDefault();

            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        // Call the success function and pass the success message
                        handleSuccess(response.message);
                    } else {
                        // Call the error function and pass the error message
                        handleError(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    // Call the error function for unexpected errors
                    handleError('An error occurred while submitting the form. Please try again later.');
                }
            });
        });
    });

    // Function to handle success messages using SweetAlert
    function handleSuccess(message) {
        Swal.fire({
            title: 'Success',
            text: message,
            icon: 'success',
            showConfirmButton: false,
            timer: 1500
        }).then(() => {
            // Optionally, you can redirect the user after success
            window.location.href = '{{ route("home") }}';
        });
    }

    // Function to handle error messages using SweetAlert
    function handleError(message) {
        Swal.fire({
            title: 'Error',
            text: message,
            icon: 'error',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
        });
    }
</script>

<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries=places"></script>
@stop
