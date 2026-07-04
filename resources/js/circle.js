


let i = 2;


$(document).ready(function () {
    var radius = 200;
    var fields = $('.itemDot');
    var container = $('.dotCircle');
    var width = container.width();
    radius = width / 2.5;

    var height = container.height();
    var angle = 0, step = (2 * Math.PI) / fields.length;
    fields.each(function () {
        var x = Math.round(width / 2 + radius * Math.cos(angle) - $(this).width() / 2);
        var y = Math.round(height / 2 + radius * Math.sin(angle) - $(this).height() / 2);
        if (window.console) {
            // console.log($(this).text(), x, y);
        }

        $(this).css({
            left: x + 'px',
            top: y + 'px'
        });
        angle += step;
    });


    $('.itemDot').click(function () {
        var dataTab = $(this).data("tab");
        var isSpecialTab = dataTab == 3 || dataTab == 4 || dataTab == 5;
    
        if (!isSpecialTab) {
            // Save current form values
            var formValues = {
                from: $('#from').val(),
                to: $('#to').val(),
                fromAirport: $('#from-airport').val(),
                airlineNo: $('#airlineNo').val(),
                flightNo: $('#flightNo').val(),
                toAirport: $('#to-airport').val(),
                stopAddress: $('.stopAddress').val(),
                stopsWrapper: $('.stops-wrapper1').children().clone(),
                price: $('.price').html()
            };
        }
    
        // Clear form fields
        $('#from').val("");
        $('#to').val("");
        $('#from-airport').val("");
        $('#airlineNo').val("");
        $('#flightNo').val("");
        $('#to-airport').val("");
        $('.stopAddress').val("");
        $('.stops-wrapper1').empty();
        $('.price').html("");
        $("#button").attr("disabled", true);
    
        if (isSpecialTab) {
            $("#button").attr("disabled", true);
            $('.price').html("");
            $('#button').text('SUBMIT ENQUIRY').removeClass('verify-btn');
        } else {
            $('#button').text('PAY NOW').addClass('verify-btn');
        }
    
        $('.itemDot').removeClass('active');
        $(this).addClass('active');
        $('.CirItem').removeClass('active');
        $('.CirItem' + dataTab).addClass('active');
        $('.CirItem .swiper-slide .content input[name="vehicle_type_id"]').removeAttr("checked");
        $('.CirItem' + dataTab + ' .swiper-slide .content input[name="vehicle_type_id"]').attr('checked', 'checked');
        i = dataTab;
    
        $('.dotCircle').css({
            "transform": "rotate(" + (360 - (i - 1) * 36) + "deg)",
            "transition": "2s"
        });
        $('.itemDot').css({
            "transform": "rotate(" + ((i - 1) * 36) + "deg)",
            "transition": "1s"
        });
    
        if (!isSpecialTab) {
            // Restore form values
            $('#from').val(formValues.from);
            $('#to').val(formValues.to);
            $('#from-airport').val(formValues.fromAirport);
            $('#airlineNo').val(formValues.airlineNo);
            $('#flightNo').val(formValues.flightNo);
            $('#to-airport').val(formValues.toAirport);
            $('.stopAddress').val(formValues.stopAddress);
            $('.stops-wrapper1').append(formValues.stopsWrapper);
            $('.price').html(formValues.price);
        }
    });
    

    setInterval(function () {
        var dataTab = $('.itemDot.active').data("tab");
        if (dataTab > 5 || i > 5) {
            dataTab = 1;
            i = 1;
        }
        $('.itemDot').removeClass('active');
        $('[data-tab="' + i + '"]').addClass('active');
        $('.CirItem').removeClass('active');
        $('.CirItem' + i).addClass('active');
        i++;


        $('.dotCircle').css({
            "transform": "rotate(" + (360 - (i - 2) * 36) + "deg)",
            "transition": "2s"
        });
        $('.itemDot').css({
            "transform": "rotate(" + ((i - 2) * 36) + "deg)",
            "transition": "1s"
        });

    }, 500000);

});



