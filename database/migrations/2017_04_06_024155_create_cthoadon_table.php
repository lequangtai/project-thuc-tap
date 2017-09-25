<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCthoadonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tt13_cthoadon', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hoadon_id')->unsigned();//bắt buộc
            $table->foreign('hoadon_id')->references('id')->on('tt13_hoadon')->onDelete('cascade');
            $table->integer('dienke_id')->unsigned();//bắt buộc
            $table->foreign('dienke_id')->references('id')->on('tt13_dienke')->onDelete('cascade');
            $table->integer('dntt');
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
        Schema::dropIfExists('tt13_cthoadon');
    }
}
