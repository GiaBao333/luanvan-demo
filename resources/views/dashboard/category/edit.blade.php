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
                        Sửa danh mục
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-6">
                {!! Form::model($cate,array('route'=>array('categories.update',$cate->id),'method'=>'PUT')) !!}
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
                    {!! Form::submit('Cập nhật', array('class'=>'btn btn-default')) !!}
                    <a href="{{ url('/categories') }}" title=""><button type="button" class="btn btn-default">Hủy</button></a>

                {!! Form::close() !!}
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
@endsection