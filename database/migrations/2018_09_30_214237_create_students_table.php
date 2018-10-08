<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('user_name')->nullable();
            $table->string('nid',13)->unique()->nullable();
            $table->string('gender');
            $table->string('dob');
            $table->string('phone',15)->unique();
            $table->string('email',150)->unique();
            $table->string('religion');
            $table->string('passeord');
            $table->string('avator');
            $table->integer('registration');
            $table->integer('label_id')->unsigned();
            $table->foreign('label_id')->references('id')->on('labels'); 
            $table->integer('section_id')->unsigned();
            $table->foreign('section_id')->references('id')->on('sections');
            $table->integer('roll');
            $table->string('group');
            $table->string('last_school');
            $table->string('Last_standerd');
            $table->string('last_marks');
            $table->string('sports');
            $table->string('status')->defalt('0');
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
        Schema::dropIfExists('students');
    }
}
