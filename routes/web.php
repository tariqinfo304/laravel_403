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


//Route::redirect('/go_to_other', 'std_val/23');


/////////////////////////
// Controllers
//////////////////////////

use App\Http\Controllers\HelloController;

Route::get("hello/{name}",[HelloController::class,"hello"]);

use App\Http\Controllers\TestController;

Route::get("call",TestController::class);

//View Topic

use App\Http\Controllers\ViewController;

Route::get("view",[ViewController::class,"index"]);
Route::get("template",[ViewController::class,"template"]);



use App\Http\Controllers\ORMController;
Route::get("orm",[ORMController::class,"index"]);
Route::get("orm_1",[ORMController::class,"index_1"]);

Route::get("relation",[ORMController::class,"relation"]);



//Template integrate in blade

use App\Http\Controllers\ShopController;
Route::get("shop",[ShopController::class,"index"]);//->middleware("Test:admin");

Route::get("shop/cart",[ShopController::class,"cart"]);//->middleware("test_group");



use App\Http\Controllers\ProductController;
Route::resource("shop/product",ProductController::class)->middleware("MyAuth");


use App\Http\Controllers\LoginController;

Route::get("login",[LoginController::class,"login"]);
Route::post("login",[LoginController::class,"check_login"]);
Route::get("logout",[LoginController::class,"logout"]);



Route::get("add_book",[ShopController::class,"add_book"]);
Route::post("add_book",[ShopController::class,"save_book"]);


