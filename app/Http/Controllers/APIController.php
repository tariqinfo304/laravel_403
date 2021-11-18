<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use Illuminate\Support\Facades\Validator;

class APIController extends Controller
{
    
    function product_list()
    {
        return response()->json([
            "status" =>200,
            "data" => ProductModel::all()
        ]
        );
    }

    function add_product(Request $req)
    {
        $err = [];

        if(!isset($req->name))
        {
            $err["name"] = "Required";
        }
        if(!isset($req->price))
        {
            $err["price"] = "Required";
        }
        if(!isset($req->description))
        {
            $err["description"] = "Required";
        }

        if(!empty($err))
        {
            return response()->json([
                "status" => 400,
                "data" => $err
            ]);
        }

        $obj = new ProductModel();
        $obj->name = $req->name;
        $obj->price = $req->price;
        $obj->description = $req->description;
        $obj->label = $req->label;

        $is_save = $obj->save();

        if($is_save)
        {
            return response()->json([
                "status" => 200,
                "data" => "Data saved successfully"
            ]);
        }   
        else
        {
            return response()->json([
                "status" => 400,
                "data" => "Data did not save"
            ]);
        }
    }
}   
