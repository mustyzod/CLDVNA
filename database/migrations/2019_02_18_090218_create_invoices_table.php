<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');//buyer
            $table->integer('user_read')->nullable()->default(0);
            $table->integer('admin_read')->nullable()->default(0);
            $table->string('invoice_number')->unique();//invoice number
            $table->string('payment_method',50)->default('Nil');//Gateways
            $table->integer('status')->default(0);
            $table->integer('tax')->default(0);//%Percentage%
            $table->integer('coupon')->default(0);//%Percentage%
            $table->string('currency_symbol',50)->default('$');
            $table->string('country')->nullable()->default(1);
            $table->text('address')->nullable();
            $table->string('state')->nullable()->default('state');
            $table->string('city')->nullable()->default('city');
            $table->string('phone')->nullable()->default('phone');
            $table->string('postal_code')->nullable()->default(1);
            $table->string('product_name')->nullable()->default(1);
            $table->integer('product_qty')->nullable()->default(1);
            $table->decimal('total_amount_without_tax', 9,2)->nullable();
            $table->decimal('total_amount_with_tax', 9,2)->nullable();
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
        Schema::dropIfExists('invoices');
    }
}
