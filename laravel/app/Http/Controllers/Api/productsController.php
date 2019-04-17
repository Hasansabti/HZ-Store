<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Review;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class productsController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        static $title = "Store";
    
    public function index()
    {
  
            return response()->json([
    'name' => 'Abigail',
    'state' => 'CA'
]);
      
    }

    public function shop()
    {
     
     
               $products = Product::all();
			   $newprods =array();
			   foreach($products as $product){
				   $myprod = $product;
				   
				         $id = 1;
        $id = $myprod["id"];
        $allrevs = DB::table('reviews')
                     ->select(DB::raw('count(*) as rev_count, rate'))->where('product',$id)
                     ->groupBy('rate')
                     ->get();
        $revcnt = DB::table('reviews')->where('product',$id)->count();
        for($i=1;$i<6;$i++){
            $rr[$i]['count']=0;
            $rr[$i]['perc'] = 0;
        }
        $avg = 0;
        foreach($allrevs as $rev){
            $rr[$rev->rate]['count'] = $rev->rev_count; 
            $rr[$rev->rate]['perc'] =($rev->rev_count/$revcnt)*100; 
            
            $avg += $rev->rate*$rev->rev_count;
        }
        if($revcnt >0){
        $avg = $avg/$revcnt;
        }
      
        
       
        $revs =  Review::whereRaw("product = $id");

//$myprod["rev"] = $rev;
$myprod["revavg"] = $avg;
$myprod["reviews"] = $myprod->reviews;

array_push($newprods, $myprod);
				   
			   }
            return response()->json($newprods, 200, [], JSON_NUMERIC_CHECK);
     
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
    public function search()
    {
        $query=Input::get('q');
        if(isset($cat)){
            $products =  Product::whereRaw(" category = $cat")->simplePaginate(15);
        }else{
 
      $products =  Product::whereRaw("name like '%" .$query. "%'")->simplePaginate(15);
        
        }
        //
       
		  return response()->json($products, 200, [], JSON_NUMERIC_CHECK);
    }

    public function listcat($cat)
    {

        $products =  Product::whereRaw(" category = $cat")->simplePaginate(15);
       return response()->json($products);

    }
    
      public function reviews($id)
    {

        $revs =  Review::whereRaw(" product = $id")->get();
       return response()->json(['data' => $revs], 200, [], JSON_NUMERIC_CHECK);

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
    public function show()
    {
        //
        $id = 1;
        $id = Input::get('id');
        $allrevs = DB::table('reviews')
                     ->select(DB::raw('count(*) as rev_count, rate'))->where('product',$id)
                     ->groupBy('rate')
                     ->get();
        $revcnt = DB::table('reviews')->where('product',$id)->count();
        for($i=1;$i<6;$i++){
            $rr[$i]['count']=0;
            $rr[$i]['perc'] = 0;
        }
        $avg = 0;
        foreach($allrevs as $rev){
            $rr[$rev->rate]['count'] = $rev->rev_count; 
            $rr[$rev->rate]['perc'] =($rev->rev_count/$revcnt)*100; 
            
            $avg += $rev->rate*$rev->rev_count;
        }
        if($revcnt >0){
        $avg = $avg/$revcnt;
        }
      $product = Product::find($id);
        
       
        $revs =  $product->reviews;
		$myrev = array();
		   foreach($revs as $rev){
			   $rev["reviewer"] = User::find($rev["user"]);
			   array_push($myrev,$rev);
			   
		   }

//$product["rev"] = $rev;
$product["revavg"] = $avg;
$product["reviews"] = $myrev;

   $title = $product->name;
   
      
                 
        
			return response()->json($product, 200, [], JSON_NUMERIC_CHECK);
     
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
