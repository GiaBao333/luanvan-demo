<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThiSinhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thi_sinh', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sbd')->unique();
            $table->string('ten');
            $table->date('ngaysinh');
            $table->integer('sdt');
            $table->string('email',60);
            $table->string('diachi');
            $table->string('tencha');
            $table->string('nncha');
            $table->string('tenme');
            $table->string('nnme');
            $table->string('tudo');
            $table->integer('ap_kv_id')->unsigned();
            $table->foreign('ap_kv_id')->references('id')->on('ap_kv')->onDelete('cascade');
            $table->integer('kv_ut_id')->unsigned();
            $table->foreign('kv_ut_id')->references('id')->on('kv_ut')->onDelete('cascade');
            $table->integer('doi_tuong_id')->unsigned();
            $table->foreign('doi_tuong_id')->references('id')->on('doi_tuong')->onDelete('cascade');
            $table->integer('diem_kk_id')->unsigned();
            $table->foreign('diem_kk_id')->references('id')->on('diem_kk')->onDelete('cascade');
            $table->integer('hanh_kiem_id')->unsigned();
            $table->foreign('hanh_kiem_id')->references('id')->on('hanh_kiem')->onDelete('cascade');
            $table->integer('hoc_luc_id')->unsigned();
            $table->foreign('hoc_luc_id')->references('id')->on('hoc_luc')->onDelete('cascade');
            $table->integer('ton_giao_id')->unsigned();
            $table->foreign('ton_giao_id')->references('id')->on('ton_giao')->onDelete('cascade');
            $table->integer('dan_toc_id')->unsigned();
            $table->foreign('dan_toc_id')->references('id')->on('dan_toc')->onDelete('cascade');
            $table->integer('truong_thpt_id')->unsigned();
            $table->foreign('truong_thpt_id')->references('id')->on('truong_thpt')->onDelete('cascade');
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
        Schema::drop('thi_sinh');
    }
}
