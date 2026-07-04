@extends('layouts.app')

@section('customStyles')
@vite(['resources/css/square.css'])
@endsection

@section('content')

<div class="container auth-wrapper login-wrapper payments-portal-wrapper">
    <div class="row justify-content-center row-wrapper">
        <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="details-wrp">
                        <div class="row mb-2 detail-block">
                            <div class="col-xxl-10 col-xl-10 col-lg-11 mx-auto">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="data-heading">Reservation ID</div>
                                        <div class="data-content">{{ $reservation->code ?? 'N/A' }}</div>
                                    </div>
                                    <div class="col-6">
                                        <div class="data-heading">Date</div>
                                        <div class="data-content">
                                            {{ isset($reservation->date) ? format_date($reservation->date) : 'N/A' }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Enquiry section --}}
                    <div class="text-center mt-4">
                        <p class="mb-3" style="font-size:18px;">
                            To proceed with your booking, please send us an enquiry.
                        </p>
                        <a href="{{ route('contact') }}" class="btn btn-primary">
                            <i class="bi bi-envelope me-2"></i> Send Enquiry
                        </a>
                    </div>
                </div>
            </div>

            <div class="backtohome text-center mt-5">
                <a href="{{ route('home') }}" class="btn btn-outlined back-to-home">
                    <i class="bi bi-arrow-left me-2"></i> Back to Home
                </a>
            </div>
        </div>
    </div>
</div>

@stop
