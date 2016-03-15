@extends('layout.dashboard')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ url('public/asset/dashboard/css/bootstrap-select.css') }}">
@stop
@section('main')
<?php use App\Tinh; ?>
<div id="page-wrapper">

	<div class="container-fluid">
		<!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Huyện-Quận
                </h1>
                <ol class="breadcrumb">
                    <li> <i class="fa fa-dashboard"></i>
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                    <li><i class="fa fa-table"></i>
                        <a href="{{ url('/huyen') }}" title="">Huyện-Quận</a>
                    </li>
                    <li class="active"> <i class="fa fa-table"></i>
                        Thêm Huyện-Quận
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-8">
        {!! Form::open(array('action'=>'Dashboard\HuyenController@store','method'=>'post','role'=>'form')) !!}
        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
        	<div class="col-lg-8">
        		<div class="form-group">
                    <label for="ten" class="control-label">Tên *</label>
                    {!! Form::text('ten', Input::old('ten'), array('class'=>'form-control')) !!}
                </div>
                <div class="form-group">
                <label for="tinh_tp_id" class="control-label">Thuộc tỉnh-tp *</label>
                <select data-live-search="true" name="tinh_tp_id" class="form-control selectpicker">

                @foreach(Tinh::all() as $value)
                    <option value="{{ $value->id }}">{{ $value->ten }}</option>
                @endforeach
                </select>
                </div>
                
                
                <div class="form-group">
                {!! Form::submit('Thêm', array('class'=>'btn-primary form-control')) !!}
        	</div>
        	</div>
        {!! Form::close() !!}
        </div>
        </div>
	</div>
</div>
@stop
@section('script')
    <script src="{{url('public/asset/dashboard/js/bootstrap-select.js')}}" type="text/javascript" charset="utf-8"></script>
@stop