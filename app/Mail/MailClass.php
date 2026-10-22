<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailClass extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $email;
    protected $telephone;
    protected $msg;




    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$email,$telephone,$msg)
    {
        $this->name=$name;
        $this->email=$email;
        $this->telephone=$telephone;
        $this->msg=$msg;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('contacts.contact-mail')->with([
            'name' => $this->name,
            'email' => $this->email,
            'telephone'=> $this->telephone,
            'msg' =>$this->msg,
        ])->subject('Новое Письмо');
    }
}
