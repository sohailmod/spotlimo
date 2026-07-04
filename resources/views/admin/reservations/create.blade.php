@extends('adminlte::page')

@section('title', 'Create new reservations')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Create new reservations</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{  route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Customer Reservations</li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')
    <section class="content">
        <div class="container-fluid">
            <form action="{{  route('admin.reservations.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h4 class="card-title price"></h4>
                                        </div>
                                        <div class="col-md-4">
                                            <h4 class="card-title distance" id="totalDistance"></h4>
                                            <input type="hidden" class="totalDist" name="totalDist" id="totalDist">
                                        </div>
                                        <div class="col-md-4">
                                            <h4 class="card-title duration" id="totalTime"></h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <span class="text-danger" id="direaction_error"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Vehicle Type *</label>
                                            <select class="custom-select vehicle_type" id="vehicle_type_id"
                                                name="vehicle_type_id" required>
                                                <option selected disabled value="">Select Vehicle Type</option>
                                                @foreach (App\Models\VehicleType::orderBy('name', 'ASC')->where('is_enable', true)->get() as $data)
                                                    <option {{ old('vehicle_type_id') == $data->id ? 'selected' : '' }}
                                                        value="{{ $data->id }}">{{ $data->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('vehicle_type_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Service Type *</label>
                                            <select class="custom-select service_type" id="service_type_id"
                                                name="service_id" required>
                                                <option selected disabled value="">Select Service Type</option>
                                                @foreach (App\Models\ServiceType::orderBy('id', 'ASC')->get() as $data)
                                                    <option {{ old('service_type_id') == $data->id ? 'selected' : '' }}
                                                        value="{{ $data->id }}">{{ $data->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('service_type_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Pick-up Date *</label>
                                            <input type="date" name="date" value="{{ old('date') }}"
                                                class="form-control date" id="datetimepicker" required>
                                        </div>

                                        @error('date')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Time *</label>
                                            <input type="time" name="time" value="{{ old('time') }}"
                                                class="form-control time" required>
                                        </div>
                                    </div>

                                </div>
                                {{-- Autocomplte Location start --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>From *</label>
                                            <button type="button" class="btn btn-primary float-right addWait mb-2"
                                                id="addWait">Add
                                                Stop</button>
                                            <input type="text" name="from[address]" id="from"
                                                class="form-control form-address from" autocomplete="off"
                                                value="{{ old('from.address') }}"
                                                placeholder="Enter Full Pick-Up Address & Select From Autocomplete">

                                            <select class="custom-select form-airport from" id="from-airport"
                                                name="from[airport]">
                                                <option selected disabled value="">Select Airport</option>
                                                <option
                                                    {{ old('from.airport') == 'O \'Hare International Airport, Chicago, IL 60666' ? 'selected' : '' }}
                                                    value="O 'Hare International Airport, Chicago, IL 60666">O 'Hare
                                                    International Airport, Chicago, IL 60666</option>
                                                <option
                                                    {{ old('from.airport') == 'Midway International Airport ,Chicago, IL 60638' ? 'selected' : '' }}
                                                    value="Midway International Airport ,Chicago, IL 60638">Midway
                                                    International Airport ,Chicago, IL 60638</option>
                                                <option
                                                    {{ old('from.airport') == 'Milwaukee Mitchell Airport, Milwaukee WI 53207' ? 'selected' : '' }}
                                                    value="Milwaukee Mitchell Airport, Milwaukee WI 53207">Milwaukee
                                                    Mitchell Airport, Milwaukee WI 53207</option>
                                            </select>

                                            @error('from.address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            @error('from.airport')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 airline">
                                        <input type="text" name="airline" value="{{ old('airline') }}"
                                            class="form-control airline" placeholder="Airline">

                                        @error('airline')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 flight_number mb-2">
                                        <input type="text" name="flight_number" value="{{ old('flight_number') }}"
                                            class="form-control flight_number" placeholder="Flight Number">

                                        @error('flight_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 waitPoint" id="waitPoint">

                                    </div>
                                    <div class="col-md-12 stopPoint" id="stopPoint">

                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>To *</label>
                                            <button type="button" class="btn btn-primary float-right addStop mb-2"
                                                id="addStop">Add
                                                Stop</button>
                                            <select class="custom-select to-airport to" id="to-airport"
                                                name="to[airport]">
                                                <option selected disabled value="">Select Airport</option>
                                                <option
                                                    {{ old('to.airport') == 'O \'Hare International Airport, Chicago, IL 60666' ? 'selected' : '' }}
                                                    value="O 'Hare International Airport, Chicago, IL 60666">O 'Hare
                                                    International Airport, Chicago, IL 60666</option>
                                                <option
                                                    {{ old('to.airport') == 'Midway International Airport ,Chicago, IL 60638' ? 'selected' : '' }}
                                                    value="Midway International Airport ,Chicago, IL 60638">Midway
                                                    International Airport ,Chicago, IL 60638</option>
                                                <option
                                                    {{ old('to.airport') == 'Milwaukee Mitchell Airport, Milwaukee WI 53207' ? 'selected' : '' }}
                                                    value="Milwaukee Mitchell Airport, Milwaukee WI 53207">Milwaukee
                                                    Mitchell Airport, Milwaukee WI 53207</option>
                                            </select>

                                            <input type="text" id="to" name="to[address]"
                                                value="{{ old('to.address') }}" class="form-control to-address to"
                                                autocomplete="off"
                                                placeholder="Enter Full Pick-Up Address & Select From Autocomplete">

                                            @error('to.address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            @error('to.airport')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-md-6 hours">
                                        <div class="form-group">
                                            <label>Hours *</label>
                                            <select class="custom-select hours" id="hours" name="hours">
                                                <option value="2" {{ old('hours') == 2 ? 'selected' : '' }}>2 HRS
                                                </option>
                                                <option value="3" {{ old('hours') == 3 ? 'selected' : '' }}>3 HRS
                                                </option>
                                                <option value="4" {{ old('hours') == 4 ? 'selected' : '' }}>4 HRS
                                                </option>
                                                <option value="5" {{ old('hours') == 5 ? 'selected' : '' }}>5 HRS
                                                </option>
                                                <option value="6" {{ old('hours') == 6 ? 'selected' : '' }}>6 HRS
                                                </option>
                                                <option value="7" {{ old('hours') == 7 ? 'selected' : '' }}>7 HRS
                                                </option>
                                                <option value="8" {{ old('hours') == 8 ? 'selected' : '' }}>8 HRS
                                                </option>
                                                <option value="9" {{ old('hours') == 9 ? 'selected' : '' }}>9 HRS
                                                </option>
                                                <option value="10" {{ old('hours') == 10 ? 'selected' : '' }}>10 HRS
                                                </option>
                                                <option value="11" {{ old('hours') == 11 ? 'selected' : '' }}>11 HRS
                                                </option>
                                                <option value="12" {{ old('hours') == 12 ? 'selected' : '' }}>12 HRS
                                                </option>
                                                <option value="13" {{ old('hours') == 13 ? 'selected' : '' }}>13 HRS
                                                </option>
                                                <option value="14" {{ old('hours') == 14 ? 'selected' : '' }}>14 HRS
                                                </option>
                                                <option value="15" {{ old('hours') == 15 ? 'selected' : '' }}>15 HRS
                                                </option>
                                                <option value="16" {{ old('hours') == 16 ? 'selected' : '' }}>16 HRS
                                                </option>
                                                <option value="17" {{ old('hours') == 17 ? 'selected' : '' }}>17 HRS
                                                </option>
                                                <option value="18" {{ old('hours') == 18 ? 'selected' : '' }}>18 HRS
                                                </option>
                                                <option value="19" {{ old('hours') == 19 ? 'selected' : '' }}>19 HRS
                                                </option>
                                                <option value="20" {{ old('hours') == 20 ? 'selected' : '' }}>20 HRS
                                                </option>
                                                <option value="21" {{ old('hours') == 21 ? 'selected' : '' }}>21 HRS
                                                </option>
                                                <option value="22" {{ old('hours') == 22 ? 'selected' : '' }}>22 HRS
                                                </option>
                                                <option value="23" {{ old('hours') == 23 ? 'selected' : '' }}>23 HRS
                                                </option>
                                                <option value="24" {{ old('hours') == 24 ? 'selected' : '' }}>24 HRS
                                                </option>
                                            </select>

                                        </div>

                                        @error('hours')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div>
                                        <input type="hidden" id="latitude" name="latitude" class="form-control">
                                        <input type="hidden" name="longitude" id="longitude" class="form-control">
                                    </div>
                                </div>
                                {{-- Autocomplte Location end --}}


                                {{-- Main passenger detail start --}}
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Passengers *</label>
                                            <select class="custom-select passengers" name="passengers" id="passengers"
                                                required>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Bags *</label>
                                            <select class="custom-select bags" id="bags" name="bags">

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Company</label>
                                            <input type="phone" name="passenger[company]"
                                                value="{{ old('passenger.company') }}"
                                                class="form-control passenger_company" autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                {{-- Main passenger detail end --}}


                                {{-- Add Booking Contact start --}}

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input"
                                                    {{ old('add_booking_contact') == 'on' ? 'checked' : '' }}
                                                    id="add_booking_contact" name="add_booking_contact">
                                                <label class="custom-control-label" for="add_booking_contact">Add
                                                    Booking
                                                    Contact</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row add_booking_contact">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="booking_contact[name]"
                                                value="{{ old('booking_contact.name') }}" class="form-control"
                                                autocomplete="off">
                                        </div>
                                        @error('booking_contact.name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="booking_contact[email]"
                                                value="{{ old('booking_contact.email') }}" class="form-control"
                                                autocomplete="off">
                                        </div>
                                        @error('booking_contact.email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="phone" name="booking_contact[phone]"
                                                value="{{ old('booking_contact.phone') }}" class="form-control"
                                                autocomplete="off">
                                        </div>
                                        @error('booking_contact.phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Add Booking Contact end --}}

                                {{-- Add Car seats start --}}

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" name="car_seats"
                                                    id="car_seats">
                                                <label class="custom-control-label" for="car_seats">Car
                                                    Seats</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row car_seats">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Forward Facing</label>
                                            <select class="custom-select forward_car_seat"
                                                name="vehicle_detail[forward_car_seat]">
                                                <option selected value="0"
                                                    {{ old('vehicle_detail.forward_car_seat') == '0' ? 'selected' : '' }}>
                                                    0</option>
                                                <option value="1"
                                                    {{ old('vehicle_detail.forward_car_seat') == '1' ? 'selected' : '' }}>
                                                    1</option>
                                                <option value="2"
                                                    {{ old('vehicle_detail.forward_car_seat') == '2' ? 'selected' : '' }}>
                                                    2</option>
                                                <option value="3"
                                                    {{ old('vehicle_detail.forward_car_seat') == '3' ? 'selected' : '' }}>
                                                    3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Rear Facing</label>
                                            <select class="custom-select rear_car_seat"
                                                name="vehicle_detail[rear_car_seat]">
                                                <option selected value="0"
                                                    {{ old('vehicle_detail.rear_car_seat') == '0' ? 'selected' : '' }}> 0
                                                </option>
                                                <option value="1"
                                                    {{ old('vehicle_detail.rear_car_seat') == '1' ? 'selected' : '' }}> 1
                                                </option>
                                                <option value="2"
                                                    {{ old('vehicle_detail.rear_car_seat') == '2' ? 'selected' : '' }}> 2
                                                </option>
                                                <option value="3"
                                                    {{ old('vehicle_detail.rear_car_seat') == '3' ? 'selected' : '' }}> 3
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Booster</label>
                                            <select class="custom-select booster_car_seat"
                                                name="vehicle_detail[booster_car_seat]">
                                                <option selected value="0"
                                                    {{ old('vehicle_detail.booster_car_seat') == '0' ? 'selected' : '' }}>
                                                    0</option>
                                                <option value="1"
                                                    {{ old('vehicle_detail.booster_car_seat') == '1' ? 'selected' : '' }}>
                                                    1</option>
                                                <option value="2"
                                                    {{ old('vehicle_detail.booster_car_seat') == '2' ? 'selected' : '' }}>
                                                    2</option>
                                                <option value="3"
                                                    {{ old('vehicle_detail.booster_car_seat') == '3' ? 'selected' : '' }}>
                                                    3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                {{-- Add Car seats end --}}

                                {{-- Meet and Greet --}}

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="custom-control">
                                                <input type="checkbox" class="form-check-input meet_and_greet"
                                                    id="meet_and_greet" name="meet_and_greet" value="1"
                                                    {{ old('meet_and_greet') == '1' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="meet_and_greet">Meet and
                                                    Greet</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Add Instructions start  --}}

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="add_instructions">
                                                <label class="custom-control-label" for="add_instructions">Add
                                                    Instructions</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row add_instructions">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Notes</label>
                                            <textarea class="form-control" name="instructions" id="" cols="20" rows="3">{{ old('instructions') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                {{-- Add Instructions end --}}



                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="card-header p-2">
                                    <div class="row">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="create_passenger"
                                                id="create_passenger"
                                                {{ old('create_passenger') == 'create_passenger' ? 'checked' : '' }}
                                                value="create_passenger" checked>
                                            <label class="form-check-label" for="create_new_passenger">Create new
                                                passenger</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="create_passenger"
                                                value="existing_passenger" id="existing_passenger"
                                                {{ old('create_passenger') == 'existing_passenger' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="existing_passenger">Select existing
                                                passenger</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="create_passenger box">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="passenger[name]"
                                                    value="{{ old('passenger.name') }}" class="form-control"
                                                    autocomplete="off">
                                                @error('passenger.name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" name="passenger[email]"
                                                    value="{{ old('passenger.email') }}" class="form-control"
                                                    autocomplete="off">
                                                @error('passenger.email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="phone" name="passenger[phone]"
                                                    value="{{ old('passenger.phone') }}" class="form-control"
                                                    autocomplete="off">
                                                @error('passenger.phone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="existing_passenger box">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Select passenger:</label>
                                                <select class="form-control passenger" style="width: 100%;"
                                                    name="passenger_id">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="payment[price]" id="payment_price">
                        <input type="hidden" name="miles" id="payment_miles">
                        <input type="hidden" name="payment[gratuity]" id="payment_gratuity">
                        <input type="hidden" name="payment[rushHourCharge]" id="payment_rushHourCharge">
                        <input type="hidden" name="payment[perMileCharge]" id="payment_perMileCharge">
                        <input type="hidden" name="payment[hoursCharge]" id="payment_hoursCharge">
                        <input type="hidden" name="payment[carSeat]" id="payment_carSeat">
                        <input type="hidden" name="payment[boosterCarSeat]" id="payment_boosterCarSeat">
                        <input type="hidden" name="payment[meetAndGreet]" id="payment_meetAndGreet">

                    </div>
                    <div class="col-md-8 mt-4 mb-5">
                        <button type="submit" id="button" class="btn btn-primary btn-block">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('css')

    <style>
        .existing_passenger {
            display: none;

        }
    </style>

@stop

@section('js')
    <script src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries=places&callback=initialize"
        async defer></script>



    <script>
        $(document).ready(function() {
            $(".form-airport").addClass("d-none");
            $(".to-address").addClass("d-none");
            $(".airline").addClass("d-none");
            $(".flight_number").addClass("d-none");
            $(".hours").addClass("d-none");
            $(".add_booking_contact").addClass("d-none");
            $(".car_seats").addClass("d-none");
            $(".add_instructions").addClass("d-none");
            $(".addWait").addClass("d-none");
            $(".waitPoint").addClass("d-none");


        });

        $(document).ready(function() {


            if ($(".service_type").val() == 1) {
                $(".to-airport").removeClass("d-none");
                $(".form-address").removeClass("d-none");

                $(".to-address").addClass("d-none");
                $(".airline").addClass("d-none");
                $(".flight_number").addClass("d-none");
                $(".hours").addClass("d-none");
                $(".form-airport").addClass("d-none");

                $(".addWait").addClass("d-none");
                $(".waitPoint").addClass("d-none");

                $(".stopPoint").removeClass("d-none");
                $(".addStop").removeClass("d-none");
            }

            if ($(".service_type").val() == 2) {
                $(".form-airport").removeClass("d-none");
                $(".to-address").removeClass("d-none");
                $(".airline").removeClass("d-none");
                $(".flight_number").removeClass("d-none");

                $(".to-airport").addClass("d-none");
                $(".form-address").addClass("d-none");
                $(".hours").addClass("d-none");

                $(".addWait").addClass("d-none");
                $(".waitPoint").addClass("d-none");

                $(".stopPoint").removeClass("d-none");
                $(".addStop").removeClass("d-none");
            }

            if ($(".service_type").val() == 3) {
                $(".to-address").removeClass("d-none");
                $(".form-address").removeClass("d-none");

                $(".to-airport").addClass("d-none");
                $(".airline").addClass("d-none");
                $(".form-airport").addClass("d-none");
                $(".flight_number").addClass("d-none");
                $(".hours").addClass("d-none");

                $(".addWait").addClass("d-none");
                $(".waitPoint").addClass("d-none");

                $(".stopPoint").removeClass("d-none");
                $(".addStop").removeClass("d-none");
            }

            if ($(".service_type").val() == 4) {
                $(".to-address").removeClass("d-none");
                $(".form-address").removeClass("d-none");
                $(".hours").removeClass("d-none");

                $(".addWait").removeClass("d-none");
                $(".waitPoint").removeClass("d-none");


                $(".stopPoint").addClass("d-none");
                $(".addStop").addClass("d-none");
                $(".to-airport").addClass("d-none");
                $(".form-airport").addClass("d-none");
                $(".airline").addClass("d-none");
                $(".flight_number").addClass("d-none");
            }


            $('.service_type').on('change', function() {

                if (this.value == 1) {
                    $(".to-airport").removeClass("d-none");
                    $(".form-address").removeClass("d-none");

                    $(".to-address").addClass("d-none");
                    $(".airline").addClass("d-none");
                    $(".flight_number").addClass("d-none");
                    $(".hours").addClass("d-none");
                    $(".form-airport").addClass("d-none");

                    $(".addWait").addClass("d-none");
                    $(".waitPoint").addClass("d-none");

                    $(".stopPoint").removeClass("d-none");
                    $(".addStop").removeClass("d-none");
                }

                if (this.value == 2) {
                    $(".form-airport").removeClass("d-none");
                    $(".to-address").removeClass("d-none");
                    $(".airline").removeClass("d-none");
                    $(".flight_number").removeClass("d-none");

                    $(".to-airport").addClass("d-none");
                    $(".form-address").addClass("d-none");
                    $(".hours").addClass("d-none");

                    $(".addWait").addClass("d-none");
                    $(".waitPoint").addClass("d-none");

                    $(".stopPoint").removeClass("d-none");
                    $(".addStop").removeClass("d-none");
                }

                if (this.value == 3) {
                    $(".to-address").removeClass("d-none");
                    $(".form-address").removeClass("d-none");

                    $(".to-airport").addClass("d-none");
                    $(".airline").addClass("d-none");
                    $(".form-airport").addClass("d-none");
                    $(".flight_number").addClass("d-none");
                    $(".hours").addClass("d-none");

                    $(".addWait").addClass("d-none");
                    $(".waitPoint").addClass("d-none");

                    $(".stopPoint").removeClass("d-none");
                    $(".addStop").removeClass("d-none");
                }

                if (this.value == 4) {
                    $(".to-address").removeClass("d-none");
                    $(".form-address").removeClass("d-none");
                    $(".hours").removeClass("d-none");

                    $(".addWait").removeClass("d-none");
                    $(".waitPoint").removeClass("d-none");


                    $(".stopPoint").addClass("d-none");
                    $(".addStop").addClass("d-none");
                    $(".to-airport").addClass("d-none");
                    $(".form-airport").addClass("d-none");
                    $(".airline").addClass("d-none");
                    $(".flight_number").addClass("d-none");
                }

            });
        });
    </script>

    <script>
        // stop point address
        $(document).ready(function() {

            var totalAC = 0;
            $(document).on('click', "#stopPoint input[type=text]", function() {
                var currentInp = $(this).attr("id");

                const options = {
                    componentRestrictions: {
                        country: "us"
                    },
                    fields: ["address_components", "geometry", "icon", "name"],
                    strictBounds: false,
                    types: ["establishment"],
                };

                var placeBox = new google.maps.places.Autocomplete(document.getElementById(currentInp),
                    options);
            });

            $("#addStop").click(function() {
                totalAC = $("#stopPoint input").length;
                totalAC = totalAC + 1;
                var codeVar = "<div class='form-group'><label class='col-form-label'>Stop " + totalAC +
                    "*:</label> <label class='col-form-label float-right remove-option' style='color:red;'>Remove</label><input id='place" +
                    totalAC +
                    "' placeholder='Enter Full Pick-Up Address & Select From Autocomplete' name='stopAddress[]' class='form-control stopAddress' onChnage='changeStop(" +
                    totalAC + ")' type='text' /></div>";
                $("#stopPoint").append(codeVar);
            });
        });

        $(document).ready(function() {

            var totalAC = 0;
            $(document).on('click', "#waitPoint input[type=text]", function() {
                var currentInp = $(this).attr("id");

                const options = {
                    componentRestrictions: {
                        country: "us"
                    },
                    fields: ["address_components", "geometry", "icon", "name"],
                    strictBounds: false,
                    types: ["establishment"],
                };

                var placeBox = new google.maps.places.Autocomplete(document.getElementById(currentInp),
                    options);
            });

            $("#addWait").click(function() {
                totalAC = $("#waitPoint input").length;
                totalAC = totalAC + 1;
                var codeVar = "<div class='form-group'><label class='col-form-label'>Wait " + totalAC +
                    "*:</label> <label class='col-form-label float-right remove-option' style='color:red;'>Remove</label><input id='place" +
                    totalAC +
                    "' placeholder='Enter Full Pick-Up Address & Select From Autocomplete' name='waitAddress[]' class='form-control waitAddress' type='text' /></div>";
                $("#waitPoint").append(codeVar);
            });
        });


        // google auto complte api
        $(document).on('click', '.remove-option', function() {
            $(this).parent().remove();
        })
    </script>


    <script>
        google.maps.event.addDomListener(window, 'load', initialize);

        function initialize() {
            var fromInput = document.getElementById('from');
            var toInput = document.getElementById('to');



            const options = {
                componentRestrictions: {
                    country: "us"
                },
                fields: ["address_components", "geometry", "icon", "name"],
                strictBounds: false,
                types: ["establishment"],
            };

            var from = new google.maps.places.Autocomplete(fromInput, options);
            from.addListener('place_changed', function() {
                var place = from.getPlace();
                $('#latitude').val(place.geometry['location'].lat());
                $('#longitude').val(place.geometry['location'].lng());

            });

            var to = new google.maps.places.Autocomplete(toInput, options);
            to.addListener('place_changed', function() {
                var place = to.getPlace();
                $('#latitude').val(place.geometry['location'].lat());
                $('#longitude').val(place.geometry['location'].lng());

            });


        }
    </script>

    <script>
        $("#add_booking_contact").on("click", function() {
            if ($(this).is(":checked")) {
                $(".add_booking_contact").removeClass("d-none");
            } else {
                $(".add_booking_contact").addClass("d-none");
            }

        });

        $("#car_seats").on("click", function() {
            if ($(this).is(":checked")) {
                $(".car_seats").removeClass("d-none");
            } else {
                $(".car_seats").addClass("d-none");
            }

        });

        $("#add_instructions").on("click", function() {
            if ($(this).is(":checked")) {
                $(".add_instructions").removeClass("d-none");
            } else {
                $(".add_instructions").addClass("d-none");
            }

        });


        $(document).ready(function() {
            if ($("#add_booking_contact").is(':checked')) {
                $(".add_booking_contact").removeClass("d-none");
            }
        });

        $(document).ready(function() {
            $('input[type="radio"]').click(function() {
                var inputValue = $(this).attr("value");
                var targetBox = $("." + inputValue);
                $(".box").not(targetBox).hide();
                $(targetBox).show();
            });
        });
    </script>

    {{-- get vehicke detail --}}
    <script>
        $('.vehicle_type').on('change', function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var id = this.value;
            $('#passengers').empty();
            $('#bags').empty();

            $.ajax({
                url: "<?=  route('admin.vehicle-types.detail') ?>",
                type: 'POST',
                data: {
                    id: id
                },
                success: function(response) {
                    var selectPassenger = $("#passengers");
                    var selectBags = $("#bags");

                    selectPassenger.append($('<option>', {
                        value: "",
                        text: "Select Passengers",

                    }));

                    selectBags.append($('<option>', {
                        value: "",
                        text: "Select Bags",

                    }));

                    for (var i = 1; i <= response[0].passengers; i++) {
                        $("<option/>", {
                            value: i,
                            text: i
                        }).appendTo(selectPassenger);
                    }

                    for (var i = 1; i <= response[1].bags; i++) {
                        $("<option/>", {
                            value: i,
                            text: i
                        }).appendTo(selectBags);
                    }

                }
            });
        });
    </script>

    {{-- get passenger detail --}}
    <script>
        $(function() {
            $('.passenger').select2({
                placeholder: 'Select an passenger',
                ajax: {
                    url: "{{  route('admin.reservations.passenger.all') }}",
                    dataType: 'json',
                    delay: 250,
                    processResults: function(data) {
                        return {
                            results: $.map(data, function(item) {

                                return {
                                    text: item.name + '( ' + item.email + ' )',
                                    id: item.id
                                }
                            })
                        };
                    },
                    cache: true
                }
            })
        })
    </script>


    {{-- calculate price --}}
    <script>
        $('body').on('keyup change paste', 'input, select, textarea, radio', function(e) {

            const directionsService = new google.maps.DirectionsService();

            calculate route(directionsService);


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var vehicleId = $('.vehicle_type').val();
            var serviceType = $('.service_type').val();
            var date = $('.date').val();
            var time = $('.time').val();
            var hours = $('#hours').val();
            var miles = $('.totalDist').val();
            var forwardCarSeat = $('.forward_car_seat').val();
            var rearCarSeat = $('.rear_car_seat').val();
            var boosterCarSeat = $('.booster_car_seat').val();
            var meetAndGreet = $('.meet_and_greet').is(":checked");



            $.ajax({
                url: "<?=  route('admin.reservations.calculate.price') ?>",
                type: 'POST',
                data: {
                    "vehicleId": vehicleId,
                    "serviceType": serviceType,
                    "date": date,
                    "time": time,
                    "miles": miles,
                    "hours": hours,
                    "forwardCarSeat": forwardCarSeat,
                    "rearCarSeat": rearCarSeat,
                    "boosterCarSeat": boosterCarSeat,
                    "meetAndGreet": meetAndGreet,
                },

                success: function(response) {
                    if (response.success) {
                        $('.price').html("$" + response.success.price);
                        $('#payment_price').val(response.success.price);
                        $('#payment_miles').val(response.success.miles);
                        $('#payment_gratuity').val(response.success.gratuity);
                        $('#payment_rushHourCharge').val(response.success.rushHourCharge);
                        $('#payment_perMileCharge').val(response.success.perMileCharge);
                        $('#payment_hoursCharge').val(response.success.hoursCharge);
                        $('#payment_carSeat').val(response.success.carSeat);
                        $('#payment_boosterCarSeat').val(response.success.boosterCarSeat);
                        $('#payment_meetAndGreet').val(response.success.meetAndGreet);
                        $("#button").attr("disabled", false);
                        $("#direaction_error").empty();
                    }

                    if (response.error) {
                        $("#button").attr("disabled", true);
                    }

                },
                error: function(response) {


                }
            });


        });
    </script>

    <script>
        function calculate route(directionsService) {

            var fromAddress = document.getElementById('from').value;
            var fromAirport = document.getElementById('from-airport').value;
            var toAddress = document.getElementById('to').value;
            var toAirport = document.getElementById('to-airport').value;

            var serviceId = document.getElementById('service_type_id').value;


            if (serviceId == 1) {
                var to = toAirport;
                var form = fromAddress;
            }

            if (serviceId == 2) {
                var to = toAddress;
                var form = fromAirport;

            }

            if (serviceId == 3 || serviceId == 4) {
                var to = toAddress;
                var form = fromAddress;
            }


            const waypts = [];
            const checkboxArray = document.getElementsByClassName("stopAddress");
            const waitAddress = document.getElementsByClassName("waitAddress");

            if (serviceId == 1 || serviceId == 2 || serviceId == 3) {
                for (let i = 0; i < checkboxArray.length; i++) {
                    waypts.push({
                        location: checkboxArray[i].value,
                        stopover: true,
                    });
                }
            } else {

                for (let i = 0; i < waitAddress.length; i++) {
                    waypts.push({
                        location: waitAddress[i].value,
                        stopover: true,
                    });
                }

            }

            directionsService
                . route({
                    origin: form,
                    destination: to,
                    waypoints: waypts,
                    optimizeWaypoints: true,
                    travelMode: google.maps.TravelMode.DRIVING,
                })
                .then((response) => {

                    const  route = response. routes[0];
                    var METERS_TO_MILES = 0.000621371192;
                    var totalDist = 0;
                    var totalTime = 0;

                    for (let i = 0; i <  route.legs.length; i++) {
                        totalDist +=  route.legs[i].distance.value;
                        totalTime +=  route.legs[i].duration.value;
                    }

                    totalDist = Math.round(totalDist * METERS_TO_MILES * 10) / 10;
                    document.getElementById("totalDist").value = totalDist;
                    document.getElementById("totalDistance").innerHTML = "Total distance is: " + totalDist + " miles";
                    document.getElementById("totalTime").innerHTML = "Total time is: " + (totalTime / 60).toFixed(2) +
                        " minutes";

                })
                .catch((e) => {
                    // console.log("Directions request failed due to " + status)
                });
        }
    </script>


@endsection
