@section('sliderCSS')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css">
@endsection

@section('customStyles')
    <style>
        #error-msg {
            color: red;
        }

        #error-booking-phone-msg {
            color: red;
        }

        .valid-msg {
            color: #06D85F;
        }

        .hide {
            display: none;
        }

        /* Submit Enquiry Button - Golden Theme */
        .btn-book-now {
            background: linear-gradient(135deg, #FFD700 0%, #FFA500 100%);
            border: none;
            color: #2c3e50;
            padding: 12px 30px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 215, 0, 0.3);
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            overflow: hidden;
        }

        .btn-book-now:hover {
            background: linear-gradient(135deg, #FFA500 0%, #FF8C00 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 215, 0, 0.4);
            color: #2c3e50;
        }

        .btn-book-now:active {
            transform: translateY(0);
            box-shadow: 0 3px 10px rgba(255, 215, 0, 0.3);
        }

        .btn-book-now:disabled {
            background: #6c757d;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
            color: white;
        }

        .btn-book-now::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            transition: left 0.5s;
        }

        .btn-book-now:hover::before {
            left: 100%;
        }

        /* Custom Time Picker Styling */
        .time-input-wrapper {
            background: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 2px;
            gap: 2px;
            align-items: center;
        }

        .time-select {
            border: none;
            padding: 8px 6px;
            font-size: 14px;
            font-weight: 500;
            background: transparent;
            color: #2c3e50;
            text-align: center;
            min-width: 60px;
        }

        .time-select:focus {
            outline: none;
            box-shadow: none;
            background: #f8f9fa;
        }

        .time-separator {
            font-weight: bold;
            color: #6c757d;
            padding: 0 2px;
        }

        .dateTime-picker label {
            position: absolute;
            right: 8px;
            top: 50%;
            transform: translateY(-50%);
            color: #FFA500;
            pointer-events: none;
            font-size: 10px;
            z-index: 1;
        }

        .dateTime-picker label i {
            font-size: 12px;
        }

        .dateTime-picker {
            position: relative;
        }

        /* Adjust time picker positioning to avoid icon overlap */
        .time-input-wrapper {
            background: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 2px;
            gap: 2px;
            align-items: center;
            padding-right: 30px;
        }

        .vehicle-preview-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
            gap: 12px;
            margin: 18px 0 8px;
        }

        .vehicle-preview-card {
            border: 1px solid #e5e5e5;
            border-radius: 12px;
            overflow: hidden;
            background: #fff;
            text-align: center;
        }

        .vehicle-preview-card img {
            width: 100%;
            height: 90px;
            object-fit: cover;
            display: block;
        }

        .vehicle-preview-card p {
            margin: 0;
            padding: 8px 6px;
            font-size: 13px;
            font-weight: 600;
            color: #2c3e50;
        }

        /* Ensure slider vehicle thumbnails render above decorative pseudo layers */
        .dotCircle .itemDot .swiper-slide,
        .dotCircle .itemDot .content,
        .dotCircle .itemDot .img-wrapper,
        .contentCircle .CirItem .swiper-slide,
        .contentCircle .CirItem .content,
        .contentCircle .CirItem .img-wrapper {
            position: relative;
            z-index: 6;
        }

        .dotCircle .itemDot .img-wrapper img {
            display: block;
            width: 72px;
            height: 72px;
            object-fit: contain;
            margin: 0 auto;
        }

        .contentCircle .CirItem .img-wrapper img {
            display: block;
            width: 180px;
            height: 90px;
            object-fit: contain;
            margin: 0 auto;
        }
    </style>
@endsection

<div class="main-form-wrapper mt-5">
    <form action="{{ route('store.reservations') }}" method="POST" id="payment-form">
        @csrf
        <div class="row form-row-wrp">

            <div class="title-wrp text-center">
                <h1>Please choose Vehicle and Date/Time</h1>
            </div>

            <div class="col-lg-12">
                <div class="vehicle-preview-grid">
                    @foreach (App\Models\VehicleType::orderBy('id', 'ASC')->where('is_enable', true)->get() as $vehicle)
                        <div class="vehicle-preview-card">
                            <img src="{{ asset('vehicle-type/' . $vehicle->image) }}" alt="{{ $vehicle->name }}" onerror="this.src='{{ asset('images/placeholder.png') }}'">
                            <p>{{ $vehicle->name }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Circle SLider --}}
            <div class="col-lg-12">
                <div class="circle-vehicle-slider">
                <div class="circle-vehicle-slider">
                    <div class="holderCircle">

                        @auth
                            <input type="hidden" name="passenger_id" value="{{ Auth::user()->id }}">
                        @endauth

                        <input type="hidden" class="totalDist" name="totalDist" id="totalDist">

                        <div class="dotCircle">
                            @foreach (App\Models\VehicleType::orderBy('id', 'ASC')->where('is_enable', true)->get() as $vehicle)
                                <span
                                    class="itemDot @if ($vehicle->id == 1) active @endif itemDot{{ $vehicle->id }}"
                                    data-tab="{{ $vehicle->id }}">
                                    <div class="swiper-slide">
                                        <div class="content">
                                            <div class="img-wrapper">
                                                <img src="{{ asset('vehicle-type/' . $vehicle->image) }}" alt="{{ $vehicle->name }}"
                                                    class="img-fluid" onerror="this.src='{{ asset('images/placeholder.png') }}'">
                                            </div>
                                        </div>
                                    </div>
                                    <span class="forActive"></span>
                                </span>
                            @endforeach
                        </div>

                        <div class="contentCircle">
                            @foreach (App\Models\VehicleType::orderBy('id', 'ASC')->where('is_enable', true)->get() as $vehicle)
                                <div
                                    class="CirItem  @if ($vehicle->id == 1) active @endif CirItem{{ $vehicle->id }}">
                                    <div class="swiper-slide">
                                        <div class="content">
                                            <div class="img-wrapper">
                                                <img src="{{ asset('vehicle-type/' . $vehicle->image) }}" alt="{{ $vehicle->name }}"
                                                    class="img-fluid" onerror="this.src='{{ asset('images/placeholder.png') }}'">
                                            </div>
                                            <div
                                                class="vehicle-selector d-flex align-items-center justify-content-center">
                                                <div class="radio-wrp pt-1">
                                                    <input type="radio" name="vehicle_type_id"
                                                        id="{{ $vehicle->id }}" value="{{ $vehicle->id }}"
                                                        @if ($vehicle->id == 1) checked @endif
                                                        {{ old('vehicle_type_id') == $vehicle->id ? 'checked' : '' }}>
                                                    <label for="{{ $vehicle->id }}"></label>
                                                </div>
                                                <div class="title">
                                                    <h5 class="mb-0 ms-2">{{ $vehicle->name }}</h5>
                                                </div>
                                            </div>
                                            <div class="text-block">
                                                <div><i class="bi bi-people-fill"></i>
                                                    <span>{{ $vehicle->capacity_of_passenger }}</span>
                                                </div>
                                                <div><i class="bi bi-briefcase-fill"></i>
                                                    <span>{{ $vehicle->no_of_luggage }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
            {{-- Circle SLider --}}

            <div class="col-xl-10 col-lg-11 col-md-12 mx-auto">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="destination-picker my-3 container-960">
                            <div class="row">
                                @foreach (App\Models\ServiceType::orderBy('id', 'ASC')->get() as $service)
                                    <div class="col-lg-12 col-sm-6 mb-lg-3 mb-0 mt-lg-0 mt-3">
                                        <div class="card">
                                            <div class="radio-wrp">
                                                <input type="radio" class="CheckAirport-{{ $service->id }} service_type_id" id="service-{{ $service->id }}" name="service_id" value="{{ $service->id }}" {{ $service->id == 1 ? 'checked' : '' }} {{ old('service_id') == $service->id ? 'checked' : '' }}>
                                                <label for="service-{{ $service->id }}"><span>{{ $service->name }}</span></label>
                                            </div>
                                        </div>
                                        @if ($service->id === 4)
                                            <div class="hours-input-input-wrp pt-2 pb-3 px-1 w-100" style="display: none">
                                                <div>
                                                    <span>Enter hours <span>(Minimum 2 hours)</span></span>
                                                    <select class="custom-select hours w-100" id="hours" name="hours">
                                                        @for ($i = 2; $i <= 24; $i++)
                                                            <option value="{{ $i }}" {{ old('hours') == $i ? 'selected' : '' }}>{{ $i }} HRS</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9">
                        <div class="wrapper to-airport">
                            <div class="destination-addresses container-960">

                                <div class="col-12 mb-2 from-wrapper">
                                    <div class="input-wrp">
                                        <span class="inputlabel">From :</span>
                                        <div class="from-field-wrapper">
                                            <input class="w-100 destination-input" type="text" id="from" name="from[address]" value="{{ old('from.address') }}" placeholder="Enter Full Pick-Up Address & Select From Autocomplete" autocomplete="off">
                                            <i class="bi bi-chevron-down"></i>
                                            <select class="from-field airport-select" name="from[airport]" id="from-airport" style="position:absolute; top:0; height:42px; width:100%; left:0;">
                                                <option class="selected-placeholder" selected disabled value="">Select Airport</option>
                                                @foreach (App\Models\Airport::where('is_enable', true)->get() as $airport)
                                                    <option {{ old('from.airport') == $airport->address ? 'selected' : '' }} value="{{ $airport->address }}">{{ $airport->name }}</option>
                                                @endforeach
                                            </select>

                                            @error('from.address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            @error('from.airport')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <button class="btn btn-outline btn-add-destination d-none" type="button">
                                            <span class="d-sm-block d-none">Add</span> 
                                            <i class="bi bi-plus d-sm-none d-block"></i> Stop
                                        </button>
                                    </div>
                                </div>

                                <div class="destination-addresses flight-airline-info-wrp d-none">
                                    <div class="input-wrp">
                                        <div class="row w-100 mx-0">
                                            <div class="col-md-6 ps-0">
                                                <input class="w-100 airline-input" type="text" id="airlineNo" name="airline" value="{{ old('airline') }}" placeholder="Enter Airline">
                                                @error('airline')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 pe-0">
                                                <input class="w-100 flight-input" type="text" id="flightNo" name="flight_number" value="{{ old('flight_number') }}" placeholder="Enter Flight Number">
                                                @error('flight_number')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="stops-wrapper1 col-12 my-2"></div>

                                <div class="col-12 mb-2 to-wrapper">
                                    <div class="input-wrp">
                                        <span class="inputlabel">To :</span>
                                        <div class="to-field-wrapper">
                                            <input class="w-100 destination-input" type="text" id="to" name="to[address]" value="{{ old('to.address') }}" autocomplete="off" placeholder="Enter Full Pick-Up Address & Select From Autocomplete">
                                            <i class="bi bi-chevron-down"></i>
                                            <select class="to-field airport-select" name="to[airport]" id="to-airport" style="position:absolute; top:0; height:42px; width:100%; left:0;">
                                                <option class="selected-placeholder" selected disabled value="">Select Airport</option>
                                                @foreach (App\Models\Airport::where('is_enable', true)->get() as $airport)
                                                    <option {{ old('to.airport') == $airport->address ? 'selected' : '' }} value="{{ $airport->address }}">{{ $airport->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('to.address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            @error('to.airport')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <button class="btn btn-outline btn-add-destination" type="button">
                                            <span class="d-sm-block d-none">Add</span> 
                                            <i class="bi bi-plus d-sm-none d-block"></i> Stop
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="date-time-picker container-960">
                            <div class="inputs-wrapper mx-auto row">
                                <div class="dateTime-picker date-picker col-sm-6 col-8">
                                    <input type="date" id="pickUpdate" name="date" placeholder="select Date" value="{{ old('date') }}" required>
                                    <label for="pickUpdate"><i class="bi bi-calendar-fill"></i></label>
                                    @error('date')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="dateTime-picker tool-tip-block time-picker col-sm-6 col-4">
                                    <div class="dateTime-picker">
                                        <div class="time-input-wrapper d-flex">
                                            <select id="pickUpHour" name="hour" class="form-select time-select" required>
                                                <option value="">Hour</option>
                                                @for ($h = 1; $h <= 12; $h++)
                                                    <option value="{{ $h }}" {{ old('hour') == $h ? 'selected' : '' }}>{{ sprintf('%02d', $h) }}</option>
                                                @endfor
                                            </select>
                                            <span class="time-separator">:</span>
                                            <select id="pickUpMinute" name="minute" class="form-select time-select" required>
                                                <option value="">Min</option>
                                                @for ($m = 0; $m <= 59; $m++)
                                                    <option value="{{ $m }}" {{ old('minute') == $m ? 'selected' : '' }}>{{ sprintf('%02d', $m) }}</option>
                                                @endfor
                                            </select>
                                            <select id="pickUpAmPm" name="ampm" class="form-select time-select" required>
                                                <option value="">AM/PM</option>
                                                <option value="AM" {{ old('ampm') == 'AM' ? 'selected' : '' }}>AM</option>
                                                <option value="PM" {{ old('ampm') == 'PM' ? 'selected' : '' }}>PM</option>
                                            </select>
                                        </div>
                                        <label for="pickUpHour"><i class="bi bi-clock-fill"></i></label>
                                        @error('hour')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        @error('minute')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        @error('ampm')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <i class="bi bi-exclamation-circle"></i>
                                    <span class="message">
                                        <div class="data-block">
                                            <p>If the pick-up is from the airport, please input the flight arrival time. 1 hour free of waiting time is allowed to pick-up your luggage and call the driver.</p>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="contact-detailform">
                        <section class="pt-2 pb-2">
                            <div class="row row-wrap mx-0">
                                <div class="col-12 title-wrp">
                                    <h5 class="title tool-tip-block mb-0 ms-3">
                                        Main Passenger *
                                        <i class="bi bi-exclamation-circle"></i>
                                        <span class="message">
                                            <div class="title">
                                                <h3>Main Passenger</h3>
                                            </div>
                                            <div class="data-block">
                                                <ul class="list-wrp">
                                                    <li>Typically used by travelers that book for themselves</li>
                                                    <li>The main passenger will be the account holder</li>
                                                    <li>Edit trips, add credit cards, addresses, passengers, print receipts and more</li>
                                                </ul>
                                            </div>
                                        </span>
                                    </h5>
                                </div>

                                <div class="col-lg-4 full-name-wrp">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="passenger[name]" placeholder="Full Name" value="{{ Auth::check() ? Auth::user()->name : old('passenger.name') }}" required autocomplete="off" />
                                        @error('passenger.name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-4 email-address-wrp">
                                    <div class="form-group">
                                        <input type="email" name="passenger[email]" class="form-control" placeholder="Email" value="{{ Auth::check() ? Auth::user()->email : old('passenger.email') }}" autocomplete="off" required>
                                        @error('passenger.email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-4 phone-number-wrp">
                                    <div class="form-group">
                                        <input type="text" id="mobile_code" name="passenger[phone]" autocomplete="off" required value="{{ old('passenger.phone') }}" class="form-control mobile_code" />
                                        <span id="valid-msg" class="hide valid-msg"></span>
                                        <span id="error-msg" class="hide"></span>
                                        @error('passenger.phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 more-info-wrp">
                                    <div class="row row-wrap mx-0">
                                        <div class="col-lg-4 col-sm-6 passenger-select-wrp select-box">
                                            <div class="more-info-field-wrp select-wrapper passenger-select">
                                                <select class="passenger-selector w-100" name="passengers" required>
                                                    <option value="">Select Passengers</option>
                                                    @for ($i = 1; $i <= 20; $i++)
                                                        <option value="{{ $i }}" {{ old('passengers') == $i ? 'selected' : '' }}>{{ $i }} {{ $i == 1 ? 'Passenger' : 'Passengers' }}</option>
                                                    @endfor
                                                </select>
                                                @error('passengers')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-sm-6 bags-select-wrp select-box">
                                            <div class="more-info-field-wrp select-wrapper bags-select">
                                                <select class="bags-selector w-100" name="bags">
                                                    <option value="">Select Bags</option>
                                                    @for ($i = 0; $i <= 20; $i++)
                                                        <option value="{{ $i }}" {{ old('bags') == $i ? 'selected' : '' }}>{{ $i }} {{ $i == 1 ? 'Bag' : 'Bags' }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-sm-6 company-input-wrp">
                                            <div class="more-info-field-wrp company-input-field">
                                                <input class="w-100 company-input" type="text" id="companyInput" name="passenger[company]" value="{{ old('passenger.company') }}" placeholder="Company Name" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-sm-6 ref-input-wrp d-none">
                                            <div class="more-info-field-wrp ref-input-field">
                                                <input class="w-100 ref-input" value="{{ old('passenger.ref') }}" type="text" id="refInput" name="passenger[ref]" placeholder="Ref #">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 additional-info">
                                    <div class="row justify-content-lg-between row-wrap mx-0">
                                        @guest
                                            <div class="col-lg-auto col-sm-6 col-12 additional-checkbox-wrp bookinContact-wrp tool-tip-block">
                                                <div class="form-check">
                                                    <span>
                                                        <input class="form-check-input" type="checkbox" name="add_booking_contact" {{ old('add_booking_contact') == 'on' ? 'checked' : '' }} id="bookinContactCheck">
                                                        <label for="bookinContactCheck" class="custom-checkbox"></label>
                                                    </span>
                                                    <label class="form-check-label" for="bookinContactCheck">Add Booking Contact</label>
                                                </div>
                                                <i class="bi bi-exclamation-circle"></i>
                                                <span class="message">
                                                    <div class="title">
                                                        <h3>Add Booking Contact Only If Different Than Main Passenger</h3>
                                                    </div>
                                                    <div class="data-block">
                                                        <ul class="list">
                                                            <li>Typically used by admin assistants to book for other passengers</li>
                                                            <li>The Booking Contact will be the Account Holder</li>
                                                            <li>Edit trips, add credit cards, addresses, passengers, print receipts and more</li>
                                                        </ul>
                                                    </div>
                                                </span>
                                            </div>
                                        @endguest

                                        <div class="col-lg-auto col-sm-6 col-12 additional-checkbox-wrp tool-tip-block car-seats-wrp">
                                            <div class="form-check">
                                                <span>
                                                    <input class="form-check-input" type="checkbox" value="" id="carSeatsCheck">
                                                    <label for="carSeatsCheck" class="custom-checkbox"></label>
                                                </span>
                                                <label class="form-check-label" for="carSeatsCheck">Car Seats</label>
                                            </div>
                                            <i class="bi bi-exclamation-circle"></i>
                                            <span class="message">
                                                <div class="title">
                                                    <h3>8 years or less it is mandatory to have a car seat or booster.</h3>
                                                </div>
                                                <div class="data-block">
                                                    <ul class="list">
                                                        <li>Forward facing and rear-facing: Car seat for children between 22 to 80 pounds</li>
                                                        <li>Booster seat: For children between 30 and 100 pounds</li>
                                                    </ul>
                                                </div>
                                            </span>
                                        </div>

                                        <div class="col-lg-auto col-sm-6 col-12 additional-checkbox-wrp instrutions-wrp">
                                            <div class="form-check">
                                                <span>
                                                    <input class="form-check-input" type="checkbox" value="" id="addInstructionCheck">
                                                    <label for="addInstructionCheck" class="custom-checkbox"></label>
                                                </span>
                                                <label class="form-check-label" for="addInstructionCheck">Add Instructions</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-auto col-sm-6 col-12 additional-checkbox-wrp meetAndGreet-wrp">
                                            <div class="form-check">
                                                <span>
                                                    <input class="form-check-input" type="checkbox" value="1" id="meetAndGreetCheck" name="meet_and_greet" {{ old('meet_and_greet') == '1' ? 'checked' : '' }}>
                                                    <label for="meetAndGreetCheck" class="custom-checkbox"></label>
                                                </span>
                                                <label class="form-check-label" for="meetAndGreetCheck">Meet And Greet</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 more-info-wrp additonal-info-fields-holder">
                                    {{-- Booking Contact Fields --}}
                                    <div class="row row-wrap mx-0 mb-4 booking-contact-fields-wrp" style="display: none;">
                                        <div class="col-12 title-wrp">
                                            <h5 class="title mb-0 ms-3">Add Booking Contact Details</h5>
                                        </div>
                                        <div class="col-lg-4 full-name-wrp">
                                            <div class="form-group">
                                                <input type="text" id="booking_name" class="form-control" placeholder="Full Name" name="booking_contact[name]" value="{{ old('booking_contact.name') }}" autocomplete="off" />
                                                @error('booking_contact.name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-4 email-address-wrp">
                                            <div class="form-group">
                                                <input type="email" id="booking_email" name="booking_contact[email]" class="form-control" placeholder="Email" value="{{ old('booking_contact.email') }}" autocomplete="off">
                                                @error('booking_contact.email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-4 phone-number-wrp">
                                            <div class="form-group">
                                                <input type="text" id="booking_mobile_code" autocomplete="off" name="booking_contact[phone]" value="{{ old('booking_contact.phone') }}" class="booking_phone form-control" />
                                                <span id="valid-booking-phone-msg" class="hide valid-msg"></span>
                                                <span id="error-booking-phone-msg" class="hide"></span>
                                                @error('booking_contact.phone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Car Seats Fields --}}
                                    <div class="row car-seats-fields-wrp row-wrap mx-0 mb-4" style="display: none;">
                                        <div class="col-12 title-wrp">
                                            <h5 class="title mb-0 ms-3">Car Seats</h5>
                                        </div>
                                        <div class="col-lg-4 rf-seat-select-wrp select-box">
                                            <div class="more-info-field-wrp select-wrapper rf-seat-select">
                                                <label class="ms-2" for="rear_car_seat">Rear Facing</label>
                                                <select class="rf-seat-select w-100" name="vehicle_detail[rear_car_seat]" id="rear_car_seat">
                                                    @for ($i = 0; $i <= 3; $i++)
                                                        <option value="{{ $i }}" {{ old('vehicle_detail.rear_car_seat') == $i ? 'selected' : ($i == 0 ? 'selected' : '') }}>{{ $i }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 ff-seat-select-wrp select-box">
                                            <div class="more-info-field-wrp select-wrapper ff-seat-select">
                                                <label class="ms-2" for="forward_car_seat">Forward Facing</label>
                                                <select class="w-100 ff-seat-select" name="vehicle_detail[forward_car_seat]" id="forward_car_seat">
                                                    @for ($i = 0; $i <= 3; $i++)
                                                        <option value="{{ $i }}" {{ old('vehicle_detail.forward_car_seat') == $i ? 'selected' : ($i == 0 ? 'selected' : '') }}>{{ $i }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 boost-seat-select-wrp select-box">
                                            <div class="more-info-field-wrp select-wrapper boost-seat-select">
                                                <label class="ms-2" for="booster_car_seat">Booster</label>
                                                <select class="boost-seat-select w-100" name="vehicle_detail[booster_car_seat]" id="booster_car_seat">
                                                    @for ($i = 0; $i <= 3; $i++)
                                                        <option value="{{ $i }}" {{ old('vehicle_detail.booster_car_seat') == $i ? 'selected' : ($i == 0 ? 'selected' : '') }}>{{ $i }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Add Instructions Fields --}}
                                    <div class="row add-instruction-fields-wrp row-wrap mx-0 mb-4" style="display: none;">
                                        <div class="col-12 title-wrp">
                                            <h5 class="title mb-0 ms-3">Add Instructions</h5>
                                        </div>
                                        <div class="col-12 add-instruction-wrp">
                                            <div class="form-group">
                                                <textarea class="form-control" name="instructions" placeholder="Add Additional Instructions" id="exampleFormControlTextarea1" rows="3">{{ old('instructions') }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        {{-- Total Wrapper --}}
        <div class="total-wrapper">
            <div class="col-md-8 mx-auto">
                <div class="row justify-content-center">
                    <div class="col-md-auto d-flex justify-content-center align-items-center">
                        <button type="submit" class="btn btn-book-now mx-auto" id="submit-enquiry">
                            <i class="bi bi-envelope me-2"></i> Submit Enquiry
                        </button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Hidden Payment Fields --}}
        <input type="hidden" name="payment[price]" id="payment_price">
        <input type="hidden" name="miles" id="payment_miles">
        <input type="hidden" name="payment[gratuity]" id="payment_gratuity">
        <input type="hidden" name="payment[rushHourCharge]" id="payment_rushHourCharge">
        <input type="hidden" name="payment[perMileCharge]" id="payment_perMileCharge">
        <input type="hidden" name="payment[hoursCharge]" id="payment_hoursCharge">
        <input type="hidden" name="payment[carSeat]" id="payment_carSeat">
        <input type="hidden" name="payment[boosterCarSeat]" id="payment_boosterCarSeat">
        <input type="hidden" name="payment[meetAndGreet]" id="payment_meetAndGreet">

    </form>
</div>

@section('sliderJS')
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('vendor/jquery/jquery-input-mask-phone-number.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"></script>
    <script src="{{ asset('vendor/intlTellInput/intlTelInput.js') }}"></script>
    
    <script>
        // Wait for DOM to be fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            console.log('DOM loaded, initializing form...');
            
            // Get form and button elements
            const form = document.querySelector('#payment-form');
            const submitBtn = document.querySelector('#submit-enquiry');
            
            console.log('Form found:', form);
            console.log('Button found:', submitBtn);
            
            // Alternative approach - also listen for direct button clicks
            if (submitBtn) {
                submitBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    console.log('Submit button clicked!');
                    handleFormSubmission();
                });
            }
            
            // Form submission handler
            if (form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    console.log('Form submitted!');
                    handleFormSubmission();
                });
            }
            
            function handleFormSubmission() {
                const formData = new FormData(form);
                let originalText = submitBtn.innerHTML;
                
                // Show loading state
                submitBtn.innerHTML = '<i class="bi bi-hourglass-split me-2"></i> Opening WhatsApp...';
                submitBtn.disabled = true;

                // Extract enquiry details for WhatsApp
                let name = formData.get('passenger[name]') || '';
                let email = formData.get('passenger[email]') || '';
                let phone = formData.get('passenger[phone]') || '';
                let from = formData.get('from[address]') || formData.get('from[airport]') || '';
                let to = formData.get('to[address]') || formData.get('to[airport]') || '';
                let date = formData.get('date') || '';
                
                // Format time from hour, minute, ampm
                let hour = formData.get('hour') || '';
                let minute = formData.get('minute') || '';
                let ampm = formData.get('ampm') || '';
                let time = hour && minute && ampm ? `${hour}:${minute.padStart(2, '0')} ${ampm}` : '';
                let vehicleType = document.querySelector('input[name="vehicle_type_id"]:checked')?.closest('.CirItem')?.querySelector('h5')?.innerText || '';
                let passengers = formData.get('passengers') || '';
                let bags = formData.get('bags') || '';
                let serviceType = document.querySelector('input[name="service_id"]:checked')?.nextElementSibling?.querySelector('span')?.innerText || '';
                let company = formData.get('passenger[company]') || '';
                let instructions = formData.get('instructions') || '';
                let meetAndGreet = formData.get('meet_and_greet') ? 'Yes' : 'No';

                console.log('Extracted data:', {name, email, from, to, date, time});

                // Additional service details
                let hours = '';
                if (formData.get('service_id') === '4') {
                    hours = formData.get('hours') || '';
                }

                // Car seat details
                let carSeats = '';
                if (document.getElementById('carSeatsCheck')?.checked) {
                    let rearSeats = formData.get('vehicle_detail[rear_car_seat]') || '0';
                    let forwardSeats = formData.get('vehicle_detail[forward_car_seat]') || '0';
                    let boosterSeats = formData.get('vehicle_detail[booster_car_seat]') || '0';
                    if (rearSeats !== '0' || forwardSeats !== '0' || boosterSeats !== '0') {
                        carSeats = `Rear: ${rearSeats}, Forward: ${forwardSeats}, Booster: ${boosterSeats}`;
                    }
                }

                // Flight details
                let flightInfo = '';
                let airline = formData.get('airline') || '';
                let flightNumber = formData.get('flight_number') || '';
                if (airline || flightNumber) {
                    flightInfo = `${airline} ${flightNumber}`.trim();
                }

                // Build comprehensive WhatsApp message
                let message = `NEW BOOKING ENQUIRY\n\n` +
                            `PASSENGER DETAILS:\n` +
                            `Name: ${name}\n` +
                            `Email: ${email}\n` +
                            `Phone: ${phone}\n`;

                if (company) {
                    message += `Company: ${company}\n`;
                }

                message += `\nTRIP DETAILS:\n` +
                          `Service: ${serviceType}\n`;

                if (hours) {
                    message += `Duration: ${hours} hours\n`;
                }

                message += `Vehicle: ${vehicleType}\n` +
                          `Passengers: ${passengers}\n`;

                if (bags) {
                    message += `Bags: ${bags}\n`;
                }

                message += `\nPICKUP & DESTINATION:\n` +
                          `From: ${from}\n` +
                          `To: ${to}\n`;

                if (flightInfo) {
                    message += `Flight: ${flightInfo}\n`;
                }

                message += `\nDATE & TIME:\n` +
                          `Date: ${date}\n` +
                          `Time: ${time}\n`;

                message += `\nADDITIONAL INFO:\n` +
                          `Meet & Greet: ${meetAndGreet}\n`;

                if (carSeats) {
                    message += `Car Seats: ${carSeats}\n`;
                }

                if (instructions) {
                    message += `Special Instructions: ${instructions}\n`;
                }

                message += `\nPlease confirm this booking and provide pricing quote.`;

                console.log('WhatsApp message prepared');

                // Basic form validation
                if (!name || !email || !phone || !from || !to || !date || !hour || !minute || !ampm) {
                    alert('Please fill in all required fields including time (hour, minute, AM/PM) before submitting your enquiry.');
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                    return;
                }

                // Open WhatsApp with enquiry
                console.log('Opening WhatsApp...');
                
                // Use the universal wa.me format that works on all devices
                const whatsappUrl = `https://wa.me/16302901761?text=${encodeURIComponent(message.replace(/%0A/g, '\n'))}`;
                
                console.log('WhatsApp URL:', whatsappUrl);
                
                setTimeout(() => {
                    window.open(whatsappUrl, '_blank');
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                    console.log('WhatsApp opened successfully');
                }, 1000);
            }

            // Toggle conditional fields based on checkboxes
            const bookingContactCheck = document.getElementById('bookinContactCheck');
            if (bookingContactCheck) {
                bookingContactCheck.addEventListener('change', function() {
                    const fieldsWrapper = document.querySelector('.booking-contact-fields-wrp');
                    if (fieldsWrapper) {
                        fieldsWrapper.style.display = this.checked ? 'flex' : 'none';
                    }
                });
            }

            const carSeatsCheck = document.getElementById('carSeatsCheck');
            if (carSeatsCheck) {
                carSeatsCheck.addEventListener('change', function() {
                    const fieldsWrapper = document.querySelector('.car-seats-fields-wrp');
                    if (fieldsWrapper) {
                        fieldsWrapper.style.display = this.checked ? 'flex' : 'none';
                    }
                });
            }

            const addInstructionCheck = document.getElementById('addInstructionCheck');
            if (addInstructionCheck) {
                addInstructionCheck.addEventListener('change', function() {
                    const fieldsWrapper = document.querySelector('.add-instruction-fields-wrp');
                    if (fieldsWrapper) {
                        fieldsWrapper.style.display = this.checked ? 'flex' : 'none';
                    }
                });
            }

            // Service type change handler for hourly service
            document.querySelectorAll('.service_type_id').forEach(function(radio) {
                radio.addEventListener('change', function() {
                    const hoursWrapper = document.querySelector('.hours-input-input-wrp');
                    if (hoursWrapper) {
                        hoursWrapper.style.display = this.value === '4' ? 'block' : 'none';
                    }
                });
            });

            // Set minimum date to today
            const dateInput = document.getElementById('pickUpdate');
            if (dateInput) {
                const today = new Date().toISOString().split('T')[0];
                dateInput.setAttribute('min', today);
            }

            // Initialize hours field visibility based on current selection
            const selectedService = document.querySelector('input[name="service_id"]:checked');
            if (selectedService && selectedService.value === '4') {
                const hoursWrapper = document.querySelector('.hours-input-input-wrp');
                if (hoursWrapper) {
                    hoursWrapper.style.display = 'block';
                }
            }
            
            console.log('Form initialization complete');
        });
    </script>

    @vite(['resources/js/calculate-price.js'])
    @vite(['resources/js/phone-number-validation.js'])
    @vite(['resources/js/vehicle-booking.js'])
@endsection