<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = ProductModel::all();

        return view("shop.product.index")->with("list",$list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("shop.product.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /*if($request->has("image"))
        {
            //getClientOriginalName
            $ext = $request->image->extension();

            $image_name = time(). "." . $ext;

            $request->image->store($image_name);
           // Storage::disk("local_public")->putFileAs($image_name,$request->image);
        }*/


        //it will show you image file detail
       // dd($request->image);
        //dd($request->all());
       // dd($request->input());
       // dd($request->name);
       // dd($request->input("name"));

        //IT iwll show null 
        //dd($request->tariq);

        $request->validate([
            "name" => "required",
            "price" => "required"
        ]);


        $obj  = new ProductModel();

        //Storage::disk('s3')


        $obj->name = $request->name;
        $obj->description = $request->description;
        $obj->price = $request->price;
        $obj->label = $request->label;
        $obj->save();

        return redirect("shop/product");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $data = ProductModel::find($id);
        return view("shop.product.create")->with("data",$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
