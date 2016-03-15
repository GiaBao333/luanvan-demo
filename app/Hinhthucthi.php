<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hinhthucthi extends Model
{
    protected $table = 'hinhthuc_thi';

    protected $fillable = ['ten','thoiluong'];

    public $timestamps = true;

    public function lich_thi(){
    	return $this->hasMany('App\lich_thi');
    }
}
