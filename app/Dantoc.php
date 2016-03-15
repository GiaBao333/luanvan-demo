<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dantoc extends Model
{
    protected $table = 'dan_toc';

    protected $fillable = ['ten'];

    public $timestamps = true;

    public function thi_sinh (){
    	$this->hasMany('App\thi_sinh');
    }
}
