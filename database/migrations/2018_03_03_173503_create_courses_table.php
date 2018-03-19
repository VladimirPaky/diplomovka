<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->integer('category_id')->unsigned()->index()->default(1);
            $table->string('type');
            $table->string('city')->nullable();
            $table->integer('region_id')->unsigned()->index();
            $table->string('teacher');
            $table->string('price');
            $table->boolean('certificate')->default(false);
            $table->text('additional_info');
            $table->text('slug');
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
        Schema::drop('courses');
    }
}
