<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject_name');
            $table->string('subject_code');
            $table->string('group')->defalt('ALL');
            $table->string('type')->defalt('COMMON ');
            $table->integer('label_id')->unsigned();
            $table->foreign('label_id')->references('id')->on('labels'); 
            $table->integer('subject_teacher_id')->unsigned();
            $table->foreign('subject_teacher_id')->references('id')->on('teachers'); 
            $table->text('description')->nullable();
            $table->tinyInteger('publication_status');
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
        Schema::dropIfExists('subjects');
    }
}
