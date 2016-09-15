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
            $table->string('darshan_time')->default("not defined");
            $table->string('date')->default("not defined");
            $table->string('token_loc')->default("not defined");
            $table->string('token_time')->default("not defined");
            $table->string('contact_name')->default("not defined");
            $table->string('contact_no',10)->default("XXXXXXXXXX");
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
