<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvailabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('availabilities', function (Blueprint $table) {
            $table->id();
            $table->string('ICU');
            $table->string('VENTILATION');
            $table->string('COVID_BED');
            $table->string('NORMAL_BED');
            $table->string('COVID_VACCINATION');
            $table->string('CITY_SCAN');
            $table->string('BLOOD_BANK');
            $table->string('OXYGEN_AVALABILITY');
            $table->string('email');
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
        Schema::dropIfExists('availabilities');
    }
}
