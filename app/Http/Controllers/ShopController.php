<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::recommended()->paginate(12);

        return view('shop')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param string $slug
     *
     * @return \Illuminate\Http\Response
     */

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $recommended = Product::where('slug', '!=', $slug)->recommended()->paginate(9);

        return view('product')
        ->with('product', $product,)
        ->with('recommended', $recommended);
    }


}
