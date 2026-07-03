@extends('adminlte::page')

@section('title', 'Edit customer reservations')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit customer reservations</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Edit customer reservations</li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')

    @php
        $details = unserialize($data->vehicle_detail);
    @endphp
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Reservations information {{ $data->code }}
                                    ({{ $data->service->name }})</h3>
                                <button type="submit"
                                    class="btn btn-{{ $data->status_color }}">{{ $data->status }}</button>
                            </div>
                        </div>
                        <div class="card-body">
                            {{-- Start map section --}}
                            <div id="map" class="mb-5"></div>

                            <input type="hidden" id="start" value="{{ $data->from }}">
                            <input type="hidden" id="end" value="{{ $data->to }}">

                            @if ($waypoints)
                                {{-- {{$waypoints}} --}}
                                <select multiple id="waypoints" style='display:none'>
                                    @foreach ($waypoints as $waypoint)
                                        <option value="{{ $waypoint }}" selected>{{ $waypoint }}</option>
                                    @endforeach
                                </select>
                            @else
                                <select multiple id="waypoints" style='display:none'>

                                </select>
                            @endif

                            {{-- End map section --}}
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="info-box bg-light">
                                            <div class="info-box-content">
                                                <span class="info-box-text text-center text-muted">Pick-up Date</span>
                                                <span
                                                    class="info-box-number text-center text-muted mb-0">{{ date('m/d/Y', strtotime($data->date)) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="info-box bg-light">
                                            <div class="info-box-content">
                                                <span class="info-box-text text-center text-muted">Time</span>
                                                <span
                                                    class="info-box-number text-center text-muted mb-0">{{ date('g:i A', strtotime($data->time)) }}</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="d-flex">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>Total Miles</th>
                                                <td></td>
                                                <td>{{ $data->miles }} mi</td>
                                            </tr>
                                            @if ($data->hours)
                                                <tr>
                                                    <th>Total Hours</th>
                                                    <td></td>
                                                    <td>{{ $data->hours }}</td>
                                                </tr>
                                            @endif

                                            <tr>
                                                <th style="width:50%">Subtotal:</th>
                                                @if ($detail->rush_hour_charge)
                                                    <td>{{ $data->miles }}mi x ${{ $vehicleType->rush_hour_charge }}</td>
                                                    <td>${{ $detail->rush_hour_charge }}</td>
                                                @endif
                                                @if ($detail->per_mile_charge)
                                                    <td>{{ $data->miles }}mi x ${{ $vehicleType->per_mile_charge }}</td>
                                                    <td>{{ $detail->per_mile_charge }}</td>
                                                @endif

                                                @if ($detail->hours_charge)
                                                    <td>{{ $data->hours }} x ${{ $vehicleType->hourly_charge }}</td>
                                                    <td>{{ $detail->hours_charge }}</td>
                                                @endif
                                            </tr>
                                            @if ($detail->gratuity)
                                                <tr>
                                                    <th>Gratutiy (15%)</th>
                                                    <td></td>
                                                    <td>${{ $detail->gratuity }}</td>
                                                </tr>
                                            @endif

                                            @if ($detail->car_seat)
                                                <tr>
                                                    <th>Car Seat:</th>
                                                    <td>{{ $details['rear_car_seat'] }} x 20</td>
                                                    <td>${{ $detail->car_seat }}</td>
                                                </tr>
                                            @endif
                                            @if ($detail->booster_seat)
                                                <tr>
                                                    <th>Booster Seat:</th>
                                                    <td></td>
                                                    <td>${{ $detail->booster_seat }}</td>
                                                </tr>
                                            @endif
                                            @if ($detail->meet_greet)
                                                <tr>
                                                    <th>Meet & Greet:</th>
                                                    <td></td>
                                                    <td>${{ $detail->meet_greet }}</td>
                                                </tr>
                                            @endif

                                            <tr>
                                                <th>Total:</th>
                                                <td></td>
                                                <td style="font-weight: bold; font-size:18px">
                                                    {{ format_price($detail->price) }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            @if ($data->instructions)
                                <div class="col-md-12">
                                    <div class="callout callout-info">
                                        <h5><i class="fas fa-info"></i> Instructions:</h5>
                                        {{ $data->instructions }}
                                    </div>
                                </div>
                            @endif

                            <div class="d-flex justify-content-between">
                                <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Confirm
                                    Reservation</label>
                                <button type="submit" class="btn btn-primary">Confirm</button>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    {{-- Start Main Passenger --}}
                    <div class="card">
                        <div class="card-header">
                            <h4> <strong>Main Passenger</strong></h4>
                        </div>
                        <div class="col-sm-12 mt-2">
                            <address>
                                <h5> <strong>{{ $mainPassenger->name }}</strong></h5>
                                <strong> Phone: </strong> {{ $mainPassenger->phone }}<br>
                                <strong> Email:</strong> {{ $mainPassenger->email }}<br>
                                @if ($mainPassenger->company)
                                    <strong> Comapny :</strong> {{ $mainPassenger->company }}
                                @endif
                            </address>
                        </div>
                    </div>

                    {{-- End Main Passenger --}}


                    {{-- Start Booking contact --}}
                    <div class="card">
                        <div class="card-header">
                            <h4> <strong> Booking contact </strong></h4>
                        </div>
                        <div class="col-sm-12 mt-2">
                            @if ($bookingContact)
                                <address>

                                    <h1> <strong>{{ $bookingContact->name }}</strong></h1>
                                    <strong> Phone:</strong> {{ $bookingContact->phone }}<br>
                                    <strong> Email:</strong> {{ $bookingContact->email }}
                                </address>
                            @else
                                <address>
                                    <h5> <strong>{{ $mainPassenger->name }}</strong></h5>
                                    <strong> Phone: </strong> {{ $mainPassenger->phone }}<br>
                                    <strong> Email:</strong> {{ $mainPassenger->email }}<br>
                                </address>
                            @endif
                        </div>
                    </div>

                    {{-- End Booking contact --}}

                    {{-- Start Vehicle Detail --}}
                    <div class="card">
                        <div class="card-header">
                            <h4> <strong>Vehicle Detail</strong></h4>
                        </div>
                        <div class="col-sm-12 mt-2">
                            <address>


                                <h5><strong>{{ $vehicleType->name }}</strong></h5>
                                <strong> Passengers:</strong> {{ $data->passengers }}<br>
                                <strong>Bags:</strong> {{ $data->bags ? $data->bags : '0' }}<br>
                                <strong> Rear Car Seat:</strong> {{ $details['rear_car_seat'] }}<br>
                                <strong> Booster Car Seat:</strong> {{ $details['booster_car_seat'] }}
                            </address>
                        </div>
                    </div>

                    {{-- Start Vehicle Detail --}}
                    <div class="card">
                        <div class="card-header">
                            <h4><strong> Payment Detail </strong></h4>
                        </div>
                        <div class="col-sm-12 mt-2">
                            <address>
                                <strong> Status:</strong>
                                @if ($data->payment->status == 'PENDING')
                                    <span class="text-danger"> <strong> {{ $data->payment->status }} </strong> </span>
                                @else
                                    <span class="text-success"> <strong> {{ $data->payment->status }} </strong> </span>
                                @endif <br>
                                <strong> Charge Id:</strong> {{ $data->payment->charge_id }}<br>
                                <strong> Payment Method:</strong> {{ $data->payment->payment_channel }}<br>
                            </address>
                        </div>
                    </div>

                    {{-- End Vehicle Detail --}}

                    {{-- Start Flight Detail --}}
                    @if ($data->airline)
                        <div class="card">
                            <div class="card-header">
                                <h4><strong> Flight Detail </strong></h3>
                            </div>

                            <div class="col-sm-12 mt-2">
                                <strong> Airline:</strong> {{ $data->airline }}<br>
                                <strong> Flight Number:</strong> {{ $data->flight_number }}<br>
                            </div>
                        </div>
                    @endif

                    {{-- End Flight Detail --}}


                    <div class="card">
                        <div class="col-sm-12 mt-2">
                            <div id="directions-panel"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

@section('css')
    <style>
        #map {
            min-height: 400px;
        }
    </style>
@stop

@section('js')
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY')}}&libraries=places"></script> --}}

    <script src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries=places&callback=initMap"
        async defer></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <script>
        function initMap() {
            const directionsService = new google.maps.DirectionsService();
            const directionsRenderer = new google.maps.DirectionsRenderer();
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 6,
                center: {
                    lat: 41.85,
                    lng: -87.65
                },
            });

            directionsRenderer.setMap(map);
            calculateAndDisplayRoute(directionsService, directionsRenderer);
        }

        function calculateAndDisplayRoute(directionsService, directionsRenderer) {
            const waypts = [];
            const checkboxArray = document.getElementById("waypoints");

            for (let i = 0; i < checkboxArray.length; i++) {
                if (checkboxArray.options[i].selected) {
                    waypts.push({
                        location: checkboxArray[i].value,
                        stopover: true,
                    });
                }
            }

            directionsService.route({
                    origin: document.getElementById("start").value,
                    destination: document.getElementById("end").value,
                    waypoints: waypts,
                    optimizeWaypoints: true,
                    travelMode: google.maps.TravelMode.DRIVING,
                })
                .then((response) => {
                    directionsRenderer.setDirections(response);

                    const route = response.routes[0];
                    const summaryPanel = document.getElementById("directions-panel");

                    summaryPanel.innerHTML = "";

                    // For each route, display summary information.
                    for (let i = 0; i < route.legs.length; i++) {
                        const routeSegment = i + 1;

                        summaryPanel.innerHTML +=
                            "<h4><b>Route Segment: " + routeSegment + "</b></h4>";
                        summaryPanel.innerHTML += "<strong>" + route.legs[i].start_address + "</strong><br>  To <br> ";
                        summaryPanel.innerHTML += "<strong>" + route.legs[i].end_address + "</strong><br>";
                        summaryPanel.innerHTML += "<strong>Total Miles: </strong>" + route.legs[i].distance.text + "<br><br>";
                    }
                })
                .catch((error) => {
                    console.log("Error calculating route:", error);
                });
        }

        $(document).ready(function() {
            initMap();
        });
    </script>

@endsection
