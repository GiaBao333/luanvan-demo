<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tongiao extends Model
{
    protected $table = 'ton_giao';

    protected $fillable = ['ten'];

    public $timestamps = true;

    public function thi_sinh (){
    	return $this->hasMany('App\thi_sinh');
    }


}
