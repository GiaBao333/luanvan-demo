@extends('layout.dashboard')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ url('public/asset/dashboard/css/bootstrap-select.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/asset/dashboard/css/datepicker.css') }}">
@stop
@section('main')
<?php use App\Tinh;
use App\Ap;
use App\Kvut;
use App\Doituong;
use App\Tongiao;
use App\Dantoc;
use App\Truongthpt;
use App\Diemkk;
use App\Hanhkiem;
use App\Hocluc;
 ?>
<div id="page-wrapper">

	<div class="container-fluid">
		<!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Thí sinh
                </h1>
                <ol class="breadcrumb">
                    <li> <i class="fa fa-dashboard"></i>
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                    <li><i class="fa fa-table"></i>
                        <a href="{{ url('/thisinh') }}" title="">Thí sinh</a>
                    </li>
                    <li class="active"> <i class="fa fa-table"></i>
                        Thêm thí sinh
                    </li>
                </ol>
            </div>
        </div>
        {!! Form::open(array('action'=>'Dashboard\ThisinhController@store','method'=>'post','role'=>'form')) !!}
        <div class="row">
        	<div class="col-lg-4">
        		<div class="form-group">
                    <label for="sbd" class="control-label">SBD *</label>
                    @if($errors->first('sbd'))
                        <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first('sbd') }}</li>
                        </ul>
                        </div>
                    @endif
                    {!! Form::text('sbd', Input::old('sbd'), array('class'=>'form-control')) !!}
                </div>

                <div class="form-group">
                    <label for="ten" class="control-label">Tên *</label>
                    @if($errors->first('ten'))
                        <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first('ten') }}</li>
                        </ul>
                        </div>
                    @endif
                    {!! Form::text('ten', Input::old('ten'), array('class'=>'form-control')) !!}
                </div>
                <div class="form-group">
                    <label for="ngaysinh" class="control-label">Ngày sinh *</label>
                    @if($errors->first('ngaysinh'))
                        <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first('ngaysinh') }}</li>
                        </ul>
                        </div>
                    @endif
                    {!! Form::text('ngaysinh', Input::old('ngaysinh'), array('class'=>'form-control','data-date-format'=>'yyyy-mm-dd','value'=>'1990-01-01','id'=>'dp2')) !!}
                </div>
                <div class="form-group">
                    <label for="sdt" class="control-label">Điện thoại *</label>
                    @if($errors->first('sdt'))
                        <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first('sdt') }}</li>
                        </ul>
                        </div>
                    @endif
                    {!! Form::text('sdt', Input::old('sdt'), array('class'=>'form-control')) !!}
                </div>
                <div class="form-group">
                    <label for="email" class="control-label">Email *</label>
                    @if($errors->first('email'))
                        <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first('email') }}</li>
                        </ul>
                        </div>
                    @endif
                    {!! Form::text('email', Input::old('email'), array('class'=>'form-control')) !!}
                </div>
                <div class="form-group">
                    <label for="tencha" class="control-label">Tên cha *</label>
                    @if($errors->first('tencha'))
                        <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first('tencha') }}</li>
                        </ul>
                        </div>
                    @endif
                    {!! Form::text('tencha', Input::old('tencha'), array('class'=>'form-control')) !!}
                </div>
                <div class="form-group">
                    <label for="nncha" class="control-label">Nghề nghiệp cha *</label>
                    @if($errors->first('nncha'))
                        <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first('nncha') }}</li>
                        </ul>
                        </div>
                    @endif
                    {!! Form::text('nncha', Input::old('nncha'), array('class'=>'form-control')) !!}
                </div>
                <div class="form-group">
                    <label for="tenme" class="control-label">Tên mẹ *</label>
                    @if($errors->first('tenme'))
                        <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first('tenme') }}</li>
                        </ul>
                        </div>
                    @endif
                    {!! Form::text('tenme', Input::old('tenme'), array('class'=>'form-control')) !!}
                </div>
                <div class="form-group">
                    <label for="nnme" class="control-label">Nghề nghiệp mẹ *</label>
                    @if($errors->first('nnme'))
                        <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first('nnme') }}</li>
                        </ul>
                        </div>
                    @endif
                    {!! Form::text('nnme', Input::old('nnme'), array('class'=>'form-control')) !!}
                </div>
                <div class="form-group">
                    <label for="tudo" class="control-label">Thí sinh tự do *</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="tudo" value="1" checked="checked">
                            Phải
                        </label>
                        <label>
                            <input type="radio" name="tudo" value="0">
                            Không
                        </label>
                    </div>
                </div>    
            </div>
            <div class="col-lg-4">
                
                <div class="form-group">
                    <label for="ap_kv_id" class="control-label">Thuộc ấp-kv *</label>
                    @if($errors->first('ap_kv_id'))
                        <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first('ap_kv_id') }}</li>
                        </ul>
                        </div>
                    @endif
                    <select data-live-search="true" name="ap_kv_id" class="form-control selectpicker">
                        @foreach(Ap::SelectAp() as $value)
                            <option value="{{ $value->id }}">{{ $value->TenantFullName }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="kv_ut_id" class="control-label">Thuộc kv-ut *</label>
                    @if($errors->first('kv_ut_id'))
                        <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first('kv_ut_id') }}</li>
                        </ul>
                        </div>
                    @endif
                    <select data-live-search="true" name="kv_ut_id" class="form-control selectpicker" >
                        @foreach(Kvut::all() as $value)
                            <option value="{{ $value->id }}">{{$value->ten}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="doi_tuong_id" class="control-label">Thuộc đối tượng *</label>
                    @if($errors->first('doi_tuong_id'))
                        <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first('doi_tuong_id') }}</li>
                        </ul>
                        </div>
                    @endif
                    <select data-live-search="true" name="doi_tuong_id" class="form-control selectpicker" >
                        @foreach(Doituong::all() as $value)
                            <option value="{{ $value->id }}">{{$value->ten}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="dan_toc_id" class="control-label">Thuộc dân tộc *</label>
                    @if($errors->first('dan_toc_id'))
                        <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first('dan_toc_id') }}</li>
                        </ul>
                        </div>
                    @endif
                    <select data-live-search="true" name="dan_toc_id" class="form-control selectpicker" >
                        @foreach(Dantoc::all() as $value)
                            <option value="{{ $value->id }}">{{$value->ten}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="ton_giao_id" class="control-label">Thuộc tôn giáo *</label>
                    @if($errors->first('ton_giao_id'))
                        <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first('ton_giao_id') }}</li>
                        </ul>
                        </div>
                    @endif
                    <select data-live-search="true" name="ton_giao_id" class="form-control selectpicker" >
                        @foreach(Tongiao::all() as $value)
                            <option value="{{ $value->id }}">{{$value->ten}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="truong_thpt_id" class="control-label">Thuộc trường thpt *</label>
                    @if($errors->first('truong_thpt_id'))
                        <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first('truong_thpt_id') }}</li>
                        </ul>
                        </div>
                    @endif
                    <select data-live-search="true" name="truong_thpt_id" class="form-control selectpicker" >
                        @foreach(Truongthpt::all() as $value)
                            <option value="{{ $value->id }}">{{$value->ten}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="diem_kk_id" class="control-label">Điểm khuyến khích *</label>
                    @if($errors->first('diem_kk_id'))
                        <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first('diem_kk_id') }}</li>
                        </ul>
                        </div>
                    @endif
                    <select data-live-search="true" name="diem_kk_id" class="form-control selectpicker" >
                        @foreach(Diemkk::all() as $value)
                            <option value="{{ $value->id }}">{{$value->loai}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="hanh_kiem_id" class="control-label">Thuộc hạnh kiểm *</label>
                    @if($errors->first('hanh_kiem_id'))
                        <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first('hanh_kiem_id') }}</li>
                        </ul>
                        </div>
                    @endif
                    <select data-live-search="true" name="hanh_kiem_id" class="form-control selectpicker" >
                        @foreach(Hanhkiem::all() as $value)
                            <option value="{{ $value->id }}">{{$value->loai}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="hoc_luc_id" class="control-label">Thuộc học lực *</label>
                    @if($errors->first('hoc_luc_id'))
                        <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first('hoc_luc_id') }}</li>
                        </ul>
                        </div>
                    @endif
                    <select data-live-search="true" name="hoc_luc_id" class="form-control selectpicker" >
                        @foreach(Hocluc::all() as $value)
                            <option value="{{ $value->id }}">{{$value->loai}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="diachi" class="control-label">Địa chỉ *</label>
                    @if($errors->first('diachi'))
                        <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first('diachi') }}</li>
                        </ul>
                        </div>
                    @endif
                    {!! Form::textarea('diachi', Input::old('diachi'), array('class'=>'form-control','rows'=>3)) !!}
                </div>
            </div>
        </div>
        {!! Form::submit('Thêm', array('class'=>'btn btn-primary')) !!}
        {!! Form::close() !!}      
                
        
    </div>
        
</div>
@stop
@section('script')
    <script src="{{url('public/asset/dashboard/js/bootstrap-select.js')}}" type="text/javascript" charset="utf-8"></script>
    <script src="{{url('public/asset/dashboard/js/bootstrap-datepicker.js')}}" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('#dp2').datepicker();
        });
    </script>
@stop