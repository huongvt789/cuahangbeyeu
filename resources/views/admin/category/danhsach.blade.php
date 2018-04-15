@extends('layout.metronic')
@section('content')
<div class="col-md-6 col-xs-offset-3">
	<div style="margin-bottom: 5px;">
		<a href="{{ url('admin/category/them') }}" class="btn btn-primary">Add</a>
	</div>
	<div class="panel panel-primary" style="width: 700px">
		<div class="panel-heading">Danh sách loại sản phẩm</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover" >
				@if(session('thongbao'))
				<div class="alert alert-success">
					{{ session('thongbao') }}
				</div>
				@endif
				<tr>
					<th>Mã loại sản phẩm</th>
					<th>Tên loại sản phẩm</th>
					<th style="width:100px;">Quản lý</th>
				</tr>
			@foreach($category as $rows)
				<tr>
					<td>{{ $rows->category_id }}</td>
					<td>{{ $rows->c_name }}</td>
					<td style="text-align:center">
						<a href="{{ url('admin/category/sua/'.$rows->category_id) }}">Edit</a>&nbsp;|&nbsp;
						<a href="{{ url('admin/category/xoa/'.$rows->category_id) }}" onclick="return window.confirm('Are you sure?');">Delete</a>
					</td>
				</tr>
			@endforeach
			</table>
			<style type="text/css">
				.pagination{padding: 0px; margin: 0px;}
			</style>
			{{ $category->links() }}
		</div>
	</div>
</div>
@endsection