@extends('layout.dashboard')
@section('main')
<div id="page-wrapper">

	<div class="container-fluid">
		<!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Môn học
                </h1>
                <ol class="breadcrumb">
                    <li> <i class="fa fa-dashboard"></i>
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                    <li><i class="fa fa-table"></i>
                        <a href="{{ url('/monhoc') }}" title="">Môn học</a>
                    </li>
                    <li class="active"> <i class="fa fa-table"></i>
                        Thêm môn học
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-4">
        {!! Form::open(array('action'=>'Dashboard\MonhocController@store','method'=>'post','role'=>'form')) !!}
        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
        		<div class="form-group">
                    <label for="ten" class="control-label">Tên môn *</label>
                    {!! Form::text('ten', Input::old('ten'), array('class'=>'form-control')) !!}
                </div>
                <div class="form-group">
                    <label for="batbuoc" class="control-label">Môn thi bắt buộc *</label>
                    {!! Form::text('batbuoc', Input::old('batbuoc'), array('class'=>'form-control')) !!}
                </div>
                <div class="form-group">
                    <label for="xettn" class="control-label">Môn xét tốt nghiệp *</label>
                    {!! Form::text('xettn', Input::old('xettn'), array('class'=>'form-control')) !!}
                </div>
                {!! Form::submit('Thêm', array('class'=>'btn btn-primary')) !!}
        {!! Form::close() !!}
        </div>
        </div>
	</div>
</div>
@stop