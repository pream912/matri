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
            $table->integer('active');

            /* bio */
            $table->string('name');
            $table->string('sex');
            $table->string('m_status');
            $table->string('caste');
            $table->string('dob');
            $table->string('edu');
            $table->string('job');
            $table->string('sal');
            $table->string('height');
            $table->string('loc1');
            $table->string('loc2');
            $table->string('loc_i');
            $table->string('kula_god');

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
            $table->string('rasi');
            $table->string('natcha');
            $table->string('laknam');

            /* exceptation */
            $table->string('e_edu');
            $table->string('e_job');

            /* attachments */
            $table->string('photo')->nullable();
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
