<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdetail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('ticket_id');
            $table->integer('quantity');
            $table->dateTime('time_order_tiket');
            $table->integer('total_price');
            $table->timestamps();
            $table->foreign('order_id')->references('id')->on('order');
            $table->foreign('ticket_id')->references('id')->on('ticket');
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
};
