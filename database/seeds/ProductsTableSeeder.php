<?php

use App\Image;
use App\Product;
use App\ProductAttributes;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
        {
        factory(Product::class)->create(['title' => 'test']);
            // ->each(function($product) {
            //     $product->images()->saveMany(
            //     factory(Image::class, 5)->make()
            //     );
            //     $product->attributes()->saveMany([
            //         factory(ProductAttributes::class)->states('color')->make(),
            //         factory(ProductAttributes::class)->states('size')->make(),
            //     ]);
    		// });
        factory(Product::class, 49)->create();
            //     ->each(function($product) {
            //     $product->images()->saveMany(
            //     factory(Image::class, 5)->make()
            //     );
            //     $product->attributes()->saveMany([
            //         factory(ProductAttributes::class)->states('color')->make(),
            //         factory(ProductAttributes::class)->states('size')->make(),
            //     ]);
    		// });
        factory(Product::class, 50)->states('available')->create();
            // ->each(function($product) {
            //     $product->images()->saveMany(
            //         factory(Image::class, 5)->make()
            //     );
            //     $product->attributes()->saveMany([
            //         factory(ProductAttributes::class)->states('color')->make(),
            //         factory(ProductAttributes::class)->states('size')->make(),
            //     ]);
    		// });
    }
}
