@extends('layout.dashboard')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ url('public/asset/dashboard/css/jquery.dataTables.css') }}">
@stop
@section('main')
<?php use App\Tinh; 
use App\Huyen;
use App\Thisinh; 
?>
<div id="page-wrapper">

	<div class="container-fluid">
		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
                    Thí sinh
                </h1>
                <ol class="breadcrumb">
                    <li> <i class="fa fa-dashboard"></i>
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                    <li><i class="fa fa-table"></i>
                    	Thí sinh
                    </li>
                </ol>
			</div>

		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="form-group">
					<a href="{{ url('/thisinh/create') }}" title=""><button type="button" class="btn btn-default">Thêm</button></a>
				</div>
                        <table id="example" class="table">
                        	<thead>
                        		<tr>
                        			<th width="25px">STT</th>
                                    <th>SBD</th>
                        			<th>Tên</th>
                                    <th>Ngày sinh</th>
                                    <th>SDT</th>
                                    <th>Email</th>
                                    <th>Địa chỉ</th>
     
                        			<th width="120px"></th>
                        		</tr>
                        	</thead>
                        	<tbody>
                        	<?php $stt = 1; ?>
                        	@foreach(Thisinh::all() as $value)
                        		<tr>
                        			<td>{{ $stt }}</td>
                        			<td>{{ $value->sbd }}</td>
                                    <td>{{ $value->ten }}</td>
                                    <td>{{ $value->ngaysinh }}</td>
                                    <td>{{ $value->sdt }}</td>
                                    <td>{{ $value->email }}</td>
                                    <td>{{ $value->diachi }}</td>
                        			<td>
                                        <button type="button" class="btn btn-default btn-preview-student" data-id="{{ $value->id }}">
                                            <i class="glyphicon glyphicon-eye-open"></i>
                                        </button>
                        				<button type="button" data-delete="{{ $value->id }}" class="btn btn-default btn-delete">
                                            <i class="glyphicon glyphicon-trash"></i>
                                        </button>
                                        	<a href="{{ url('/thisinh/'.$value->id.'/edit') }}" title="">

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
<!--Model view student-->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <h2 class="text-center">Thông tin chi tiết thí sinh</h2>
            <div class="container-fluid" id="content-student">
                
            </div>
        </div>
    </div>
</div>
@stop
@section('script')
    <script src="{{ url('public/asset/dashboard/js/jquery.dataTables.js') }}" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('#example').DataTable();
            $('.btn-delete').click(function(event) {
                /* Act on the event */
                $('#form-delete').attr('action',window.location.protocol+'//'+window.location.host+window.location.pathname+'/'+$(this).attr('data-delete'));
                $('.bs-example-modal-sm').modal('show');
            });
        }); 

        jQuery(document).ready(function($) {
            $('.btn-preview-student').click(function(event) {
                /* Act on the event */
               $.get(window.location.protocol+'//'+window.location.host+window.location.pathname+'/'+$(this).attr('data-id'), function(data) {
                    
                    $('#content-student').html(null);
                    $('#content-student').html(data);
                    $('.bs-example-modal-lg').modal('show');
               });

            });
        });
    </script>
@stop