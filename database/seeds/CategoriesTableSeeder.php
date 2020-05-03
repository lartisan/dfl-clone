<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$categories = collect([
			['name' => 'test', 'status' => 'inactive'],
			['name' => 'clothing'],
			['name' => 'shoes'],
			['name' => 'accesories'],
			['name' => 'underwear'],
			['name' => 'what\'s new'],
			['name' => 'kids'],
			['name' => 'brands a-z'],
		]);

        $categories->each(function($category) {
			factory(Category::class)->states('active')->create($category);
		});
    }
}
