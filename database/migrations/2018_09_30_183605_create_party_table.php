<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('part', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->string('username');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('fatherName');
            $table->string('nic');
            $table->string('dob');
            $table->string('city');
            $table->string('district');
            $table->string('provience');
            $table->string('country');
            $table->string('phoneRes');
            $table->string('phoneOff');
            $table->string('phoneCell');
            $table->string('education');
            $table->string('profession');
            $table->text('postalAddress');
            $table->boolean('holyQuran');
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
        Schema::dropIfExists('party');
    }
}