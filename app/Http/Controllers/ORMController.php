<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookModel;

use App\Models\ProductModel;
use App\Models\User;
use App\Models\UserPhoneModel;
use App\Models\ProductImagesModel;


class ORMController extends Controller
{
    
    function relation()
    {
        //one - one
        //direct
        
        //$obj = User::find(1);
        //dd($obj->phone_no);
        
        //one to one 
        //indirect

        //$obj = UserPhoneModel::find(1);
        //dd($obj->user);


        //One - many
       // $obj = ProductModel::find(1);
       // dd($obj->images);

        //indirect
       // $obj = ProductImagesModel::find(1);
       // dd($obj->product);


        //Many to Many
        //$obj  = User::find(1);
        //dd($obj->productReviews);
        //indirect

        //$obj = ProductModel::find(1);

       // dd($obj->UserReviews);
        /*foreach ($obj->UserReviews as $row) {
            echo $row->pivot->product_id . "<br/>";
        }*/
    }

    function index()
    {

        $list = BookModel::all();

        //$list = BookModel::where("id",2)->get();

        //$list = BookModel::find(2);
        //dd($list);


       // $list = BookModel::where("name","PHP")->get();


        //$list = BookModel::where(["id" => 2 , "name" => "PHP"])->get();

        //$list = BookModel::where("id",3)->orWhere("name","PHP")->get();

       // $list = BookModel::where("name",'like','%H%')->get();

       // $list = BookModel::where("name",'like','%H%')->first();
       // dd($list);


        foreach($list as $row)
        {
            echo $row->id  . "  :: " . $row->name ." <br/>";
        }


        //save 
        /*
        $obj = new BookModel();
        $obj->name = "PHP";
        $is_save = $obj->save();
        if($is_save)
        {
            echo "Saved";
        }
        else
        {
            echo "No saved";
        }
        */

        //update

        /*

        $obj = new BookModel();
        //work on PK
        $obj  = $obj->find(1);

        $obj->name = "PHP Updated";
        $is_update = $obj->save();
        if($is_update)
        {
            echo "Updated";
        }
        else
        {
            echo "No Updated";
        }*/

        /*
        //delete

        $obj = new BookModel();
        //work on PK
        $obj  = $obj->find(1);
        $is_delete = $obj->delete();
        if($is_delete)
        {
            echo "delete";
        }
        else
        {
            echo "not deleted";
        }*/

    }

    function index_1()
    {
        $obj = new ProductModel();
       // dd($obj);
        $obj->name = "asd";
        $obj->description = "asd";
        $obj->price =23;
        $obj->id_value=2;

        $obj->save();
    }
}
