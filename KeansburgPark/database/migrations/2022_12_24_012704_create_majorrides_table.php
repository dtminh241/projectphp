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
        Schema::create('majorrides', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Major_Rides',100);
            $table->integer('Tickets_Needed');
            $table->string('Minimum_Height_Required',100);
            $table->string('Adults_Allowed_to_Ride',100);
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
        Schema::dropIfExists('majorrides');
    }
};
