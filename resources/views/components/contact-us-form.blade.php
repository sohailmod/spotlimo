<form id="contactForm"  action="{{  route('send.contact.mail') }}" method="POST">
    @csrf

    <div class="px-0 col-12 form-fields-main-wrp">
        <div class="row mx-0 mt-4">
            <div class="px-0 col-lg-6">
                <div class="mb-3 px-0 col-12 form-field email-field">
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Enter Your Name" value="{{ old('name') }}" required autocomplete="off">
                </div>
                <div class="mb-3 px-0 col-12 form-field email-field">
                    <input type="email" class="form-control" id="emailAddress" name="email"
                        placeholder="Enter Your Email Address" value="{{ old('email') }}" required autocomplete="off">
                </div>
                <div class="mb-0 px-0 col-12 form-field phonenumber-field">
                    <input type="number" class="form-control" id="contactNumber" name="phone_no"
                        placeholder="Enter Your Contact Number" value="{{ old('phone_no') }}" required autocomplete="off" placeholder="2241111111">
                </div>
                        <span> <i> contact should not be less than 10 digits i.e. <strong> 2241111111 </strong> </i> </span>

            </div>
            <div class="pe-lg-0 ps-lg-3 px-0 col-lg-6 mt-lg-0 mt-3">
                <div class="mb-3 pe-lg-0 px-0 col-12 form-field request-field ">
                    <textarea class="form-control" id="message" name="message" rows="3" minlength="10" placeholder="Write here..." required>{{ old('message') }}</textarea>
                </div>
            </div>
            <div class="px-0 col-lg-12 mt-3 ">
                <div class="row mx-auto">
                    <div class="mb-3 ps-0 col-lg-auto col-sm-12 form-field mt-2">
                        <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                        @if ($errors->has('g-recaptcha-response'))
                            <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                        @endif
                    </div>

                    <div class="mb-3 col-lg col-sm-12 ps-lg-3 ps-0 form-field mt-2">
                        <button type="submit" class="btn btn-default rounded-sm btn-send-message ">Submit Your Request</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>
