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
            $table->string('address');
            $table->string('user_email');
            $table->bigInteger('phone');
            $table->string('requirement');
            $table->date('date');
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
        Schema::dropIfExists('book_hospitals');
    }
}
