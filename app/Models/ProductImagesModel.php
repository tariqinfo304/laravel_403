<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImagesModel extends Model
{
    use HasFactory;

    protected $table="product_images";


    function product()
    {
        //Model Name , F.K , P.K
        return $this->belongsTo(ProductModel::class,"product_id","id_value");
    }
}
