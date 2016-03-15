<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hanhkiem extends Model
{
    protected $table = 'hanh_kiem';

    protected $fillable = ['loai'];

    public $timestamps = true;

    public function thi_sinh (){
    	$this->hasMany('App\thi_sinh');
    }
}
