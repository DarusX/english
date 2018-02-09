<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Classroom;

class CreateClassroomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classroom', function (Blueprint $table) {
            $table->increments('id');
            $table->char('number',2)->nullable();
            $table->timestamps();
        });
        Classroom::create(['number' => '1']);
        Classroom::create(['number' => '2']);
        Classroom::create(['number' => '3']);
        Classroom::create(['number' => '4']);
        Classroom::create(['number' => '5']);
        Classroom::create(['number' => '6']);
        Classroom::create(['number' => '7']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classroom');
    }
}
