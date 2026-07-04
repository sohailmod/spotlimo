@extends('layouts.app')

@section('customStyles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css">


    <style>
        #error-msg {
            color: red;
        }

        .valid-msg {
            color: #06D85F;
        }
        .hide{
            display: none;
        }
    </style>
@endsection


@section('customStyles')

@endsection

@section('content')
    <div class="container auth-wrapper register-wrapper">
        <div class="row row-wrapper justify-content-center">
            <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-8">
                <div class="card">
                    <div class="header text-center">
                        <i class="bi bi-person-circle"></i>
                        <h1>Welcome !</h1>
                        <h4>Create Your Account</h4>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{  route('register') }}">
                            @csrf

                            <div class="row mb-2">

                                <div class="col-xxl-10 col-xl-10 col-lg-11  mx-auto">
                                    <label for="name" class="col-form-label  ">{{ __('Name') }}</label>

                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-2">

                                <div class="col-xxl-10 col-xl-10 col-lg-11  mx-auto">
                                    <label for="email" class="col-form-label  ">{{ __('Email Address') }}</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-2">

                                <div class="col-xxl-10 col-xl-10 col-lg-11 d-flex flex-column  mx-auto">
                                    <label for="phone" class="col-form-label  ">{{ __('Phone Number') }}</label>

                                    <input id="phoneNumber" type="number"
                                        class="form-control @error('phone') is-invalid @enderror" name="phone" required

                                        minlength="10" maxlength="10">

                                    <span id="valid-msg" class="hide valid-msg">✓ Valid</span>
                                    <span id="error-msg" class="hide"></span>

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-2">

                                <div class="col-xxl-10 col-xl-10 col-lg-11  mx-auto">
                                    <label for="password" class=" col-form-label  ">{{ __('Password') }}</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-2">

                                <div class="col-xxl-10 col-xl-10 col-lg-11  mx-auto">
                                    <label for="password-confirm"
                                        class=" col-form-label  ">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="col-xxl-10 col-xl-9 col-lg-10  mx-auto auth-btn-wrp">
                                <div class="px-0">
                                    <button type="submit" id="login-btn" class="btn btn-primary w-100 login-btn">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>

                            <div class="col-12 link-wrapper bottom-link">
                                <div class="form-check">
                                    <p class="mb-0"> Existing Member ?
                                        <a class="btn-link" href="{{  route('login') }}">
                                            Sign In Here !
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')

    <script src="{{ asset('vendor/intlTellInput/intlTelInput.js') }}"></script>

    <script>
        var input = document.querySelector("#phoneNumber"),
            continueBtn = document.querySelector("#login-btn"),
            errorMsg = document.querySelector("#error-msg"),
            validMsg = document.querySelector("#valid-msg");
        var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

        continueBtn.disabled = false;

        var iti = window.intlTelInput(input, {
            allowDropdown: false,
            onlyCountries: ['us'],
            separateDialCode: true,
            formatOnDisplay: true,
            autoPlaceholder: "off",
            utilsScript: "{{ asset('vendor/intlTellInput/utils.js') }}",
        });

        var reset = function() {
            input.classList.remove("error");
            errorMsg.innerHTML = "";
            errorMsg.classList.add("hide");
            validMsg.classList.add("hide");
        };
        input.addEventListener('blur', function() {
            reset();
            if (input.value.trim()) {
                if (iti.isValidNumber()) {
                    validMsg.classList.remove("hide");
                    continueBtn.disabled = false;
                } else {
                    input.classList.add("error");
                    var errorCode = iti.getValidationError();
                    errorMsg.innerHTML = errorMap[errorCode];
                    errorMsg.classList.remove("hide");
                    continueBtn.disabled = true;
                }
            }
        });
        input.addEventListener('change', reset);
    </script>
@endsection
