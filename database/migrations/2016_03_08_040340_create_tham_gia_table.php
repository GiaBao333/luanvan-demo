<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThamGiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tham_gia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hoi_dong_id')->unsigned();
            $table->foreign('hoi_dong_id')->references('id')->on('hoi_dong')->onDelete('cascade');
            $table->integer('can_bo_id')->unsigned();
            $table->foreign('can_bo_id')->references('id')->on('can_bo')->onDelete('cascade');
            $table->integer('nam_id')->unsigned();
            $table->foreign('nam_id')->references('id')->on('nam')->onDelete('cascade');
            $table->integer('chuc_danh_id')->unsigned();
            $table->foreign('chuc_danh_id')->references('id')->on('chuc_danh')->onDelete('cascade');
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
        Schema::drop('tham_gia');
    }
}
