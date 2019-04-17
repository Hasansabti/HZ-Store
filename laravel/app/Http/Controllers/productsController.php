<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Review;
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
                   $qu=Input::get('type');
        if($qu == "json"){
            return response()->json([
    'name' => 'Abigail',
    'state' => 'CA'
]);
        }else{
        
        return view('pages.store')->with('title',self::$title);
        }
    }

    public function shop()
    {
     
               $qu=Input::get('type');
        if($qu == "json"){
               $products = Product::all();
            return response()->json($products);
        }else{
$products = Product::paginate(15);
return view('pages.store')->with('products',$products)->with('title',self::$title);
        }
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
        return view('pages.store')->with('products',$products);
    }

    public function listcat($cat)
    {

        $products =  Product::whereRaw(" category = $cat")->simplePaginate(15);
        return view('pages.store')->with('products',$products);

    }
    
      public function reviews($id)
    {

        $revs =  Review::whereRaw(" product = $id")->get();
        return $revs;

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
      
        
       
        $revs =  Review::whereRaw("product = $id")->orderBy('created_at','desc')->Paginate(3);
$product = Product::find($id);
   $title = $product->name;
   
               $qu=Input::get('type');
        if($qu == "json"){
            
                 
            return response()->json($product);
        }else{
        return view('pages.product',compact('title'))->with('product', $product)->with('reviews',$revs)->with('allrev',$rr)->with('all',$revcnt)->with('revavg',$avg);
        }
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
