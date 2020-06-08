<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;


class SendEmailController extends Controller
{
    function index() {
        return view('send_email');
    }

    function send(Request $request) {

        $data = array(
            'name' => $request->name,
            'name' => $request->tel,
            'name' => $request->mark,
            'name' => $request->message

        );

        Mail::to('gorivanickiy@gmail.com')->send(new SendMail($data));
        return view('thank-you');


    }


}
