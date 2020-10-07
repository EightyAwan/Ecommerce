<?php

namespace App\Http\Controllers;

use App\Product;
use App\Categorys;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    } 
    

     public function home()
    {   
        $product = Product::with('category')->get();
        $category = Categorys::get();
        return view('frontend.index',compact('product','category'));
    }

    public function product_detail($id)
    {   
        $product = Product::with('category')->where('id',$id)->first();
        return view('frontend.product_details',compact('product'));
    }
 
}
