<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    function index()
    {
        return view("shop.home");
    }


    function cart()
    {
        return view("shop.cart");
    }
}
