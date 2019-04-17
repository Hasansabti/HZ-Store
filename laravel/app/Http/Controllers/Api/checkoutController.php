<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\CartController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Cart;
use App\Order;
use App\Orderitem;

class checkoutController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Checkout";
    $cart = $this->getCart();

        return view('pages.checkout',compact('title'))-> with('cart',$cart);
    }

    public function getCart(){
        if(Auth::check()){
            $user = Auth::user()['id'];
            $cart = Cart::firstOrCreate( array( 'user' => $user));
        }else{
        if(session()->has('cart')){
        $cid = session('cart');
        $cart = Cart::firstOrCreate( array('id' => $cid));
        session()->put('cart',$cart->id);
        }else{
            $cart = Cart::Create(array());
            session()->put('cart',$cart->id);
        }
    }
        
        return $cart;
    }

    public function placeOrder(){
$address = Input::get('addressid');
        $cart = $this->getCart();
        $user = 0;
        $order = null;
        $anony = false;
        if(Auth::check()){
            $user = Auth::user()['id'];
            $order = Order::create(array('user' => $user,'address'=>$address));
        }else{
            $order = Order::create();
            $anony=true;
        }
       
foreach($cart->cartitem as $item){
   $orderitem = Orderitem::create(array('product' => $item->prod->id, 'qty' => $item->count, 'order' => $order->id));
    $orderitem->save();
}

$cart->delete();

return response()->json('Your order has been placed', 200, [], JSON_NUMERIC_CHECK);
//return view('pages.blank')->with('msg', 'Your order was placed '. ($anony ? 'anonymously' : '.'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
