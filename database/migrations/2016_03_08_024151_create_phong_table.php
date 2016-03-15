<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phong', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('succhua');
            $table->string('ghichu');
             $table->integer('hoi_dong_id')->unsigned();
            $table->foreign('hoi_dong_id')->references('id')->on('hoi_dong')->onDelete('cascade');
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
        Schema::drop('phong');
    }
}
