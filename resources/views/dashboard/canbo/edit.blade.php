@extends('layout.dashboard')
@section('main')
<div id="page-wrapper">

	<div class="container-fluid">
		<!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Cán bộ
                </h1>
                <ol class="breadcrumb">
                    <li> <i class="fa fa-dashboard"></i>
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                    <li><i class="fa fa-table"></i>
                        <a href="{{ url('/canbo') }}" title="">Cán bộ</a>
                    </li>
                    <li class="active"> <i class="fa fa-table"></i>
                        Thêm Tỉnh
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">
        
        {!! Form::model($canbo,array('route'=>array('canbo.update',$canbo->id),'method'=>'PUT')) !!}
        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
            <div class="col-lg-4">
        		<div class="form-group">
                    <label for="mscb" class="control-label">Mscb *</label>
                    {!! Form::text('mscb', Input::old('mscb'), array('class'=>'form-control')) !!}
                </div>
                <div class="form-group">
                    <label for="ten" class="control-label">Tên *</label>
                    {!! Form::text('ten', Input::old('ten'), array('class'=>'form-control')) !!}
                </div>
                <div class="form-group">
                    <label for="sdt" class="control-label">SDT *</label>
                    {!! Form::text('sdt', Input::old('sdt'), array('class'=>'form-control')) !!}
                </div>
                <div class="form-group">
                    <label for="diachi" class="control-label">Địa chỉ *</label>
                    {!! Form::text('diachi', Input::old('diachi'), array('class'=>'form-control')) !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="email" class="control-label">Email *</label>
                    {!! Form::text('email', Input::old('email'), array('class'=>'form-control')) !!}
                </div>
                <div class="form-group">
                    <label for="ngaysinh" class="control-label">Ngày sinh *</label>
                    {!! Form::text('ngaysinh', Input::old('ngaysinh'), array('class'=>'form-control')) !!}
                </div>
                <div class="form-group">
                    <label for="sinhvien" class="control-label">Sinh viên *</label>
                    {!! Form::text('sinhvien', Input::old('sinhvien'), array('class'=>'form-control')) !!}
                </div>
                {!! Form::submit('Thêm', array('class'=>'btn btn-primary')) !!}
            </div>
        {!! Form::close() !!}

        </div>
	</div>
</div>
@stop