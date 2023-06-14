<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    

    public function index()

    {


        $products = Product::inRandomOrder()->take(15)->get();

        
        return view('products.index')->with('products',$products);
    }


    public  function show($slug)
    {

        $product = Product::where('slug',$slug)->firstOrFail();


        return view('products.show')->with('product', $product);
    }


}
