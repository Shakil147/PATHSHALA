<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('teacher_id')->unsigned();
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->string('p_country');
            $table->integer('p_division_id')->unsigned();
            $table->foreign('p_division_id')->references('id')->on('divisions');
            $table->integer('p_districts_id')->unsigned();
            $table->foreign('p_districts_id')->references('id')->on('districts');
            $table->integer('p_upzilla_id')->unsigned();
            $table->foreign('p_upzilla_id')->references('id')->on('upazilas');
            $table->integer('p_zip')->nullable();
            $table->string('p_address_1');
            $table->string('p_address_2')->nullable();
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
            $table->string('phone',14)->unique();
            $table->string('alt_phone')->nullable()->nullable();
            $table->string('email',150)->unique()->nullable();
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
        Schema::dropIfExists('teacher_contacts');
    }
}