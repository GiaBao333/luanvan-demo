<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cumthi extends Model
{
    protected $table = 'hoi_dong';

    protected $fillable = ['ten'];

    public $timestamps =true;

    public function hoi_dong (){
    	$this->hasMany('App\hoi_dong');
    }
}
