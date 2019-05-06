<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeoSnapShotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geo_snap_shots', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('eventName');
            $table->text('facebookLink');
            $table->string('country');
            $table->string('typeOfEvent');
            $table->string('password');
            $table->integer('participant');
            $table->integer('numberOfPhoto');
            $table->text('note');
            $table->string('name');
            $table->string('email');
            $table->integer('number');
            $table->string('facebookURL');
            $table->integer('websiteURL');

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
        Schema::dropIfExists('geo_snap_shots');
    }
}
