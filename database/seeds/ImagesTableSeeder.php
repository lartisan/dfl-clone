<?php

use App\Image;
use App\Product;
use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(Product::all() as $product) {
            factory(Image::class, 4)->create(['product_id' => $product->id]);
        }
    }
}
