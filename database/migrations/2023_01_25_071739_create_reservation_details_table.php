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
        Schema::create('reservation_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reservation_id');
            $table->foreign('reservation_id')->references('id')->on('reservations')->onDelete('cascade');
            $table->double('price');
            $table->double('gratuity')->nullable();
            $table->double('rush_hour_charge')->nullable();
            $table->double('per_mile_charge')->nullable();
            $table->double('hours_charge')->nullable();
            $table->double('car_seat')->nullable();
            $table->double('booster_seat')->nullable();
            $table->double('meet_greet')->nullable();
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
        Schema::dropIfExists('reservation_details');
    }
};
