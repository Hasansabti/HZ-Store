<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;


class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		
		  $user = Auth::user();
		  
		  $addresses = Address::whereRaw("user = ".$user['id'])->get();
		   return response()->json($addresses, 200, [], JSON_NUMERIC_CHECK);
		  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(\Illuminate\Http\Request $request)
    {
        //
		
		       $validation = \Illuminate\Support\Facades\Validator::make($request->only('fname', 'lname','address1','postcode','phone'),['fname' => 'required','lname'=>'required','address1'=>'required','postcode'=>'required','phone'=>'required']);
         $err = '<div class="alert alert-danger"><strong>Missing info!</strong></div>';
      
  
  
        $pass = '<div class="alert alert-success"><strong>Thank you!</strong></div>';
          if($validation->passes())

    {
                  $fname = Input::get('fname');
       $lname = Input::get('lname');
       $address1 = Input::get('address1');
	    $address2 = Input::get('address2');
		 $acode = Input::get('postcode');
		  $phone = Input::get('phone');
              
       
            if(Auth::check()){
           $user = Auth::user();
     $address = Address::create(array('fname' => $fname,'lname' => $lname,'user' => $user->id,'address1'=>$address1,'address2'=>$address2,'code'=>$acode,'phone'=>$phone));
       }else{
              // $review = Review::create(array('product' => $prod,'rate' => $rate,'review'=>$rev));
           
       }
       
     
       if($address != null){
       if($address->save()){
     return response()->json($address, 200, [], JSON_NUMERIC_CHECK);
           
       }
	   }else{
		          $err = '<div class="alert alert-danger"><strong>Unauthorized!</strong></div>';
      
         return response()->json([
        
        'data' => $err
    ], 422);
              
          }
          
             $errors = $validation->errors();
    $errors =  json_decode($errors); 
    
          return response()->json([
        'success' => false,
        'data' => $errors
    ], 422);
          

           
		
		
		
    }
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
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        //
    }
}
