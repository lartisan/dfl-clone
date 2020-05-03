<?php

use App\Category;
use App\CategoryList;
use Illuminate\Database\Seeder;

class CategoryListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$clothing = Category::whereSlug('clothing')->first();
		$shoes = Category::whereSlug('shoes')->first();
		$underwear = Category::whereSlug('underwear')->first();
		
		factory(CategoryList::class)->states('active')->create(['category_id' => $clothing->id, 'name' => 'test', 'status' => 'inactive']);
		factory(CategoryList::class)->states('active')->create(['category_id' => $clothing->id, 'name' => 'suits']);
		factory(CategoryList::class)->states('active')->create(['category_id' => $clothing->id, 'name' => 'shirts']);
		factory(CategoryList::class)->states('active')->create(['category_id' => $clothing->id, 'name' => 'trousers']);
		
		factory(CategoryList::class)->states('active')->create(['category_id' => $shoes->id, 'name' => 'business shoes']);
		factory(CategoryList::class)->states('active')->create(['category_id' => $shoes->id, 'name' => 'loafers']);
		
		factory(CategoryList::class)->states('active')->create(['category_id' => $underwear->id, 'name' => 'bathrobe']);
		factory(CategoryList::class)->states('active')->create(['category_id' => $underwear->id, 'name' => 'boxers']);
    }
}
