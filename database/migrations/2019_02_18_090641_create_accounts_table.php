<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('country_id')->nullable();
            $table->string('state')->nullable()->default('');
            $table->string('city')->nullable()->default('');
            $table->string('postal_code')->nullable()->default('');
            $table->text('address')->nullable();
            $table->string('phone_number')->nullable()->default('');
            $table->string('validation_code')->default(0);
            $table->datetime('active_login_at')->nullable();
            $table->datetime('last_login_at')->nullable();
            $table->string('active_login_ip')->nullable();
            $table->string('last_login_ip')->nullable();
            $table->boolean('active')->default(0);
            $table->rememberToken();
            $table->string('token');
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
        Schema::dropIfExists('accounts');
    }
}
