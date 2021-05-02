<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkout', function (Blueprint $table) {
            $table->increments('checkout_id');
            $table->unsignedInteger('produk_id');            
            $table->unsignedInteger('user_id');
            $table->integer('jumlah');
            $table->integer('total_detail');
            $table->timestamps();

            $table->foreign('produk_id')->references('produk_id')->on('produk');
            $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkout');
    }
}
