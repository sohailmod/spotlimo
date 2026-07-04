console.log('calculate')
$(document).ready(function () {
    $("#button").attr("disabled", true);
});
var fromInput = document.getElementById('from');
var toInput = document.getElementById('to');

// const options = {
//     componentRestrictions: {
//         country: "us"
//     },
//     fields: ["formatted_address", "adr_address", "name", "geometry", "icon",],
//     strictBounds: false,
//     types: ["address"],
// };

const options = {
    componentRestrictions: {
      country: "US"
    },
    fields: ["formatted_address", "name", "geometry", "icon"],
    strictBounds: false,
    types: ["geocode", "establishment"], // Include "geocode" and "establishment" types
  };
  
var from = new google.maps.places.Autocomplete(fromInput, options);
var to = new google.maps.places.Autocomplete(toInput, options);



google.maps.event.addListener(from, 'place_changed', () => {
    // console.log(from.getPlace());
    if (from.getPlace()) {
        calculateRoute();
    }
});

google.maps.event.addListener(to, 'place_changed', () => {
    // console.log(to.getPlace());
    if (to.getPlace()) {
        calculateRoute();
    }
});


$(document).on('click', ".stops-wrapper1 input[type=text]", function () {
    var currentInp = $(this).attr("id");

    const options = {
        componentRestrictions: {
            country: "us"
        },
        fields: ["formatted_address", "adr_address", "name", "geometry", "icon",],
        strictBounds: false,
        types: ["address"],
    };

    var wayPoint = new google.maps.places.Autocomplete(document.getElementById(currentInp),
        options);


    google.maps.event.addListener(wayPoint, 'place_changed', () => {
        if (wayPoint.getPlace()) {
            calculateRoute();
        }
    });
});






$('select.airport-select').on('change', function () {
    calculateRoute();
});

$('select.hours').on('change', function () {
    calculateRoute();
});

$('.itemDot').click(function () {
    calculateRoute();
});

$("#pickUpdate").change(function () {
    calculateRoute();
});

$("#pickUpTime").change(function () {
    calculateRoute();
});

$('#rear_car_seat').on('change', function () {
    calculateRoute();
});

$('#booster_car_seat').on('change', function () {
    calculateRoute();
});

$("#meetAndGreetCheck").change(function () {
    if ($(this).val() == 'true') {
        calculateRoute();
    }
});


$(document).on('click', '.btn-remove-destination', function () {

    let input_item = $(this).parent();
    input_item.remove();
    calculateRoute();
});


function calculateRoute() {


    var fromAddress = document.getElementById('from').value;
    var fromAirport = document.getElementById('from-airport').value;
    var toAddress = document.getElementById('to').value;
    var toAirport = document.getElementById('to-airport').value;

    var serviceId = document.querySelector('input[name="service_id"]:checked').value;


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


    if (to && form) {
        const directionsService = new google.maps.DirectionsService();


        const waypts = [];
        const checkboxArray = document.getElementsByClassName("stopAddress");

        for (let i = 0; i < checkboxArray.length; i++) {
            waypts.push({
                location: checkboxArray[i].value,
                stopover: true,
            });
        }


        directionsService
            .route({
                origin: form,
                destination: to,
                waypoints: waypts,
                optimizeWaypoints: true,
                travelMode: google.maps.TravelMode.DRIVING,
            })
            .then((response) => {

                const route = response.routes[0];
                var METERS_TO_MILES = 0.000621371192;
                var totalDist = 0;
                var totalTime = 0;

                for (let i = 0; i < route.legs.length; i++) {
                    totalDist += route.legs[i].distance.value;
                    totalTime += route.legs[i].duration.value;
                }

                totalDist = Math.round(totalDist * METERS_TO_MILES * 10) / 10;
                document.getElementById("totalDist").value = totalDist;

                if (totalDist) {
                    caculatePrice();
                }

            })
            .catch((e) => {
                console.log("Directions request failed due to " + status)
            });

    }

}

function caculatePrice() {
    var vehicleId = $('input[name="vehicle_type_id"]:checked').val();
    var serviceType = $('input[name="service_id"]:checked').val();
    var date = $('input[name="date"]').val();
    var time = $('input[name="time"]').val();
    var hours = $("#hours option:selected").val();
    var miles = $('input[name="totalDist"]').val();
    var forwardCarSeat = $('.ff-seat-select option:selected').val();
    var rearCarSeat = $('.rf-seat-select option:selected').val();
    var boosterCarSeat = $('.boost-seat-select option:selected').val();
    var meetAndGreet = $('input[name="meet_and_greet"]:checked').val();

    const formatter = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'USD',

    });


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $.ajax({
        url: "/calculate-price",
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



        success: function (response) {
            if (response.success) {
        
                if (vehicleId == 3 || vehicleId == 4 || vehicleId == 5) {

                    $("#button").attr("disabled", false);
                    $('.price').html("");
                    $('#button').text('SUBMIT ENQUIRY');

                } else {
                    $("#button").attr("disabled", false);
                    $('#button').text('PAY NOW');
                    $('.price').html(formatter.format(response.success.price));
                }

                if ($('#from').val().length != 0 || $('#to').val().length != 0 || $(


                    '#from-airport').val() === "" || $('#to-airport').val() === "") {

                    $('#payment_price').val(response.success.price);
                    $('#payment_miles').val(response.success.miles);
                    $('#payment_gratuity').val(response.success.gratuity);
                    $('#payment_rushHourCharge').val(response.success.rushHourCharge);
                    $('#payment_perMileCharge').val(response.success.perMileCharge);
                    $('#payment_hoursCharge').val(response.success.hoursCharge);
                    $('#payment_carSeat').val(response.success.carSeat);
                    $('#payment_boosterCarSeat').val(response.success.boosterCarSeat);
                    $('#payment_meetAndGreet').val(response.success.meetAndGreet);
                    $('.total-wrapper').addClass('fixed-bottom');

                    $('.total-distance').html(response.success.miles + "mi");
                    // $('.gratuity').html("$" + response.success.gratuity);

                    $('.rush-hour-charge').html("$" + response.success.rushHourCharge);
                    $('.per-mile-charge').html("$" + response.success.perMileCharge);
                    $('.hours-charge').html("$" + response.success.hoursCharge);

                    // $('.base-rate').html(formatter.format(response.success.subTotal));
                    $('.base-rate').html(formatter.format(response.success.price));


                    if (response.success.carSeat) {
                        $('.seat').removeClass('d-none');
                        $('.car-seat-cal').html(rearCarSeat + " x " + "$20");
                        $('.car-seat').html("$" + response.success.carSeat);
                    } else {
                        $('.seat').addClass('d-none');
                    }

                    if (response.success.boosterCarSeat) {
                        $('.booster-car-seat').html("$" + response.success.boosterCarSeat);
                        $('.booster-seat').removeClass('d-none');

                    } else {
                        $('.booster-seat').addClass('d-none');
                    }

                    if (response.success.meetAndGreet) {
                        $('.meet-greet').removeClass('d-none');
                        $('.meet').html("$" + response.success.meetAndGreet);
                    } else {
                        $('.meet-greet').addClass('d-none');
                    }

                } else {
                    $('.total-wrapper').removeClass('fixed-bottom');
                    $(".price").empty();
                    $("#button").attr("disabled", true);
                }
            }



            if (response.error) {
                $("#button").attr("disabled", true);
            }

        },
        error: function (response) {


        }
    });

    // payment_miles

}




