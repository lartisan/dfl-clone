<?php

use App\Product;
use App\ProductAttributes;
use Illuminate\Database\Seeder;

class ProductAttributesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    foreach (Product::all() as $product) {
      factory(ProductAttributes::class)->create(['product_id' => $product->id]);
    }
  }
}
