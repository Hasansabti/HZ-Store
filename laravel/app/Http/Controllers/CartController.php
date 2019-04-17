<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Cartitem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class CartController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    static $title = "Shopping Cart";

    public function index() {
        //

        $user = "";
        $cart = $this->getCart();
        $cartitems = $cart->cartitem;
        $total = 0;
        return view('pages.cart')->with('cart', $cart)->with('total', $total)->with('title', self::$title);
    }

    public function getCart() {
        if (Auth::check()) {
            $user = Auth::user()['id'];
            $cart = Cart::firstOrCreate(array('user' => $user));
        } else {
            if (session()->has('cart')) {
                $cid = session('cart');
                $cart = Cart::firstOrCreate(array('id' => $cid));
                session()->put('cart', $cart->id);
            } else {
                $cart = Cart::Create();
                session()->put('cart', $cart->id);
            }
        }

        return $cart;
    }

    public function addtocart() {
        $id = Input::get('id');
        $count = Input::get('count');
        $cart = $this->getCart();

        $cartitem = Cartitem::firstOrCreate(array('cartid' => $cart->id, 'product' => $id));
        $cartitem->count += $count;
        $cartitem->save();


        return '<div class="alert alert-success">
        <strong>Success!</strong>  ' . $cartitem->prod['name'] . ' has been added to cart.
        </div>';
    }

    public function count() {
        $cart = $this->getCart();
        $cartitems = $cart->cartitem;
        $count = 0;
        foreach ($cartitems as $cartitm) {
            $count += $cartitm->count;
        }
        return $count;
    }

    public function total() {
        $cart = $this->getCart();
        $cartitems = $cart->cartitem;
        $total = 0;
        foreach ($cartitems as $cartitm) {
            $total += $cartitm->count * $cartitm->prod->price;
        }
        return $total;
    }

    public function updateitem() {
        $id = Input::get('id');
        $count = Input::get('count');

        $cartitem = Cartitem::find($id);
        $cartitem->count = $count;
        $cartitem->save();

        return array('msg' => '<div class="alert alert-success">
<strong>Success!</strong>  ' . $cartitem->prod['name'] . ' quantity has been set to ' . $count . '.
</div>', 'cartitem' => $cartitem);
    }

    public function deleteitem() {
        $id = Input::get('id');
        $cartitem = Cartitem::find($id);
        $cartitem->forceDelete();

        return '<div class="alert alert-success">
        <strong>Success!</strong>  ' . $cartitem->prod['name'] . ' has been removed from your cart.
        </div>';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
