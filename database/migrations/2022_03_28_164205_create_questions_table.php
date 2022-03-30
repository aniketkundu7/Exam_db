<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->foreignId('subject_id')->references('id')->on('subjects')->ondelete('cascade');
            $table->foreignId('chapter_id')->references('id')->on('chapters')->ondelete('cascade');
            $table->foreignId('question_type_id')->references('id')->on('question_types')->ondelete('cascade');
            $table->foreignId('question_level_id')->references('id')->on('question_levels')->ondelete('cascade');
            $table->string('image');
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
        Schema::dropIfExists('questions');
    }
};
