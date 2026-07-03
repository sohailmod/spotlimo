
// Date picker
$(function () {
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if (month < 10)
        month = '0' + month.toString();
    if (day < 10)
        day = '0' + day.toString();
    var maxDate = year + '-' + month + '-' + day;
    $('#pickUpdate').attr('min', maxDate);
});

$(document).ready(function () {
    $('#mobile_code').usPhoneFormat({
        format: 'xxx-xxx-xxxx',
    });
    $('#booking_mobile_code').usPhoneFormat({
        format: 'xxx-xxx-xxxx',
    });
});


$('select.from-field').on('change', function () {
    $('.flight-airline-info-wrp').removeClass('d-none');
    $('#airlineNo').prop('required', true);
    $('#flightNo').prop('required', true);
});

$("input[type=radio][name=service_id]").change(
    function () {
        if (this.checked && this.value !== 2) {
            $('.flight-airline-info-wrp').addClass('d-none');
        }
    });
$(document).ready(function () {
    if ($("input[type=radio][name=service_id]:checked").val() == 1) {
        $('.to-field').removeClass('d-none');
        $('.from-field').addClass('d-none');
        $('.to-field-wrapper').addClass('select-active');
        $('.from-field-wrapper').removeClass('select-active');
    }
    if ($('.swiper-slide .content input[name="vehicle_type_id"]').is(':checked')) {
        $(this).parents(".CirItem").addClass('active-vehicle').siblings().removeClass(
            'active-vehicle');
    }
    var id = 0;

    $('.btn-add-destination').on("click", function () {
        id = $(".stops-wrapper1 input").length;
        id = id + 1;
        var append = `<div class="input-wrp" id="last-` + id + `">
        <span class="inputlabel">Stop ` + id + ` :</span>
        <input class="w-100 destination-input stopAddress"  type="text" id="toPlace` + id + `"  placeholder="Enter Full Pick-Up Address & Select From Autocomplete" name='stopAddress[]'>
        <button type="button" class="btn btn-outline-danger btn-remove-destination"><i class="bi bi-x-lg"></i></button>
        </div>`;
        $(".stops-wrapper1").append(append)
    });



    $('#carSeatsCheck').change(function () {
        if ($(this).is(":checked")) {
            console.log("check box car seats")
            $('.car-seats-fields-wrp').show();
        } else {
            $('.car-seats-fields-wrp').hide();
        }
    });
    $('#addInstructionCheck').change(function () {
        if ($(this).is(":checked")) {
            console.log("check box car seats")
            $('.add-instruction-fields-wrp').show();
        } else {
            $('.add-instruction-fields-wrp').hide();
        }
    });
    $('#bookinContactCheck').change(function () {
        if ($(this).is(":checked")) {
            $('#booking_name').prop('required', true);
            $('#booking_email').prop('required', true);
            $('.booking_phone').prop('required', true);
            $('.booking-contact-fields-wrp').show();
        } else {
            $('.booking-contact-fields-wrp').hide();
            $('#booking_name').removeAttr('required');
            $('#booking_email').removeAttr('required');
            $('.booking_phone').removeAttr('required');
        }
    });

});
$("input[type=radio][name=service_id]").change(
    function () {
        if (this.checked && this.value == 4) {

            $('#from').val("");
            $('#to').val("");
            $('#from-airport').val("");
            $('#airlineNo').val("");
            $('#flightNo').val("");
            $('#to-airport').val("");
            $('.stopAddress').val("");
            $('.stops-wrapper1').children().remove();
            $('.price').html("");
            $("#button").attr("disabled", true);

            $('.to-wrapper .input-wrp .btn-add-destination').addClass('d-none');
            $('.from-wrapper .input-wrp .btn-add-destination').removeClass('d-none');
            $('.hours-input-input-wrp').show();

        }
        if ((this.checked && this.value == 1) || (this.checked && this.value == 2) || (this.checked && this
            .value == 3)) {

            $('#from').val("");
            $('#to').val("");
            $('#from-airport').val("");
            $('#to-airport').val("");
            $('.stopAddress').val("");
            $('#airlineNo').val("");
            $('#flightNo').val("");
            $('.stops-wrapper1').children().remove();
            $('.price').html("");
            $("#button").attr("disabled", true);

            if ($('.to-wrapper .input-wrp .btn-add-destination').hasClass('d-none')) {
                $('.to-wrapper .input-wrp .btn-add-destination').removeClass('d-none');
                $('.from-wrapper .input-wrp .btn-add-destination').addClass('d-none');
                $('.hours-input-input-wrp').hide();

            }
        }

        if ((this.checked && this.value == 1) || (this.checked && this.value == 3) || (this.checked && this
            .value == 4)) {

            $('#airlineNo').removeAttr('required');
            $('#flightNo').removeAttr('required');
        }
    });
$("input[type=radio][name=service_id]").change(
    function () {
        if ((this.checked && this.value == 4) || (this.checked && this.value == 3)) {
            $('.to-field').addClass('d-none');
            $('.from-field').addClass('d-none');
            $('.to-field-wrapper').removeClass('select-active');
            $('.from-field-wrapper').removeClass('select-active');
        }
    });
$("input[type=radio][name=service_id]#service-1").change(
    function () {
        if (this.checked && this.value == 1) {
            $('.from-field').addClass('d-none');
            $('.to-field').removeClass('d-none');
            $('.to-field-wrapper').addClass('select-active');
            $('.from-field-wrapper').removeClass('select-active');
        }
    });
$("input[type=radio][name=service_id]#service-2").change(
    function () {
        if (this.checked && this.value == 2) {
            $('.to-field').addClass('d-none');
            $('.from-field').removeClass('d-none');
            $('.to-field-wrapper').removeClass('select-active');
            $('.from-field-wrapper').addClass('select-active');
        }
    });
    
    $('.swiper-slide .content input[name="vehicle_type_id"]').on("click", function () {
    if ($(this).is(':checked')) {
        
        $(this).parents(".CirItem").addClass('active-vehicle').siblings().removeClass(
            'active-vehicle');
            
        }
    });

    $('.checkval').on("click", function () {

        console.log($('#mobile_code').val());
    });
    
  
        

//  get vehicke detail

$(document).ready(function () {

    if ($('.swiper-slide .content input[name="vehicle_type_id"]').is(':checked')) {

        var id = $('.swiper-slide .content input[name="vehicle_type_id"]').val();


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.passenger-selector').empty();
        $('.bags-selector').empty();

        $.ajax({
            url: "/get-vehicle-detail",
            type: 'POST',
            data: {
                id: id
            },
            success: function (response) {
                var selectPassenger = $(".passenger-selector");
                var selectBags = $(".bags-selector");

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

    };
});

$('.itemDot').click(function () {
    var id = $(this).data("tab");

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.passenger-selector').empty();
    $('.bags-selector').empty();

    $.ajax({
        url: "/get-vehicle-detail",
        type: 'POST',
        data: {
            id: id
        },
        success: function (response) {
            var selectPassenger = $(".passenger-selector");
            var selectBags = $(".bags-selector");

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

