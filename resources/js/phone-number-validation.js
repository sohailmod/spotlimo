
// passenger mobile number

var mobile_code = document.querySelector(".mobile_code"),
    continueBtn = document.querySelector("#button"),
    errorMsg = document.querySelector("#error-msg"),
    validMsg = document.querySelector("#valid-msg");
var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

continueBtn.disabled = false;

var itiNumber = window.intlTelInput(mobile_code, {
    allowDropdown: false,
    onlyCountries: ['us'],
    separateDialCode: true,
    formatOnDisplay: true,
});

var reset = function () {
    mobile_code.classList.remove("error");
    errorMsg.innerHTML = "";
    errorMsg.classList.add("hide");
    validMsg.classList.add("hide");
};
mobile_code.addEventListener('blur', function () {
    reset();
    if (mobile_code.value.trim()) {
        if (itiNumber.isValidNumber()) {
            validMsg.classList.remove("hide");
            continueBtn.disabled = false;
        } else {
            mobile_code.classList.add("error");
            var errorCode = itiNumber.getValidationError();
            errorMsg.innerHTML = errorMap[errorCode];
            errorMsg.classList.remove("hide");
            continueBtn.disabled = true;
        }
    }
});
mobile_code.addEventListener('change', reset);

// booking contact phone number
var booking_mobile_code = document.querySelector("#booking_mobile_code"),
    reservationBtn = document.querySelector("#button"),
    errorBookingMsg = document.querySelector("#error-booking-phone-msg"),
    validBookingMsg = document.querySelector("#valid-booking-phone-msg");
var erroBookingrMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

reservationBtn.disabled = false;

var iti = window.intlTelInput(booking_mobile_code, {
    allowDropdown: false,
    onlyCountries: ['us'],
    separateDialCode: true,
    formatOnDisplay: true,
});

var reset = function () {
    booking_mobile_code.classList.remove("error");
    errorBookingMsg.innerHTML = "";
    errorBookingMsg.classList.add("hide");
    validBookingMsg.classList.add("hide");
};
booking_mobile_code.addEventListener('blur', function () {
    reset();
    if (booking_mobile_code.value.trim()) {
        if (iti.isValidNumber()) {
            validBookingMsg.classList.remove("hide");
            reservationBtn.disabled = false;
        } else {
            booking_mobile_code.classList.add("error");
            var errorBookingCode = iti.getValidationError();
            errorBookingMsg.innerHTML = erroBookingrMap[errorBookingCode];
            errorBookingMsg.classList.remove("hide");
            reservationBtn.disabled = true;
        }
    }
});
booking_mobile_code.addEventListener('change', reset);

