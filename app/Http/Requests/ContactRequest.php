<?php

namespace App\Http\Requests;

use App\Rules\ReCaptcha;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'phone_no' => ['nullable', 'numeric', 'digits:10'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'g-recaptcha-response' => ['required', new ReCaptcha],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'A Name filed is  required',
            'email.required' => 'An Email Address filed is  required',
            'g-recaptcha-response.required' => 'Google Captcha is required',

        ];
    }
}
