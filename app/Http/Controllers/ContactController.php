<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\MailMethods;
//use Mailgun\Mailgun;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact/index');
    }

    public function contact() {
        MailMethods::sendMail(request());
        return redirect()->route('tak');
    }
}
