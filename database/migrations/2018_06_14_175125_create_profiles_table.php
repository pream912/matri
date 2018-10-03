<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');

            /* bio */
            $table->string('name');
            $table->string('sex');
            $table->string('dob');
            $table->string('edu');
            $table->string('job');
            $table->integer('sal');
            $table->string('height');
            $table->string('color');
            $table->string('loc1');
            $table->string('loc2');
            $table->string('loc_i');

            /* family */
            $table->string('fname');
            $table->string('falive');
            $table->string('fjob');
            $table->string('mname');
            $table->string('malive');
            $table->string('mjob');
            $table->integer('bro');
            $table->integer('sis');
            $table->string('status');

            /* contact */
            $table->string('con_person');
            $table->string('relation');
            $table->string('con1');
            $table->string('con2');
            $table->string('address');
            $table->string('email');

            /* horoscope */
            $table->integer('rasi');
            $table->integer('natcha');
            $table->integer('laknam');
            $table->string('direc');

            /* exceptation */
            $table->string('e_edu');
            $table->string('e_job');

            /* attachments */
            $table->string('photo');
            $table->string('horoscope');


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
        Schema::dropIfExists('profiles');
    }
}
