<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHuyenQuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huyen_quan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->integer('tinh_tp_id')->unsigned();
            $table->foreign('tinh_tp_id')->references('id')->on('tinh_tp')->onDelete('cascade');
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
        Schema::drop('huyen_quan');
    }
}
