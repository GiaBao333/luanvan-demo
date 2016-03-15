<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLichThiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lich_thi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tglambai');
            $table->string('giophatde');
            $table->string('giobatdau');
            $table->integer('ngay_id')->unsigned();
            $table->foreign('ngay_id')->references('id')->on('ngay')->onDelete('cascade');
            $table->integer('buoi_id')->unsigned();
            $table->foreign('buoi_id')->references('id')->on('buoi')->onDelete('cascade');
            $table->integer('mon_hoc_id')->unsigned();
            $table->foreign('mon_hoc_id')->references('id')->on('mon_hoc')->onDelete('cascade');
            $table->integer('hinhthuc_thi_id')->unsigned();
            $table->foreign('hinhthuc_thi_id')->references('id')->on('hinhthuc_thi')->onDelete('cascade');
            $table->integer('nam_id')->unsigned();
            $table->foreign('nam_id')->references('id')->on('nam')->onDelete('cascade');
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
        Schema::drop('lich_thi');
    }
}
