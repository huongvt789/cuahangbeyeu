@extends('layout.metronic')
@section('content')
<div class="col-md-10 col-xs-offset-1">
	<div style="margin-bottom:5px;">
		<a href="{{ url('admin/news/add') }}" class="btn btn-primary">Add</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">News</div>
		<div class="panel-body">
			<table class="table table-hover table-bordered">
				<tr>
					<th style="width:50px;">STT</th>
					<th style="width:100px;">Ảnh</th>
					<th>Tiêu đề</th>
					<th style="width: 100px">Tin nổi bật</th>
					<th style="width:100px;"></th>
				</tr>
				<?php
					$stt = 0;
				?>
				@foreach($arr as $rows)
				<?php $stt ++; ?>
				<tr>
					<td style="text-align:center;">{{ $stt }}</td>
					<td style="text-align:center;">
						@if(file_exists('upload/news/'.$rows->n_img))
						<img src="{{ asset('upload/news/'.$rows->n_img) }}" style="max-width: 100px;" alt="">
						@endif
					</td>
					<td>{{ $rows->n_name }}</td>
					<td style="text-align: center;">
						@if($rows->n_hotnews == 1)
						<span class="glyphicon glyphicon-check"></span>
						@endif
					</td>
					<td style="text-align:center;">
						<a href="{{ url('admin/news/edit/'.$rows->n_id.'?page='.Request::get('page')) }}">Edit</a>&nbsp;
						<a href="{{ url('admin/news/delete/'.$rows->n_id) }}" onclick="return window.confirm('Are you sure?');">Delete</a>
					</td>
				</tr>
				@endforeach
			</table>
			<style type="text/css">
				.pagination{padding:0px; margin:0px;}			
			</style>
			{{ $arr->render() }}
		</div>
	</div>
</div>
@endsection