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
       $list = ProductModel::paginate(15);
    //$list = ProductModel::simplePaginate(15);
         //dd($list);

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


        //it will show you image file detail
        //dd($request->image);
        
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

        if($request->hasFile('image')){

            //$filenameWithExt = $request->image->getClientOriginalName();
            //Get just filename
            //$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->image->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = time().'.'.$extension;
            // Upload Image
            $path = $request->image->storeAs("uploads",$fileNameToStore);
            $obj->image = $path;
        }


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
        $data = ProductModel::find($id);
        return view("shop.product.create")
                ->with("data",$data)
                ->with("is_delete",1);
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
        $request->validate([
            "name" => "required",
            "price" => "required"
        ]);

        $obj = ProductModel::find($id);

        $obj->name = $request->name;
        $obj->description = $request->description;
        $obj->price = $request->price;
        $obj->label = $request->label;
        $obj->save();
        return redirect("shop/product");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = ProductModel::find($id);
        $obj->delete();
        return redirect("shop/product");
    }
}
