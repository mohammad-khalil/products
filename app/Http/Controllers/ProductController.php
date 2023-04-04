<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

  

    public function allproducts()
    {
       $products = Product::all();

       return view('product.products',compact('products'));
    }

    public function createProduct()

    {

       $categories = Category::where('parent_id','=', 0)->get();

       $allCategories = Category::pluck('category_name','id')->all();

       return view('product.product_form',compact('categories','allCategories'));

    }

     public function addProduct(Request $request)
 
     {
 

 
         $product = new Product();
         $product->product_name = $request->product_name; 
         $product->price = $request->price; 
         $product->strock_count = $request->stock_count; 
         $product->save();

         $category_ids = $request->category_ids;

         //return view('product.tree',compact('category_ids'));
          
         foreach($category_ids as $category_id){
           $product->categories()->attach($category_id);
            
           $category = \App\Models\Category::where('id', $category_id)->firstOrFail();
            while($category->parent_id != 0){
           $category = \App\Models\Category::where('id', $category->parent_id)->firstOrFail();

           $pc = DB::table('product_category')->where([['product_id',$product->id],['category_id',$category->id]])->get();
           if(count($pc)==0){
           $product->categories()->attach($category->id);
           }
           } 
         }

     }

}
