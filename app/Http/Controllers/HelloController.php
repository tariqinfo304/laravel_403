<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function hello($name)
    {
        echo "Hello tariq;how are you ? : " . $name;
    }
}
