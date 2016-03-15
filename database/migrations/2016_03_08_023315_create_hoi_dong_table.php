<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoiDongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoi_dong', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->string('diachi');
            $table->integer('sdt');
             $table->integer('cum_thi_id')->unsigned();
            $table->foreign('cum_thi_id')->references('id')->on('cum_thi')->onDelete('cascade');
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
        Schema::drop('hoi_dong');
    }
}
