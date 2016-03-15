<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kvut extends Model
{
    protected $table = 'kv_ut';

    protected $fillable = ['ten','diemcong'];

    public $timestamps = true;

    public function thi_sinh (){
    	return $this->hasMany('App\thi_sinh');
    }
}
