<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio;
use Illuminate\Contracts\Validation\Validator;

class SmsController extends Controller
{

    public function send()
    {
        $this->validate(request(),
            [
                'phone'  => 'bail|required|min:8|max:8',
                'body'  => 'required'
            ],
            [
                'phone.min' => 'Telefonnummeret skal være 8 tal langt',
                'phone.max' => 'Telefonnummeret skal være 8 tal langt',
                'phone.required' => 'Venligst tilføj telefonnummer',
                'body.required'  => 'Venligst fortæl os hvad din henvendelse handler om'
            ]);

        $message = "";
        if(null !== request('name')) {
            $message .= "( " . request('name') . " ) ";
        }

        $message .= request('body') . " ";
        $message .= "Tlf.Nr. [ " . request('phone') . " ] ";

        try {
            Twilio::message("+45" . request('phone'), $message);
        } catch(\Services_Twilio_RestException $e) {
            return redirect('/')->with('errors', $e->getMessage());
        }

    }
}
