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
                	<li class="active"> <i class="fa fa-table"></i>
                		Danh mục
                	</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-6">
            			<div class="form-group">
            			<a href="{{ url('/categories/create') }}" title=""><button type="button" class="btn btn-default">Thêm</button></a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="20px">STT</th>
                                        <th>Tên danh mục</th>
                                        <th width="90px">Trạng thái</th>
                                        <th width="102px"></th>
                                    </tr>
                                </thead>
                                <?php $stt = 1; ?>
                                <tbody>
                                @foreach ($categories as $key => $value)
                                    <tr>
                                        <td>{{ $stt }}</td>
                                        <td>{{ $value->category_name }}</td>
                                        <td>{{ $value->attribs }}</td>
                                        <td>
                                        	<button type="button" class="btn btn-default"><i class="glyphicon glyphicon-trash"></i></button>
                                        	<a href="{{ url('/categories/'.$value->id.'/edit') }}" title="">

                                        	<button type="button" class="btn btn-default"><i class="glyphicon glyphicon-edit"></i></button>
                                        	</a>
                                        </td>
                                    </tr>
                                @endforeach 
                                </tbody>
                            </table>
                        </div>
                    </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
@endsection