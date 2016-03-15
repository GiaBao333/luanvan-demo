<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thisinh extends Model
{
    protected $table = 'thi_sinh';

    protected $fillable = ['sbd','ten','ngaysinh','sdt','email','diachi','tencha','nncha','tenme','nnme','tudo','ap_kv_id','kv_ut_id','doi_tuong_id','diem_kk_id','hanh_kiem_id','hoc_luc_id','ton_giao_id','dan_toc_id','truong_thpt_id'];

    public $timestamps = true;

}
