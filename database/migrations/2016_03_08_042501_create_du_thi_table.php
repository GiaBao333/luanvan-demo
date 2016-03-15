<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDuThiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('du_thi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('thi_sinh_id')->unsigned();
            $table->foreign('thi_sinh_id')->references('id')->on('thi_sinh')->onDelete('cascade');
            $table->integer('phong_id')->unsigned();
            $table->foreign('phong_id')->references('id')->on('phong')->onDelete('cascade');
            $table->integer('mon_hoc_id')->unsigned();
            $table->foreign('mon_hoc_id')->references('id')->on('mon_hoc')->onDelete('cascade');
            $table->integer('ngay_id')->unsigned();
            $table->foreign('ngay_id')->references('id')->on('ngay')->onDelete('cascade');
            $table->integer('buoi_id')->unsigned();
            $table->foreign('buoi_id')->references('id')->on('buoi')->onDelete('cascade');
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
        Schema::drop('du_thi');
    }
}
