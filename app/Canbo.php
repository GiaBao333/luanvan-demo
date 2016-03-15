<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Canbo extends Model
{
    protected $table = 'can_bo';

    protected $fillable = ['mscb','ten','sdt','diachi','email','ngaysinh','sinhvien'];

    public $timestamps = true;

    public function tham_gia(){
    	return $this->hasMany('App\tham_gia');
    }

}
