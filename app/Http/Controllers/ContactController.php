<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
//use Mailgun\Mailgun;
use Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact/index');
    }

    public function sendMail()
    {
        $this->validate(request(), [
            'email'  => 'required',
            'message'  => 'required',
            'subject' => 'required'
        ]);

        $data = [
            'message' => request('message'),
            'subject' => request('subject'),
            'email'   => request('email')
        ];

        if(auth()->check()) {
           $data['user_id'] =  Auth::user()->id;
        }

        if((request('name') != null)) {
           $data['name'] = request('name');
        }

        Mail::send('contact.send',
            [
                'email' => $data['email'],
                'body' => $data['message'], // cannot use reserved name 'message'??
                'subject' => $data['subject']
//                'user_id' => $data['user_id']
            ], function($message)
            {
                $message->from('info@flamingo.dk');
//                $message->to(env('MAIL_FROM_NAME', 'Admin'))->subject('Flamingo Kundekontakt');
                $message->to('rt@hshop.dk', 'Admin')->subject('Flamingo Kundekontakt');
            });

        return back()
            ->with('message', 'Tak for din henvendelse, vi vender tilbage hurtigst muligt');

//        Mailgun::sendMessage('emails.invoice', $data, function ($message) {
//            $message
//                ->subject('Your Invoice')
//                ->to('john.doe@example.com', 'John Doe')
//                ->bcc('sales@company.com')
//                ->attach(storage_path('invoices/12345.pdf'))
//                ->trackClicks(true)
//                ->trackOpens(true)
//                ->tag(['tag1', 'tag2'])
//                ->campaign(2);
//        });

//        if($contact = Contact::create($data)) {
//            return redirect("/kontakt")->with('message', 'Tak for beskeden');
//        } else {
//            return back()->with('message', 'Noget gik sku galt!');
//        }
    }
}
