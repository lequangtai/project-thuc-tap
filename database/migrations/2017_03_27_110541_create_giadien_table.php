<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiadienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tt13_giadien', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mabac');
            $table->string('tenbac');
            $table->integer('tukw');
            $table->integer('denkw');
            $table->integer('dongia');
            $table->date('ngayapdung');
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
        Schema::dropIfExists('tt13_giadien');
    }
}
