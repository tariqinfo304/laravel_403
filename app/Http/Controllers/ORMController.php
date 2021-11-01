<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookModel;
use App\Models\ProductModel;

class ORMController extends Controller
{
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
