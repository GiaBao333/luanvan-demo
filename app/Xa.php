<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Xa extends Model
{
    protected $table = 'xa_phuong';

    protected $fillable = ['ten'];

    public $timestamps = true;

    protected function huyen_quan() {
    	return $this->belongTo('App\huyen_quan');
    }

    public static function FindAddress($id)
    {
    	return $id;
    }

}
