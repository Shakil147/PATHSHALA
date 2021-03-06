<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('paper_name');
            $table->string('paper_code');
            $table->integer('subject_id')->unsigned();
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->integer('label_id')->unsigned();
            $table->foreign('label_id')->references('id')->on('labels');
            $table->integer('paper_teacher_id')->unsigned();
            $table->foreign('paper_teacher_id')->references('id')->on('teachers');
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
        Schema::dropIfExists('papers');
    }
}

