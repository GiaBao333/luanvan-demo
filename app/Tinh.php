<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tinh extends Model
{
    protected $table = 'tinh_tp';

    protected $fillable = ['ten'];

    public $timestamps = true;

    public function huyen_quan(){
    	return $this->hasMany('App\huyen_quan');
    }


}
