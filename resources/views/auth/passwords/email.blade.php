@extends('layouts.app')

@section('content')
<div class="container auth-wrapper email-enter-wrapper">
    <div class="row justify-content-center row-wrapper">
        <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-8">
            <div class="card">
                <div class="header text-center mb-3">
                    <i class="bi bi-envelope-paper-fill"></i>
                    <h1>{{ __('Reset Password') }}</h1>
                    {{-- <h4>Sign In to your Account</h4> --}}
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success col-xxl-10 col-xl-10 col-lg-11 mx-auto" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{  route('password.email') }}">
                        @csrf

                        <div class="row mb-2">

                            <div class="col-xxl-10 col-xl-10 col-lg-11  mx-auto">
                                <label for="email" class="col-form-label">{{ __('Email Address') }}</label>

                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>

                        <div class="col-xxl-10 col-xl-9 col-lg-10  mx-auto auth-btn-wrp">
                            <div class="px-0">
                                <button type="submit" class="btn btn-primary w-100 login-btn">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
