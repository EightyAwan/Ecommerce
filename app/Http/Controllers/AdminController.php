<?php

namespace App\Http\Controllers;
use App\Categorys;
use App\Product;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index()
    {
        return view('admin.index');
    }


   public function AddCategory()
    {
        return view('admin.category.index');
    }

     public function StoreCategory(Request $request)
    {
         $data_request = $request->all();
         $store = Categorys::create($data_request);
         return back()->with('flash_message','Successfully Category Added');
    }

     public function showcategory(Request $request)
    {
         $category = Categorys::get();
         return view('admin.category.show',compact('category'));
    }

     public function EditCategory($id)
    {	

         $category = Categorys::where('id',$id)->first();
         return view('admin.category.edit',compact('category'));
    }

     public function EditedCategory(Request $request)
    {	

		    $category = Categorys::findOrFail($request->id);
 
		    $input = $request->all();

		    $category->fill($input)->save(); 
          $category = Categorys::get();
          return view('admin.category.show',compact('category'))->with('flash_message','Successfully Category Added');
    }

     public function DeleteCategory(Request $request)
    {	

    		$user = Categorys::find($request->id);
			$user->delete(); 
        // $category = Categorys::where('id',$request->$id)->delete();
         return back()->with('flash_message','Successfully Category Deleted');

    }


     public function AddProduct()
    {	
    	$category = Categorys::where('status','enable')->get();
        return view('admin.product.index',compact('category'));
    }

     public function StoreProduct(Request $request)
    {	

    	$image = $request->file('image'); 

		if (!$image->move(public_path('images'), $image->getClientOriginalName())) {
		    return 'Error saving the file.';
		}
 
         $data_request = $request->all();
 		 $data_request['image'] = $image->getClientOriginalName();
         $store = Product::create($data_request);
         return back()->with('flash_message','Successfully Product Added');
    }

     public function showProduct(Request $request)
    {
         $product = Product::with('category')->get();
         return view('admin.product.show',compact('product'));
    }

     public function EditProduct($id)
    {	

         $product = Product::where('id',$id)->first();
         $category = Categorys::get();
         return view('admin.product.edit',compact('category','product'));
    }

     public function EditedProduct(Request $request)
    {	

		    $category = Product::findOrFail($request->id);
 
		    $input = $request->all();

		    $image = $request->file('image'); 

			if (!$image->move(public_path('images'), $image->getClientOriginalName())) {
		    return 'Error saving the file.';
			}
 
			$input['image'] = $image->getClientOriginalName();


		    $category->fill($input)->save(); 
         	$product = Product::get();
         	return view('admin.product.show',compact('product'))->with('flash_message','Successfully Category Added');
    }

     public function DeleteProduct(Request $request)
    {	

    		$user = Product::find($request->id);
			$user->delete(); 
            // $category = Categorys::where('id',$request->$id)->delete();
         return back()->with('flash_message','Successfully Category Deleted');

    }

}
