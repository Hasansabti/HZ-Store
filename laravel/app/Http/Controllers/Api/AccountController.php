<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Order;
use App\Orderitem;
use App\Product;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;


class AccountController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    static $title = "Account";
    public function index()
    {
     
        $user = "";
        if(Auth::check()){
            $user = Auth::user();
  
             return response()->json($user, 200, [], JSON_NUMERIC_CHECK);
     
			
        }

    }

    public function settings()
    {
        //
     
        return view('pages.account.settings',compact('title'));
    }

    public function orders(){
        $user = Auth::user();
        $uid = $user['id'];
        $orders  =  Order::whereRaw("user = $uid")->orderBy('created_at','desc')->get();
        //
     $myorders = array();
	 foreach($orders as $order){
		 
		 $order["items"] = Orderitem::whereRaw("`order` = ".$order["id"])->get();
		      $myorderitems = array();
	 foreach($order["items"] as $orderitem){
		 
		 $orderitem["product"] = Product::find($orderitem["product"]);
		 
		 
		  array_push($myorderitems,$orderitem);
	
	 }
	 
	 $order["items"] = $myorderitems;
		 array_push($myorders,$order);
	 }
		
		   return response()->json($myorders, 200, [], JSON_NUMERIC_CHECK);
     
    }

    public function order()
    {
        $id = Input::get('id');
        $prod = Order::find($id);
        return view('pages.account.track')->with('order',$prod);

    }
     public function review()
    {
       $id = Input::get('id');
       $prod = Product::find($id);
        
        return view('pages.account.feed')->with('product',$prod);

    }
     public function addReview(\Illuminate\Http\Request $request)
    {
   
       
       $validation = \Illuminate\Support\Facades\Validator::make($request->only('product', 'rating'),['product' => 'required','rating'=>'required']);
         $err = '<div class="alert alert-danger"><strong>Rating required!</strong></div>';
      
  
  
        $pass = '<div class="alert alert-success"><strong>Thank you!</strong></div>';
          if($validation->passes())

    {
                  $prod = Input::get('product');
       $rate = Input::get('rating');
       $rev = Input::get('review');
              
       
            if(Auth::check()){
           $user = Auth::user();
     $review = Review::create(array('product' => $prod,'rate' => $rate,'user' => $user->id,'review'=>$rev));
       }else{
               $review = Review::create(array('product' => $prod,'rate' => $rate,'review'=>$rev));
           
       }
       
     
       
       if($review->save()){
                 return response()->json([
                'success' => true,
                'message' => $pass
            ], 200);
           
       }
              
              
          }
          
             $errors = $validation->errors();
    $errors =  json_decode($errors); 
    
          return response()->json([
        'success' => false,
        'message' => $errors
    ], 422);
          

           
   

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
    public function show(Request $request, $id)
    {
        $key = $request->session()->get('userkey');

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
