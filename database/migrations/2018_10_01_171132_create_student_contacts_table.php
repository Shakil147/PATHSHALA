<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_contacts', function (Blueprint $table) {
            $table->increments('id');       
            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('students'); 
            $table->string('phone',15)->unique();
            $table->string('email',150)->unique(); 
            $table->string('country');
            $table->integer('division_id')->unsigned();
            $table->foreign('division_id')->references('id')->on('divisions');
            $table->integer('districts_id')->unsigned();
            $table->foreign('districts_id')->references('id')->on('districts');
            $table->integer('upzilla_id')->unsigned();
            $table->foreign('upzilla_id')->references('id')->on('upazilas');
            $table->integer('zip')->nullable();
            $table->string('address_1');
            $table->string('address_2')->nullable();
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
        Schema::dropIfExists('student_contacts');
    }
}
