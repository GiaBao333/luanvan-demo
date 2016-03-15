@extends('layout.dashboard')
@section('main')
<div id="page-wrapper">

	<div class="container-fluid">
		<!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Ấp-khu vực
                </h1>
                <ol class="breadcrumb">
                    <li> <i class="fa fa-dashboard"></i>
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                    <li><i class="fa fa-table"></i>
                        <a href="{{ url('/ap') }}" title="">Ấp-khu vực</a>
                    </li>
                    <li class="active"> <i class="fa fa-table"></i>
                        Thêm ấp-khu vực
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-4">
        {!! Form::model($ap,array('route'=>array('ap.update',$ap->id),'method'=>'PUT')) !!}
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
                    <label for="xa_phuong_id" class="control-label">Thuộc xã phường *</label>
                    {!! Form::text('xa_phuong_id', Input::old('xa_phuong_id'), array('class'=>'form-control')) !!}
                </div>
                {!! Form::submit('Cập nhật', array('class'=>'btn btn-primary')) !!}
        {!! Form::close() !!}
        </div>
        </div>
	</div>
</div>
@stop