<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoadonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tt13_hoadon', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ky');
            $table->date('tungay');
            $table->date('denngay');
            $table->integer('chisodau');
            $table->integer('chisocuoi');
            $table->date('ngaylaphd');
            $table->integer('tongtien');
            $table->string('trangthai');
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
        Schema::dropIfExists('tt13_hoadon');
    }
}
