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
}
