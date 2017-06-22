<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
        dd ($data);

//        if($contact = Contact::create($data)) {
//            return redirect("/kontakt")->with('message', 'Tak for beskeden');
//        } else {
//            return back()->with('message', 'Noget gik sku galt!');
//        }
    }
}
