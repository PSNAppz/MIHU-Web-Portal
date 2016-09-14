<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDarshansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('darshans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('time_from')->default("not defined");
            $table->string('time_till')->default("not defined");
            $table->string('date')->default("not defined");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('darshans');
    }
}
