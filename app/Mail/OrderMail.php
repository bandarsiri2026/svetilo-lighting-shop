<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $a;
    protected $name;
    protected $email;
    protected $telephone;
    protected $city;
    protected $msg;
    protected $price;
    protected $total;





    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($a,$name,$email,$telephone,$city,$msg,$price,$total)
    {
        $this->a=$a;
        $this->name=$name;
        $this->email=$email;
        $this->telephone=$telephone;
        $this->city=$city;
        $this->msg=$msg;
        $this->price=$price;
        $this->total = $total;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('cart.cartMail')->with([
            'a' => $this->a,
            'name' => $this->name,
            'email' => $this->email,
            'telephone'=> $this->telephone,
            'city' => $this->city,
            'msg' =>$this->msg,
            'price' =>$this->price,
            'total' =>$this->total,
        ])->subject('новый заказ');
    }
}
