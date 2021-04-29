<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdetail', function (Blueprint $table) {           
            $table->increments('orderdetail_id');
            $table->unsignedInteger('orders_id');
            $table->unsignedInteger('produk_id');
            $table->integer('jumlah');
            $table->integer('total_detail');
            $table->timestamps();

            $table->foreign('produk_id')->references('produk_id')->on('produk');
            $table->foreign('orders_id')->references('orders_id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderdetail');
    }
}
