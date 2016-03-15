<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buoi extends Model
{
    protected $table = 'buoi';

    protected $fillable = ['buoi'];

    public $timestamps = true;

    public function lich_thi(){
    	return $this->hasMany('App\lich_thi');
    }
}
