<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastname');
            $table->date('birthdate');
            $table->char('gender');
            $table->string('career')->nullable();
            $table->string('cedula')->nullable();
            $table->char('curp')->nullable();
            $table->char('rfc')->nullable();
            $table->char('mobile')->unique();
            $table->char('phone')->unique();
            $table->char('blood_type',2)->nullable();
            $table->string('address',50);
            $table->string('email');
            $table->string('matricula')->unique();
            $table->date('hired')->nullable();
            $table->date('fired')->nullable();
            $table->string('photo')->default('worker/default.jpg');
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
        Schema::dropIfExists('professors');
    }
}
