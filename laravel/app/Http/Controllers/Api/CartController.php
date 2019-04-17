<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cart;
use App\Cartitem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

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
  		$myitems = array();
		foreach($cartitems as $item){
			
			$item["prod"] = $item->prod;
		
			array_push($myitems,$item);
		}
        $total = 0;
				$cart["total"] = $this->total();
	
		return response()->json( $cart);
    }

    public function getCart() {
        if (Auth::check()) {
            $user = Auth::user()['id'];
            $cart = Cart::firstOrCreate(array('user' => $user));
			 return $cart;
        } else {
      return null;
        }

       
    }

    public function addtocart() {
        $id = Input::get('id');
        $count = Input::get('count');
        $cart = $this->getCart();

        $cartitem = Cartitem::firstOrCreate(array('cartid' => $cart->id, 'product' => $id));
        $cartitem->count += $count;
        $cartitem->save();


		
		return response()->json($cart);
    }

    public function count() {
        $cart = $this->getCart();
        $cartitems = $cart->cartitem;
        $count = 0;
        foreach ($cartitems as $cartitm) {
            $count += $cartitm->count;
        }
        return response()->json(['data' => $count]);
    }

    public function total() {
        $cart = $this->getCart();
        $cartitems = $cart->cartitem;
        $total = 0;
        foreach ($cartitems as $cartitm) {
            $total += $cartitm->count * $cartitm->prod->price;
        }
        return round($total,2);
    }

    public function updateitem() {
        $id = Input::get('id');
        $count = Input::get('count');

        $cartitem = Cartitem::find($id);
        $cartitem->count = $count;
        $cartitem->save();
		
$cartitem["prod"] = $cartitem->prod;
        return response()->json($cartitem);
    }

    public function deleteitem() {
		
        $ids = json_decode(Input::get('ids'));
		if($ids == null){
		$ids = array(1,2);
		}
		
$orderLog = new Logger("delitem");
$orderLog->pushHandler(new StreamHandler(storage_path('logs/delitm.log')), Logger::INFO);
$orderLog->info('OrderLog', ["data"=>$ids]);
		
		
		foreach($ids as $id ){
			   $cartitem = Cartitem::find($id);
			   if($cartitem != null)
        $cartitem->forceDelete();
		}
     
        $cart = $this->getCart();
		
        $cartitems = $cart->cartitem;
  		$myitems = array();
		foreach($cartitems as $item){
			
			$item["prod"] = $item->prod;
		
			array_push($myitems,$item);
		}
        $total = 0;
				$cart["total"] = $this->total();
         return response()->json( $cart);
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
