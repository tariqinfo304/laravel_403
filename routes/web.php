<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//home / base
Route::get('/', function () { 

    echo "Home";
});


Route::get("test",function(){

    echo "Test route";
});

//Route Parameters
Route::get("std/{id}",function($id_value){

    echo "Student with ID  : $id_value";
});

Route::get("teach/{id}/name/{name}",function($id_value,$name){

    echo "Teach with ID  : $id_value : $name";
});

//default parameter

Route::get("std_val/{id?}",function($id=NULL){

    echo "Value of : $id";
}); 


//Parameter validation

Route::get("book/{id}/{name}",function($id,$name){
    echo "Book with ID : $id : $name";
})->where([
            "id"=>"[0-9]+",
            "name"=>"[a-zA-Z]+"
        ]);
//->where("id","[0-9]+")->where("name","[a-zA-Z]+");


//Assigment 
//Email validation
//Phone number 0303-4883307
//CNIC 35202-0340805-8
//IP 127.232.232.001

