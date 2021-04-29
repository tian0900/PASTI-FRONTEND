<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('orders_id');
            $table->unsignedInteger('customer_id');            
            $table->unsignedInteger('admin_id');
            $table->integer('total');
            $table->text('lokasi');
            $table->text('bukti_bayar',200);
            $table->timestamps();

            $table->foreign('customer_id')->references('customer_id')->on('customer');
            $table->foreign('admin_id')->references('admin_id')->on('admin');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
