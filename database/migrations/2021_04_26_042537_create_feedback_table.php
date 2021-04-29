<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->increments('feedback_id');
            $table->unsignedInteger('customer_id');
            $table->unsignedInteger('admin_id');
            $table->text('deskripsi');
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
        Schema::dropIfExists('feedback');
    }
}
