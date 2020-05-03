<?php

use App\Product;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');
            $table->unsignedInteger('brand_id');
            $table->unsignedInteger('category_list_id');
            $table->string('status')->default(Product::INACTIVE_STATUS);
            $table->string('slug')->unique();
            $table->string('title');
            $table->integer('price');
            $table->integer('discount')->nullable();
            $table->text('description')->nullable();
            $table->integer('inventory');
			$table->timestamps();
			$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
