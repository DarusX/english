<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Status;

class CreateStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status',20);
            $table->timestamps();
        });
        Status::create(['status' => 'Preinscrito']);
        Status::create(['status' => 'Inscrito']);
        Status::create(['status' => 'Egresado']);
        Status::create(['status' => 'Baja']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status');
    }
}
