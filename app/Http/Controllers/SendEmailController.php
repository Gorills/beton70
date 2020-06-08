<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;


class SendEmailController extends Controller
{
    function index() {
        return view('index');
    }

    function send(Request $request) {

        $data = array(
            'name' => $request->name,
            'tel' => $request->tel,
            'mark' => $request->mark,
            'message' => $request->message

        );

        Mail::to('gorivanickiy@gmail.com')->send(new SendMail($data));
        return view('thank-you');


    }


}
