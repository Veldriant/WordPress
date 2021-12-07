<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class Feedback extends Controller
{
    public function FeedBack(Request $request)
    {
        Mail::send('emails.contactmail',[
            'name' => $request->name,
            'email' => $request->email,
            'msg' => $request->msg,
        ],function($mail) use($request){
            $mail->from(env('MAIL_FROM_ADDRESS'),$request->name);
            $mail->to('veldriant3021@gmail.com')->subject('Contact Us Message');
        });
        return view('index');
    }
}
