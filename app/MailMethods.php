<?php
/**
 * Created by PhpStorm.
 * User: rubenthuesen
 * Date: 15/08/2017
 * Time: 11.44
 */

namespace App;
use Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Response;

class MailMethods
{

    public static function sendNotificationToAdmin(Array $data, $message_id) {
        Mail::send(
            'contact.send_notification',
            [
                'user'  => User::find($data['user_id'])->name,
                'body'  => $data['title'],
                'title' => $data['body'],
                'url'   => URL::to('/beskeder/'.$message_id)
            ], function($message) {
                $message->from('info@flamingomedia.dk');
                $message->to('rt@hshop.dk', 'Admin')->subject('Ny besked fra kunde');
            }
        );
    }

    public static function sendMail(\Illuminate\Http\Request $request)
    {
        $data =  [
            'message' => $request->message,
            'subject' => $request->subject,
            'email'   => $request->email
        ];

        if(auth()->check()) {
            $data['user_id'] =  Auth::user()->id;
        }

        if($request->name != null) {
            $data['name'] = request('name');
        }

        $validator = Validator::make(
           $data,
            [
                'email' => 'required',
                'message' => 'required|min:2',
                'subject' => 'required'
            ]
        );

        if($validator->passes()) {
            Mail::send(
                'contact.send',
                [
                    'email' => $data['email'],
                    'body' => $data['message'],
                    'subject' => $data['subject']
//                'user_id' => $data['user_id']
                ], function($message)
                {
                    $message->from("info@flamingomedia.dk");
                    //$message->to('rubyte@protonmail.com', 'Admin')->bcc('sales@company.com')->subject('Flamingo Kundekontakt');
                    $message
                        ->to("rubyte@protonmail.com", "andersjakobsen0308@gmail.com", "ezaim@hotmail.com", "Admin")
                        ->subject('Flamingo Kundekontakt');
                }
            );

//            header("Location:kontakt?msg-send=1");
        } else {
            return redirect('/kontakt')->with('message',
                'Der skete en fejl på mailserveren - Vi beklager! Prøv eventuelt igen eller skriv direkte til: info@flamingomedia.dk');
        }



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
