<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class createTripTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->dateTime('start_date_time')->nullable();
            $table->dateTime('finish_date_time')->nullable();
            $table->string('km')->nullable();
            $table->string('coordenadas_start')->nullable();
            $table->string('coordenadas_finish')->nullable();
            $table->foreignId('car_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('car_id')->references('id')->on('cars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
