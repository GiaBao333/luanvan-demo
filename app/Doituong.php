<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doituong extends Model
{
    protected $table = 'doi_tuong';

    protected $fillable = ['ten','diemcong'];

    public $timestamps = true;

    public function thi_sinh (){
    	return $this->hasMany('App\thi_sinh');
    }
}
