<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\UserContact;
use App\Models\Contact;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendContactMail(ContactRequest $request)
    {
        // Sanitize input data
        // dd($request->all());
        // $sanitizedRequest = [
        //     'name' => htmlspecialchars($request->input('name'), ENT_QUOTES, 'UTF-8'),
        //     'email' => htmlspecialchars($request->input('email'), ENT_QUOTES, 'UTF-8'),
        //     'phone_no' => htmlspecialchars($request->input('phone_number'), ENT_QUOTES, 'UTF-8'),
        //     'message' => htmlspecialchars($request->input('message'), ENT_QUOTES, 'UTF-8'),
        // ];

        // Log::info($sanitizedRequest);
        // 'name',
        // 'phone_no',
        // 'email',
        // 'message',

        // Send customer email
        // Contact::create($sanitizedRequest);

        $contact =  new Contact();
        $contact->name = $request->name;
        $contact->phone_no = $request->phone_no;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        $mailData = [
            'name' => $request->name,
            'url' => env('APP_URL'),
        ];

        try {
            Mail::to($request->email)->send(new UserContact($mailData));
            Mail::to('spotlimo5@gmail.com')->send(new UserContact($mailData));
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }

        $successMessage = 'Thank You for contacting us !';

        return response()->json(['success' => true, 'message' => $successMessage]);
    }
}
