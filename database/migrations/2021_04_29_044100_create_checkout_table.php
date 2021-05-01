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
            $table->unsignedInteger('orders_id');            
            $table->unsignedInteger('orderdetail_id');
            $table->unsignedInteger('customer_id');
            $table->integer('jumlah');
            $table->integer('total_detail');
            $table->timestamps();

            $table->foreign('orders_id')->references('orders_id')->on('orders');
            $table->foreign('orderdetail_id')->references('orderdetail_id')->on('orderdetail');
            $table->foreign('customer_id')->references('customer_id')->on('customer');
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
