<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestQuestionAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_question_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('test_question_id');
            $table->text('answer');
            $table->boolean('right_answer')->default(false);
            //$table->integer('position');


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
        Schema::drop('test_question_answers');
    }
}
