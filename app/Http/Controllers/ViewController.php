<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\View;

class ViewController extends Controller
{
    function index()
    {
        $name = "EVS";

        //return view("hello")->with(["name"=>$name,"type" => "Student"]);

       

       // return View::make("hello",["name"=>$name,"type" => "Student"]);


        $list = [
            "ali",
            "ramzan",
            "haider",
            "arsaln",
            "shery mazrai",
            "imran khan",
            "Sheikh rasheed",
            "Fardous Awan Bhai"
        ];
        return view("hello",[
                "name"=>$name,
                "type" => "1",  
                    "status" => true
                ]
                )->with("list",$list);

        //nested view calling
        //return view("admin.list",["name"=>$name,"type" => "Student"]);

        /*if(View::exists("hello1"))
        {
            echo "ok";
        }
        else
        {
            echo "No";
        }*/

    }

    function template()
    {
        return view("child");

    }
}
