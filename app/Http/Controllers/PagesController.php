<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail;
use App\Mail\MessageFromWebsite;


class PagesController extends Controller
{
    public function index() {
        return view('index');
    }
    public function wood() {
        return view('wood_cutting');
    }
    public function diy() {
        return view('diy');
    }
    public function advice() {
        return view('advice');
    }
    public function fuel() {
        return view('fuel');
    }
    public function contact() {
        return view('contact');
    }
    public function sendEmail(Request $request) {
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        $email = new Mail;

        $email->name = $request['name'];
        $email->email = $request['email'];
        $email->number = $request['number'];
        $email->message = $request['message'];

        \Mail::to('info@larrysdiy.ie')->send(
            new MessageFromWebsite($email)
        );

        return redirect('/contact')->with('mail', 'Thanks for getting in touch. A member of the team will contact you shortly');
    }
}
