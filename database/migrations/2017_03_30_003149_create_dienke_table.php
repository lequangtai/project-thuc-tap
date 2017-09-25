<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDienkeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tt13_dienke', function (Blueprint $table) {
            $table->increments('id');
            $table->date('ngaysx');
            $table->date('ngaylap');
            $table->text('mota');
            $table->string('trangthai')->default(1);
            $table->integer('khachhang_id')->unsigned();//bắt buộc
            $table->foreign('khachhang_id')->references('id')->on('tt13_khachhang')->onDelete('cascade');
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
        Schema::dropIfExists('tt13_dienke');
    }
}
