<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'from.address' => 'required_if:service_id,1,3,4',
            'from.airport' => 'required_if:service_id,2',
            'to.airport' => 'required_if:service_id,1',
            'to.address' => 'required_if:service_id,2,3,4',
            'flight_number' => 'required_if:service_id,2',
            'airline' => 'required_if:service_id,2',
            'hours' => 'required_if:service_id,4',
            'booking_contact.name' => 'required_if:add_booking_contact,on',
            'booking_contact.email' => 'required_if:add_booking_contact,on',
            'booking_contact.phone' => 'required_if:add_booking_contact,on',
            'date' => 'required|after_or_equal:today',
            'hours' => 'required_if:service_type_id,4',
            'passenger.name' => 'required_if:create_passenger,create_passenger',
            'passenger.email' => 'required_if:create_passenger,create_passenger',
            'passenger.phone' => 'required_if:create_passenger,create_passenger',
            'passenger_id' => 'required_if:create_passenger,existing_passenger',
        ];
    }

    public function messages()
    {
        return [
            'from.address.required_if' => 'The from address field is required when service type is to airport or point to point or hourly charter',
            'from.airport.required_if' => 'The from airport field is required when service type is from airport',
            'to.airport.required_if' => 'The to airport field is required when service type id is to airport.',
            'to.address.required_if' => 'The to address field is required when service type id is from airport  or point to point or hourly charter.',
            'airline' => 'The airline field is required when service type is from airport',
            'flight_number' => 'The flight number field is required when service type is from airport ',
            'hours' => 'The hours field is required when service type is hourly charter',
            'booking_contact.name' => 'Name field is required when add booking contact',
            'booking_contact.email' => 'Email field is required when add booking contact',
            'booking_contact.phone' => 'Phone number field is required when add booking contact',
            'hours.required_if' => 'The hours field is required when service type is hourly charter',
            'passenger.name' => 'Name field is required when create new passenger',
            'passenger.email' => 'Email field is required when create new passenger',
            'passenger.phone' => 'Phone number field is required when create new passenger',
            'passenger_id' => 'Select passenger filed is required when exiting passenger',
        ];
    }
}
