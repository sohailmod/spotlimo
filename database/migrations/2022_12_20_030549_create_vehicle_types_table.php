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
        Schema::create('vehicle_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->integer('capacity_of_passenger');
            $table->integer('max_allowed_seats');
            $table->integer('no_of_luggage');
            $table->integer('miles_under_10');
            $table->integer('first_15_miles');
            $table->integer('after_15_miles');
            $table->double('per_mile_charge');
            $table->double('rush_hour_charge');
            $table->double('hourly_charge');
            $table->integer('tax');
            $table->integer('minimum_hours')->default('2');
            $table->boolean('allowed_online_booking')->default(true);
            $table->boolean('allowed_booking')->default(true);
            $table->boolean('is_enable')->default(true);
            $table->mediumText('remark')->nullable();
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
        Schema::dropIfExists('vehicle_types');
    }
};
