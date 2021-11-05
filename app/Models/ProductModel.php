<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;

    protected $table = "product";
    protected $primaryKey = "id_value";
    public $incrementing  = false;
    public $timestamps = false;


    function images()
    {
        //Model Name , F.K , P.K
        return $this->hasMany(ProductImagesModel::class,"product_id","id_value");
    }

    function UserReviews()
    {
        return $this->belongsToMany(User::class,"product_review","product_id","user_id");
    }
}
