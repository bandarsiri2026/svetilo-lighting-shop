<?php

namespace App\Http\Controllers;
use App\Mail\MailClass;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class MailSetting extends Controller
{
    public function send_form(ContactRequest $request)
    {
        $name = $request->name;
        $email = $request->email;
        $telephone = $request->telephone;
        $msg = $request->msg;
        Mail::to('contact@example.com')->send(new MailClass($name, $email, $telephone, $msg));
        session()->flash('success' , 'Спасибо вам письмо отправлено');
        return redirect()->back();

    }
}
