<?php

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
            $table->text('name')->nullable();
            $table->text('description')->nullable();
            $table->text('slug')->nullable();
            $table->text('image')->nullable();
            $table->text('image_ex1')->nullable();
            $table->text('image_ex2')->nullable();
            $table->text('image_ex3')->nullable();
            $table->text('image_ex4')->nullable();
            $table->text('image_ex5')->nullable();
            $table->bigInteger('views_count')->default(0);
            $table->bigInteger('cart_count')->default(0);
            $table->decimal('price', 9,2)->nullable()->default(0);
            $table->integer('stock')->default(0);
            $table->timestamps();
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
