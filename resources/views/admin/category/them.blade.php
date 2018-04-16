@extends('layout.metronic')
@section('content')
<div class="col-md-8 col-xs-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">Thêm loại sản phẩm</div>
		<div class="panel-body">
			@if(count($errors) > 0)
			    <div class="alert alert-danger">
			    	@foreach($errors->all() as $err)
                    	{{ $err }}<br>
			   		@endforeach
			    </div>
			@endif
			
			@if(session('thongbao'))
				<div class="alert alert-success">
					{{ session('thongbao') }}
				</div>
			@endif

			<form method="post" action="{{ route('themCategory') }}" enctype= "multipart/form-data">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Tên loại sản phẩm</div>
				<div class="col-md-9">
					<input type="text" name="c_name" class="form-control" />
				</div>
			</div>
			<!-- end row -->			
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3"></div>
				<div class="col-md-9">
					<input type="submit" class="btn btn-primary" value="Thêm">
				</div>
			</div>
			<!-- end row -->
			</form>
		</div>
	</div>
</div>
@endsection