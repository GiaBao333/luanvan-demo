<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDangKyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dang_ky', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('thi_sinh_id')->unsigned();
            $table->foreign('thi_sinh_id')->references('id')->on('thi_sinh')->onDelete('cascade');
            $table->integer('mon_hoc_id')->unsigned();
            $table->foreign('mon_hoc_id')->references('id')->on('mon_hoc')->onDelete('cascade');
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
        Schema::drop('dang_ky');
    }
}
