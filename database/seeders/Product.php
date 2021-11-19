<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductModel;
use Illuminate\Support\Str;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        for($i=0;$i<100;$i++)
        {

            $model  = new ProductModel();
            $model->name = Str::random(10);
            $model->price = rand(10,200);
            $model->description = Str::random(40);
            $model->label = Str::random(10);
            $model->save();
        }
    }
}
