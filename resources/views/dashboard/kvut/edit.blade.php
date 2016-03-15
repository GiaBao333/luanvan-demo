@extends('layout.dashboard')
@section('main')
<div id="page-wrapper">

	<div class="container-fluid">
		<!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Khu vực ưu tiên
                </h1>
                <ol class="breadcrumb">
                    <li> <i class="fa fa-dashboard"></i>
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                    <li><i class="fa fa-table"></i>
                        <a href="{{ url('/kvut') }}" title="">Khu vực ưu tiên</a>
                    </li>
                    <li class="active"> <i class="fa fa-table"></i>
                        Thêm khu vực ưu tiên
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-4">
        {!! Form::model($kvut,array('route'=>array('kvut.update',$kvut->id),'method'=>'PUT')) !!}
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
                    <label for="ten" class="control-label">Tên *</label>
                    {!! Form::text('ten', Input::old('ten'), array('class'=>'form-control')) !!}
                </div>
                <div class="form-group">
                    <label for="diemcong" class="control-label">Điểm cộng *</label>
                    {!! Form::text('diemcong', Input::old('diemcong'), array('class'=>'form-control')) !!}
                </div>

                
                {!! Form::submit('Thêm', array('class'=>'btn btn-primary')) !!}
        	</div>
        {!! Form::close() !!}
	</div>
</div>
    </div>
@stop