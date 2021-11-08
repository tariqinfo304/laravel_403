<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

class ProductController extends Controller
{
    
    function index()
    {
        return view("shop.product")->with("list",ProductModel::all());
    }
}
