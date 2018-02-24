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
            $table->string('name');
            $table->string('lastname');
            $table->date('birthdate');
            $table->char('gender');
            $table->char('curp')->nullable();
            $table->char('mobile')->unique();
            $table->char('phone');
            $table->char('emergency_phone');
            $table->string('allergy')->nullable();
            $table->string('address',50);
            $table->string('email');
            $table->string('comment',50)->nullable();
            $table->char('blood_type',2)->nullable();
            $table->date('registration_date')->nullable();
            $table->integer('branch_id')->unsigned()->nullable();
            $table->integer('status_id')->unsigned()->nullable()->default(1);
            $table->string('matricula')->nullable()->unique();
            $table->string('photo')->default('student/default.jpg');
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
