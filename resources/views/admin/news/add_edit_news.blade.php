@extends('layout.metronic')
@section('content')
<div class="col-md-8 col-xs-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">Add edit news</div>
		<div class="panel-body">
			<form method="post" action="" enctype= "multipart/form-data">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Tiêu đề</div>
				<div class="col-md-9">
					<input type="text" name="n_name" class="form-control" value="{{ isset($arr->n_name)?$arr->n_name:"" }}">
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Giới thiệu</div>
				<div class="col-md-9">
					<textarea name="n_description" class="form-control" style="height:250px;">
					{{ isset($arr->n_description)?$arr->n_description:"" }}					
					</textarea>
					<script type="text/javascript">
						CKEDITOR.replace('n_description');
					</script>
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Chi tiết</div>
				<div class="col-md-9">
					<textarea name="n_content" class="form-control" style="height:300px;">
						{{ isset($arr->n_content)?$arr->n_content:"" }}
					</textarea>
					<script type="text/javascript">
						CKEDITOR.replace('n_content');
					</script>
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3"></div>
				<div class="col-md-9">
					<input type="checkbox" {{ isset($arr->n_hotnews)&&$arr->n_hotnews==1?'checked':'' }} name="n_hotnews" id="n_hotnews"> <label for="n_hotnews">Tin nổi bật</label>
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Ảnh</div>
				<div class="col-md-9">
					<input type="file" name="n_img">
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Tác giả</div>
				<div class="col-md-9">
					<input type="text" name="author" class="form-control" value="{{ isset($arr->author)?$arr->author:"" }}">
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Đường dẫn</div>
				<div class="col-md-9">
					<input type="text" name="slug" class="form-control" value="{{ isset($arr->slug)?$arr->slug:"" }}">
				</div>
			</div>
			<!-- end row -->			
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3"></div>
				<div class="col-md-9">
					<input type="submit" class="btn btn-primary" value="Process">
				</div>
			</div>
			<!-- end row -->
			</form>
		</div>
	</div>
</div>
@endsection