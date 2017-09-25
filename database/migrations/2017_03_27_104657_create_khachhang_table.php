<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhachhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tt13_khachhang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenkh');
            $table->string('quan');
            $table->string('phuong');
            $table->string('diachi');
            $table->string('sdt');
            $table->integer('cmnd');
            $table->string('matkhau');
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
        Schema::dropIfExists('tt13_khachhang');
    }
}
