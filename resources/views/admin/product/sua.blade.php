@extends('layout.metronic')
@section('content')
<div class="col-md-10 col-md-offset-1">
	<div class="panel panel-primary">
		<div class="panel-heading">Thêm sản phẩm</div>
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
			<form method="post" action="" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<!-- row -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Tên sản phẩm</div>
						<div class="col-md-10">
							<input type="text" value="{{ $sanpham->p_name }}" name="p_name" class="form-control">
						</div>
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Loại sản phẩm</div>
						<div class="col-md-10">
							<select name="fk_category_id">
								<option value="">Chọn thể loại</option>
								@foreach($loaisp as $loai)
								
								<option 
								@if($sanpham->loaisanpham->category_id == $loai->category_id)
                                	{{ "selected" }}
                                @endif
								value="{{ $loai->category_id }}">{{ $loai->c_name }}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Nhà cung cấp</div>
						<div class="col-md-10">
							<select name="idProducer">
								<option value="">Chọn nhà cung cấp</option>
								@foreach($ncc as $n)
								<option
								@if($sanpham->nhacungcap->producer_id == $n->producer_id)
                                	{{ "selected" }}
                                @endif
								value="{{ $n->producer_id }}">{{ $n->name }}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Hình ảnh</div>
						<div class="col-md-10">
							 <p><img width="100px" src="{{ asset('upload/product/'.$sanpham->p_img) }}" alt=""></p>
							<input type="file" name="p_img">
						</div>
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Mô tả</div>
						<div class="col-md-10">
							<textarea class="form-control ckeditor" name="p_description" rows="3" id="demo">
								{{ $sanpham->p_description }}
							</textarea>
						</div>
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Content</div>
						<div class="col-md-10">
							<textarea class="form-control ckeditor" name="p_content" rows="3" id="demo">
								{{ $sanpham->p_content }}
							</textarea>
						</div>
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Giá</div>
						<div class="col-md-10">
							<input type="text" name="p_price" value="{{ $sanpham->p_price }}" class="form-control">
						</div>
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">Sản phẩm hot</div>
						<div class="col-md-10">
							<label class="radio-inline">
								<input
								@if($sanpham->p_hotproduct == 0)
		                            {{ "checked" }}
		                        @endif 
								name="p_hotproduct" value="0" checked="" type="radio">Không
							</label>
							<label class="radio-inline">
								<input
								@if($sanpham->p_hotproduct == 1)
		                            {{ "checked" }}
		                        @endif 
								name="p_hotproduct" value="1" type="radio">Có
							</label>
						</div>
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="form-group">
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-10">
							<a href="{{ url('admin/product/danhsach') }}" title="">
								<input type="button" class="btn btn-info" name="" value="Quay lại">
							</a>
							<input type="submit" class="btn btn-primary" value="Sửa">
							<input type="reset" class="btn btn-danger" value="Làm mới">
						</div>
					</div>
				</div>
				<!-- end row -->
			</form>
		</div>
	</div>
</div>
@endsection