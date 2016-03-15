@extends('layout.dashboard')
@section('main')
<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Danh mục bài viết
                </h1>
                <ol class="breadcrumb">
                    <li> <i class="fa fa-dashboard"></i>
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                    <li><i class="fa fa-table"></i>
                        <a href="{{ url('/categories') }}" title="">Danh mục</a>
                    </li>
                    <li class="active"> <i class="fa fa-table"></i>
                        Thêm danh mục
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-6">
                {!! Form::open(array('action'=>'Dashboard\CategoryController@store','method'=>'post','role'=>'form')) !!}
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
                        <label>Tên danh mục</label>
                        {!! Form::text('category_name', Input::old('category_name'), array('class'=>'form-control')) !!}                
                    </div>

                    <div class="form-group">
                        <label>Ghi chú</label>
                        {!! Form::textarea('note', Input::old('note'), array('class'=>'form-control','rows'=>5)) !!}
                    </div>
                    {!! Form::submit('Thêm', array('class'=>'btn btn-default')) !!}
                    <button type="reset" class="btn btn-default">Hủy</button>

                {!! Form::close() !!}
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
@endsection