<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Item;
use App\Mail\MailClass;
use App\Mail\OrderMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use TCG\Voyager\Models\Category;

class OrderSetting extends Controller
{
    public function send_form(ContactRequest $request)
    {
        $a =round(date("ymd"));
        $name = $request->name;
        $email = $request->email;
        $telephone = $request->telephone;
        $city = $request->city;
        $msg = $request->msg;
        $price = $request->price;
        $total = $request->total;



        Mail::to('contact@example.com')->send(new OrderMail($a,$name, $email, $telephone,$city, $msg ,$price,$total));
        session()->flash('success');
        return redirect()->back();


    }

    public function show($id, $cat_id) {


        $categories = Category::where('id', '=', $cat_id)->get();

        $items = Item::where('cat_id','=', $id)->get();


        return view('items.items', compact('categories', 'items'));
    }
}
