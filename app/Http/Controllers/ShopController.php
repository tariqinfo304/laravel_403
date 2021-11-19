<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BookModel;

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


    function add_book()
    {
        return view("shop.book");
    }

    function save_book(Request $req)
    {
        $req->validate([
            "name" => "required",
            "price" => "required"
        ]);

        $b = new BookModel();
        $b->name = $req->name;
        $b->price = $req->price;

        if($req->hasFile('image')){

            $extension = $req->image->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = time().'.'.$extension;
            // Upload Image
            $path = $req->image->storeAs("uploads",$fileNameToStore);
            $b->image = $path;
        }   

        $b->save();

        echo "Save data";

    }
}
