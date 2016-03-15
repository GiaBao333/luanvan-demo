<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Truongthpt extends Model
{
    protected $table = 'truong_thpt';

    protected $fillable = ['ten'];

    public $timestamp = true;

    public function thi_sinh (){
    	$this->hasMany('App\thi_sinh');
    }
}
