<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoashasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goashas', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->string('name');
            $table->string('fatherName');
            $table->text('postalAddress');
            $table->string('union_council');
            $table->string('Tehsil');
            $table->string('city');
            $table->string('district');
            $table->string('provience');
            $table->string('country');
            $table->string('education');
            $table->string('profession');
            $table->string('dob');
            $table->string('nic');
            $table->string('email');
            $table->string('phoneRes');
            $table->string('phoneOff');
            $table->string('phoneCell');
            $table->boolean('holyQuran');
            $table->string('ashra');
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
        Schema::dropIfExists('apply_for_goashas');
    }
}
