@extends('layout.dashboard')
@section('main')
<div id="page-wrapper">

	<div class="container-fluid">
		<!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Học lực
                </h1>
                <ol class="breadcrumb">
                    <li> <i class="fa fa-dashboard"></i>
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                    <li><i class="fa fa-table"></i>
                        <a href="{{ url('/hocluc') }}" title="">Học lực</a>
                    </li>
                    <li class="active"> <i class="fa fa-table"></i>
                        Thêm học lực
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-4">
        {!! Form::model($hocluc,array('route'=>array('hocluc.update',$hocluc->id),'method'=>'PUT')) !!}
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
                    <label for="loai" class="control-label">Loai *</label>
                    {!! Form::text('loai', Input::old('loai'), array('class'=>'form-control')) !!}
                </div>
                {!! Form::submit('Thêm', array('class'=>'btn btn-primary')) !!}
        {!! Form::close() !!}
        </div>
        </div>
	</div>
</div>
@stop