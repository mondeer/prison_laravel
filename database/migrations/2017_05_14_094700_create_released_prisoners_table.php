<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReleasedPrisonersTable extends Migration
{

    public function up()
    {
        Schema::create('released_prisoners', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('prisoner_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('released_prisoners');
    }
}
