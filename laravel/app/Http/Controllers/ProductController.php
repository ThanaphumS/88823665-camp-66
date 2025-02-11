<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\ProductList;

class ProductController extends Controller
{
    function index(){
        return view('product');
    }

    function store(Request $req){
        return redirect('/product');
    }
}
