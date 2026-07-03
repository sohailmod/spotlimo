@extends('layouts.app')

@php
    use Illuminate\Support\Facades\Route;
@endphp


@section('content')
<div class="container auth-wrapper login-wrapper">
    <div class="row justify-content-center  row-wrapper">
        <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-8" >
            <div class="card">
                {{-- <div class="card-header">{{ __('Login') }}</div> --}}

                <div class="header text-center">
                    <i class="bi bi-door-open-fill"></i>
                    <h1>Welcome !</h1>
                    <h4>Sign In to your Account</h4>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{  route('login') }}">
                        @csrf

                        <div class="row mb-2">
                            
                            <div class="col-xxl-10 col-xl-10 col-lg-11  mx-auto">
                                <label for="email" class="col-form-label  ">{{ __('Email Address') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email Address" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            
                            <div class="col-xxl-10 col-xl-10 col-lg-11  mx-auto">
                                <label for="email" class="col-form-label  ">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    
                        <div class="col-xxl-10 col-xl-10 col-lg-11  mx-auto my-ms-3 mt-4 mb-2 ">
                            <div class="row mb-2 justify-content-sm-between justify-content-center">
                                <div class="col-sm-6 col-12">
                                    <div class="form-check d-sm-block d-flex justify-content-center">
                                        <input class="form-check-input " type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label ml-3" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12 link-wrapper">
                                    <div class="form-check">
                                        @if ( route::has('password.request'))
                                            <a class="btn-link" href="{{  route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-10 col-xl-9 col-lg-10  mx-auto auth-btn-wrp">
                                <div class="px-0">
                                    <button type="submit" class="btn btn-primary w-100 login-btn">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                        </div>

                        <div class="col-12 link-wrapper bottom-link d-none">
                            <div class="form-check">
                               <p class="mb-0"> New Member ?
                                <a class="btn-link" href="{{  route('register') }}">
                                    Create A New Account !
                                </a></p>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
