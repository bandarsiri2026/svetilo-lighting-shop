<?php

namespace App\Http\Controllers;


use Gloudemans\Shoppingcart\Facades\Cart;
use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $cartItems= Cart::content();



        return view('cart.cart', compact('cartItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id , Request $request)
    {
        $item= Item::find($id);
        $qty=$request->qty;

       $cartItem = Cart::add(['id'=>$id,'name'=>$item->name,'qty'=>$qty,'price'=>$item->price,'priceOpt'=>$item->priceOpt,'options' =>['img'=>$item->image]]);
        Cart::associate($cartItem->rowId, 'App\Item');



        if (Input::has('cartRefrech')){
           return back();
       }else{
           return redirect ('cart');

       }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'qty' => 'required|numeric|min:1'

        ]);

        Cart::update($id,$request->qty);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Cart::remove($id);
        return back();


    }
    public static  function removeAll(){
        if (session()->has('success')){
            Cart::destroy();
        }
    }

}
