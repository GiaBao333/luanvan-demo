<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hocluc extends Model
{
    protected $table = 'hoc_luc';

    protected $fillable = ['loai'];

    public $timestamps = true;

    public function thi_sinh (){
    	$this->hasMany('App\thi_sinh');
    }
}
