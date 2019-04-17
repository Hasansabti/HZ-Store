<?php

namespace App\Http\Controllers;
use App\Order;
use App\Product;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Exceptions\HttpResponseException;

class accountController extends Controller
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
          
            return view('pages.account',compact('title','user'));
        }else{
             return redirect()->route('login')->with('status', 'Session expired! please login again');
            
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
        return view('pages.account.orders')->with('orders',$orders)->render();
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
