<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_hospitals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('age');
            $table->string('address');
            $table->string('relation');
            $table->bigInteger('phone');
            $table->string('requirment');
            $table->date('date');
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
        Schema::dropIfExists('book_hospitals');
    }
}
