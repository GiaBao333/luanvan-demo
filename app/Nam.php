<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nam extends Model
{
    protected $table = 'nam';

    protected $fillable = ['nam'];

    public $timestamps = true;

    public function tham_gia(){
    	return $this->hasMany('App\tham_gia');
    }
}
