<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('test_id');
            $table->text('question');
            $table->string('type')->default('multianswer');
            $table->boolean('show_correct_answers_count')->default(true);
            $table->integer('position')->default(0);
            $table->boolean('position_random')->default(false);


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
        Schema::drop('test_questions');
    }
}
