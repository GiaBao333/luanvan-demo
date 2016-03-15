@extends('layout.dashboard')
@section('main')
<?php use App\Tinh;
use App\Chucdanh; ?>
<div id="page-wrapper">

	<div class="container-fluid">
		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
                    Chức danh
                </h1>
                <ol class="breadcrumb">
                    <li> <i class="fa fa-dashboard"></i>
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                    <li><i class="fa fa-table"></i>
                    	Chức danh
                    </li>
                </ol>
			</div>

		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<a href="{{ url('/chucdanh/create') }}" title=""><button type="button" class="btn btn-default">Thêm</button></a>
				</div>
                        <table class="table table-bordered table-hover">
                        	<thead>
                        		<tr>
                        			<th width="25px">STT</th>
                        			<th>Tên</th>
     
                        			<th width="102px"></th>
                        		</tr>
                        	</thead>
                        	<tbody>
                        	<?php $stt = 1; ?>
                        	@foreach(Chucdanh::all() as $value)
                        		<tr>
                        			<td>{{ $stt }}</td>
                        			<td>{{ $value->ten }}</td>
                        			
                        			<td>
                        				<button type="button" data-delete="{{ $value->id }}" class="btn btn-default btn-delete">
                                            <i class="glyphicon glyphicon-trash"></i>
                                        </button>
                                        	<a href="{{ url('/chucdanh/'.$value->id.'/edit') }}" title="">

                                        	<button type="button" class="btn btn-default"><i class="glyphicon glyphicon-edit"></i></button>
                                        	</a>
                        			</td>
                        		</tr>
                        		<?php $stt++; ?>
                        	@endforeach
                        	</tbody>
                        </table>
			</div>
		</div>
	</div>
</div>
<!--Model delete post-->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="mySmallModalLabel">Bạn muốn xóa bài viết này này?</h4>
            </div>
            <div class="modal-body">
                <form id="form-delete" action="" method="POST" role="form">
                    {!! Form::hidden('_method', 'DELETE') !!}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-primary">Không</button>
                    <button type="submit" class="btn btn-danger">Có</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
@section('script')
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('.btn-delete').click(function(event) {
                /* Act on the event */
                $('#form-delete').attr('action',window.location.protocol+'//'+window.location.host+window.location.pathname+'/'+$(this).attr('data-delete'));
                $('.bs-example-modal-sm').modal('show');
            });
        }); 
    </script>
@stop