<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hod_id');
            $table->string('dep_id');
            $table->string('h_name');
            $table->string('h_designation');
            $table->string('h_email');
            $table->integer('h_phoneno');
            $table->string('h_password');
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
        Schema::dropIfExists('heads');
    }
}
