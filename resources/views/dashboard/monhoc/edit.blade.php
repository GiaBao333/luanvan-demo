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
                        Thêm Môn học
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-8">
        {!! Form::model($monhoc,array('route'=>array('monhoc.update',$monhoc->id),'method'=>'PUT')) !!}
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
                    <label for="ten" class="control-label">Tên môn *</label>
                    {!! Form::text('ten', Input::old('ten'), array('class'=>'form-control')) !!}
                    <label for="batbuoc" class="control-label">Môn thi bắt buộc *</label>
                    {!! Form::text('batbuoc', Input::old('batbuoc'), array('class'=>'form-control')) !!}
                    <label for="xettn" class="control-label">Môn xét tốt nghiệp *</label>
                    {!! Form::text('xettn', Input::old('xettn'), array('class'=>'form-control')) !!}
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