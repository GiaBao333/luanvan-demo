<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chucdanh extends Model
{
    protected $table = 'chuc_danh';

    protected $fillable = ['ten'];

    public $timestamps = true;

    public function tham_gia(){
    	return $this->hasMany('App\tham_gia');
    }
}
