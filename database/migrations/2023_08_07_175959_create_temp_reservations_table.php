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
        Schema::create('temp_reservations', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('vehicle_type_id');
            $table->foreign('vehicle_type_id')->references('id')->on('vehicle_types')->onDelete('cascade');
            $table->unsignedBigInteger('service_type_id');
            $table->foreign('service_type_id')->references('id')->on('service_types')->onDelete('cascade');
            $table->string('date');
            $table->string('time');
            $table->mediumText('from');
            $table->mediumText('to');
            $table->longText('to_stop')->nullable();
            $table->string('hours')->nullable();
            $table->integer('passengers');
            $table->integer('bags')->nullable();
            $table->mediumText('vehicle_detail');
            $table->string('airline')->nullable();
            $table->string('flight_number')->nullable();
            $table->mediumText('instructions')->nullable();
            $table->boolean('meet_and_greet')->default(false);
            $table->double('miles');
            $table->string('status')->default('pending');
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
        Schema::dropIfExists('temp_reservations');
    }
};
