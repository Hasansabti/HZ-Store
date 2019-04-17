<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pagesController extends Controller {

    //
    public function index() {
        $title = "Home Page";
        $username = "Login";
        $prods = \App\Product::all();
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user['name'];
        }
        return view('pages.index', compact('username'))->with('title', $title)->with('products', $prods);
    }

    public function impl() {
        return view('pages.docs.imp');
    }

    public function srs() {
        return view('pages.docs.srs');
    }

    public function sds() {
        return view('pages.docs.sds');
    }
        public function sch() {
        return view('pages.docs.schedue');
    }

    public function dig() {
        $folders = array_diff(scandir('images/diagrams'), array('..', '.'));
        $images = array();
        $i=0;
        foreach ($folders as $folder) {
 $i++;
            $images[$i.'- '.$folder.' Diagrams'] = glob('images/diagrams/'.$folder.'/*.{jpg,png,gif}',GLOB_BRACE);
       
            
        }
        return view('pages.docs.diagram')->with("images", $images);
    }

    public function test() {



        return view('pages.docs.test');
    }

}
