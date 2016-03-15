<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ngay extends Model
{
    protected $table = 'ngay';

    protected $fillable = ['ngay'];

    public $timestamps = true;

    public function lich_thi(){
    	return $this->hasMany('App\lich_thi');
    }
}
