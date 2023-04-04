<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\Readline\Hoa\Console;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $categories = Category::all();

        return view('category.categories',compact('categories')); //categoryTreeview
    }


    public function createCategory()

    {

        $allCategories = Category::all();

        return view('category.category_form',compact('allCategories')); 

    }

     public function addCategory(Request $request)
 
     {

         $category = new Category();
         $category->category_name = $request->category_name; 
         $category->parent_id = $request->parent_id; 
         $category->save();

     }

   


    /**
     * Show the form for creating a new resource.
     */
    public function productsCount_chart()
    {
        $products_byCategory = DB::table('product_category')
        ->select(DB::raw('count(*) as count'))
        ->groupBy('category_id')
        ->pluck('count');

        return view('charts.chart1',compact('products_byCategory'));

       // $Categories = DB::table('categories')->select('id','category_name')->get();
       

    }

    public function productsTotalPrice_chart()
    {
        $products_totalPrice = DB::table('products')
        ->join('product_category','product_category.product_id','=','products.id')
        ->select(DB::raw('SUM(products.price) as products_total'))
        ->groupBy('product_category.category_id')
        ->pluck('products_total');

        return view('charts.chart2',compact('products_totalPrice'));
    }
    
}