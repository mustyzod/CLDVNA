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
            $table->string('currency_id')->nullable()->default(147);
            $table->string('site_name')->nullable()->default('');
            $table->string('site_email')->nullable()->default('');
            $table->string('site_number')->nullable()->default('');
            $table->string('site_address')->nullable()->default('');
            $table->string('site_about')->nullable()->default('');
            $table->string('keywords')->nullable()->default('keywords,keyword');
            $table->string('social_facebook')->nullable()->default('https://facebook.com');
            $table->string('social_twitter')->nullable()->default('https://twitter.com');
            $table->string('social_instagram')->nullable()->default('https://instagram.com');
            $table->string('logo')->nullable()->default('');
            $table->boolean('live_production')->nullable()->default(1);
            $table->integer('tax')->nullable()->default(21);
            $table->string('cart_button')->nullable()->default('Add to Cart');
            $table->text('withdrawal_text')->nullable();
            $table->integer('theme_id')->nullable()->default(1);//active theme
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
