<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diemkk extends Model
{
    protected $table = 'diem_kk';

    protected $fillable = ['loai','diemcong'];

    public $timestamps = true;

    public function thi_sinh(){
    	return $this->hasMany('App\thi_sinh');
    }
}
