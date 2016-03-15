<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ap extends Model
{
    protected $table = 'ap_kv';

    protected $fillable = ['ten'];

    public $timestamps = true;

    protected function xa_phuong() {
    	return $this->belongTo('App\xa_phuong');
    }
    public static function FindAddress($id)
    {
    	$data = Xa::join('huyen_quan','xa_phuong.huyen_quan_id','=','huyen_quan.id')
    			->join('tinh_tp','huyen_quan.tinh_tp_id','=','tinh_tp.id')
    			->select(
    				'xa_phuong.ten as Xa',
    				'huyen_quan.ten as Huyen',
    				'tinh_tp.ten as Tinh'
    				)
    			->where('xa_phuong.id','=',$id)
    			->get()
    			->first();
    	return $data->Xa.'-'.$data->Huyen.'-'.$data->Tinh;
    }

    public static function SelectAp()
    {
    	return Ap::join('xa_phuong','xa_phuong.id','=','ap_kv.xa_phuong_id')
    			->join('huyen_quan','xa_phuong.huyen_quan_id','=','huyen_quan.id')
    			->join('tinh_tp','huyen_quan.tinh_tp_id','=','tinh_tp.id')
    			->selectRaw('CONCAT(ap_kv.ten,"-",xa_phuong.ten,"-",huyen_quan.ten,"-",tinh_tp.ten) as TenantFullName, 
    				ap_kv.id')
    			->get();
    }
}
