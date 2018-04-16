@extends('layout.metronic')
@section('content')
<div class="col-md-10 col-md-offset-1">
	<div style="margin-bottom: 5px;">
		<a href="{{ url('admin/product/them') }}" class="btn btn-primary">Add</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">product</div>
		<div class="panel-body">
			@if(session('thongbao'))
				<div class="alert alert-success">
					{{ session('thongbao') }}
				</div>
			@endif
			<table class="table table-hover table-bordered">
				<tr>
					<th>ID</th>
					<th>Tên sản phẩm</th>
					<th>Loại sản phẩm</th>
					<th>Mô tả</th>
					<th style="width: 100px;">Ảnh</th>
					<th>Giá</th>
					<th style="width: 100px;">Hot product</th>
					<th>Nhà cung cấp</th>
					<th style="width: 160px;"></th>
				</tr>
				<?php
					foreach($sanpham as $rows)
					{
				?>
				<tr>
					<td>{{ $rows->product_id }}</td>
					<td>{{ $rows->p_name }}</td>
					<td>{{ $rows->loaisanpham->c_name }}</td>
					<th>{{ $rows->p_description }}</th>
					<td>
						@if(file_exists('upload/product/'.$rows->p_img))
						<img src="{{ asset('upload/product/'.$rows->p_img) }}" width="100px" alt="">
						@endif
					</td>
					<td>{{ $rows->p_price }}</td>
					<td style="text-align: center;">
						<?php if($rows->p_hotproduct == 1){ ?>
						<span class="glyphicon glyphicon-check"></span>
						<?php } ?>
					</td>
					<td>{{ $rows->nhacungcap->name }}</td>
					<td style="text-align:center">
						<a href="{{ url('admin/product/sua/'.$rows->product_id) }}">Edit</a>&nbsp;|&nbsp;
						<a href="{{ url('admin/product/xoa/'.$rows->product_id) }}" onclick="return window.confirm('Are you sure?');">Delete</a>
					</td>
				</tr>
				<?php } ?>
			</table>
			<style type="text/css">
				.pagination{padding:0px; margin:0px;}
			</style>
			{{ $sanpham->links() }}
		</div>
	</div>
</div>
@endsection