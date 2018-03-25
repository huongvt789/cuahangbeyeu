@extends('layout.metronic')
@section('content')
<?php 
	$act = Request::get("act");
	switch ($act) {
		case 'edit':
			# code...
			$id = Request::get("id");
			$form_action = url('admin/producer?act=edit&id='.$id);
			// lấy bản ghi có id truyền vào
			$obj = DB::table("producer")->where("producer_id","=",$id)->first();
			break;
		case 'add':
			# code...
		    $form_action = url('admin/producer?act=add');
			break;
		default:
			# code...
			break;
	};
 ?>
 @if($act == "edit" || $act == "add")
<script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
</script>
 <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Thêm -sửa nhà cung cấp</h4>
      </div>
      <div class="modal-body">
        <!-- body -->
        <form method="post" action="{{ $form_action }}">
        <!-- muon submit form thi phai co token -->
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
        	<!-- row -->
        	<div class="row">
        		<div class="col-md-2">Tên nhà cung cấp</div>
        		<div class="col-md-10"><input type="text" required name="name" value="{{ isset($obj->name)?$obj->name:'' }}" required class="form-control"></div>
        	</div>
        	<!-- end row -->
        	<!-- row -->
        	<div class="row">
        		<div class="col-md-2">Số điện thoại</div>
        		<div class="col-md-10"><input type="number" required name="phone" value="{{ isset($obj->phone)?$obj->phone:'' }}" required class="form-control"></div>
        	</div>
        	<!-- end row -->
        	<!-- row -->
        	<div class="row">
        		<div class="col-md-2">Địa chỉ</div>
        		<div class="col-md-10"><input type="text" required name="address" value="{{ isset($obj->address)?$obj->address:'' }}" required class="form-control"></div>
        	</div>
        	<!-- end row -->
        	<!-- row -->
        	<div class="row">
        		<div class="col-md-2">Email</div>
        		<div class="col-md-10"><input type="email" required name="email" value="{{ isset($obj->email)?$obj->email:'' }}" required class="form-control"></div>
        	</div>
        	<!-- end row -->
        </div>
        <div class="form-group">
        	<!-- row -->
        	<div class="row">
        		<div class="col-md-2"></div>
        		<div class="col-md-10"><input type="submit" class="btn btn-primary" value="{{ isset($act)&&$act=='add'?'Add':'Edit' }}"> <input type="reset" class="btn btn-danger" value="Reset"></div>
        	</div>
        	<!-- end row -->
        </div>
        </form>
        <!-- end body -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
 @endif
<div class="col-md-6 col-xs-offset-3">
	<div style="margin-bottom: 5px;">
		<a href="{{ url('admin/producer?act=add') }}" class="btn btn-primary">Add</a>
	</div>
	<div class="panel panel-primary" style="width: 700px">
		<div class="panel-heading">Nhà cung cấp</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover" >
				<tr>
					<th>Tên nhà cung cấp</th>
					<th>Số điện thoại</th>
					<th style="width: 200px">Địa chỉ</th>
					<th>Email</th>
					<th style="width:100px;">Quản lý</th>
				</tr>
			@foreach($arr as $rows)
				<tr>
					<td>{{ $rows->name }}</td>
					<td>{{ $rows->phone }}</td>
					<td>{{ $rows->address }}</td>
					<td>{{ $rows->email }}</td>
					<td style="text-align:center">
						<a href="{{ url('admin/producer/?act=edit&id='.$rows->producer_id) }}">Edit</a>&nbsp;|&nbsp;
						<a href="{{ url('admin/producer/delete/'.$rows->producer_id) }}" onclick="return window.confirm('Are you sure?');">Delete</a>
					</td>
				</tr>
			@endforeach
			</table>
			<style type="text/css">
				.pagination{padding: 0px; margin: 0px;}
			</style>
			{{ $arr->render() }}
		</div>
	</div>
</div>
@endsection