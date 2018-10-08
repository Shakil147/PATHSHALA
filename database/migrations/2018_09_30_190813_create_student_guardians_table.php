<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentGuardiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_guardians', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('students');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('occupation');
            $table->string('guardians_nid')->nullable();
            $table->string('gurdians_phone');
            $table->string('gurdians_phone_alt');
            $table->string('gurdians_email');
            $table->string('gurdians_religion');
            $table->string('father_photo');
            $table->string('mother_photo');
            $table->string('nationality');
            $table->softDeletes();
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
        Schema::dropIfExists('student_guardians');
    }
}
