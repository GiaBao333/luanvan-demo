@extends('layout.dashboard')
@section('main')
<div id="page-wrapper">

	<div class="container-fluid">
		<!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Điểm khuyến khích
                </h1>
                <ol class="breadcrumb">
                    <li> <i class="fa fa-dashboard"></i>
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                    <li><i class="fa fa-table"></i>
                        <a href="{{ url('/diemkk') }}" title="">Điểm khuyến khích</a>
                    </li>
                    <li class="active"> <i class="fa fa-table"></i>
                        Điểm khuyến khích
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-8">
        {!! Form::open(array('action'=>'Dashboard\DiemkkController@store','method'=>'post','role'=>'form')) !!}
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
                    <label for="loai" class="control-label">Loại *</label>
                    {!! Form::text('loai', Input::old('loai'), array('class'=>'form-control')) !!}
                    <label for="diemcong" class="control-label">Điểm cộng *</label>
                    {!! Form::text('diemcong', Input::old('diemcong'), array('class'=>'form-control')) !!}
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