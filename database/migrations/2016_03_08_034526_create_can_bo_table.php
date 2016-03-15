<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCanBoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('can_bo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mscb')->unique();
            $table->string('ten');
            $table->integer('sdt');
            $table->string('diachi');
            $table->string('email');
            $table->date('ngay');
            $table->string('sinhvien');
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
        Schema::drop('can_bo');
    }
}
