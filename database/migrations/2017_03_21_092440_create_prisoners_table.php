<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrisonersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prisoners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('national_id');
            $table->string('file_no');
            $table->string('home_county');
            $table->string('home_location');
            $table->string('next_kin');
            $table->string('kin_contacts');
            $table->string('prisoner_mobile');
            $table->date('adm_date');
            $table->string('crime');
            $table->string('gender');
            $table->date('dob');
            $table->string('profile_pix')->nullable();
            $table->string('medquiz');
            $table->string('medical_history')->nullable();
            $table->string('weight');
            $table->string('height');
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
        Schema::dropIfExists('prisoners');
    }
}
