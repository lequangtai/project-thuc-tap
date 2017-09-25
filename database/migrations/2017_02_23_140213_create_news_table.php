<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tt13_news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('author');
            $table->text('intro');//không nhập cũng được
            $table->text('content');
            $table->string('image');
            $table->string('status')->default(1);
            $table->integer('loaitin_id')->unsigned();//bắt buộc
            $table->foreign('loaitin_id')->references('id')->on('tt13_loaitin')->onDelete('cascade');
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
        Schema::dropIfExists('tt13_news');
    }
}
