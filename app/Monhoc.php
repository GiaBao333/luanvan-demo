<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monhoc extends Model
{
    protected $table = 'mon_hoc';

    protected $fillable = ['ten', 'batbuoc', 'xettn'];

    public $timestamps = true;

    public function dang_ky(){
    	return $this->hasMany('App\dang_ky');
    }

    public function du_thi(){
    	return $this->hasMany('App\du_thi');
    }

    public function lich_thi(){
    	return $this->hasMany('App\lich_thi');
    }
}
