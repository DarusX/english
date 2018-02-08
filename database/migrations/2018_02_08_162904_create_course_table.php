<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->increments('id');
            $table->char('course',3);
            $table->integer('level_id')->unsigned()->nullable();
            $table->integer('course_type_id')->unsigned();
            $table->integer('course_option_id')->unsigned();
            $table->time('start_time')->nullable();
            $table->time('finish_time')->nullable();
            $table->date('start_date')->nullable();
            $table->date('finish_date')->nullable();
            $table->integer('classroom_id')->unsigned()->nullable();
            $table->integer('professor_id')->unsigned()->nullable();
            $table->integer('branch_id')->unsigned()->nullable();
            $table->double('price')->nullable();
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
        Schema::dropIfExists('course');
    }
}
