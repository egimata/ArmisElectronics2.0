<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

class MainPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::recommended()->paginate(6);

        return view('main')->with('products', $products);
    }

}
