<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Huyen extends Model
{
    protected $table = 'huyen_quan';

    protected $fillable = ['ten'];

    public $timestamps = true;

    protected function tinh_tp() {
    	return $this->belongTo('App\tinh_tp');
    }


}
