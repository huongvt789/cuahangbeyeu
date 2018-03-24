@extends('layout.metronic')
@section('content')
	<!--suppress ALL -->
	<div>
		<h3>Sửa tài khoản Admin</h3>
	</div>
	<form id="admin-form" action="{{ route('qladmin.save') }}" method="post" enctype="multipart/form-data" novalidate>
		{{csrf_field()}}
		<input type="hidden" name="id" value="{{$model->id}}">
		<div class="col-md-6">
			<div class="form-group row"> 
				<lable class="col-md-3 control-lable">Email<span class="text-danger">*</span></lable>
				<div class="col-md-9">
					<input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{old('email',$model->email)}}" disabled selected>
					@if(count($errors)>0)
						<span class="text-danger">{{$errors->first('email')}}</span>
					@endif
				</div>
			</div>
			<div class="form-group row">
				<lable class="col-md-3 control-lable">Password<span class="text-danger">*</span></lable>
				<div class="col-md-9">
					<input id="password" type="password" class="form-control" placeholder="Mật khẩu" name="password" >
					@if(count($errors)>0)
						<span class="text-danger">{{$errors->first('password')}}</span>
					@endif
				</div>
			</div>
			<div class="form-group row">
				<lable class="col-md-3 control-lable">Tên<span class="text-danger">*</span></lable>
				<div class="col-md-9">
					<input id="fullname" type="text" class="form-control" placeholder="Tên" name="fullname" value="{{old('fullname',$model->fullname)}}">
					@if(count($errors)>0)
						<span class="text-danger">{{$errors->first('fullname')}}</span>
					@endif
				</div>
			</div>
			<div class="form-group row">
				<lable class="col-md-3 control-lable">Phone<span class="text-danger">*</span></lable>
				<div class="col-md-9">
					<input id="phonenumber" type="text" class="form-control" placeholder="Số điện thoại" name="phonenumber" value="{{old('phonenumber',$model->phonenumber)}}">
					@if(count($errors)>0)
						<span class="text-danger">{{$errors->first('phonenumber')}}</span>
					@endif
				</div>
			</div>
			<div class="form-group row">
				<lable class="col-md-3 control-lable">Address<span class="text-danger">*</span></lable>
				<div class="col-md-9">
					<input id="address" type="text" class="form-control" placeholder="Địa chỉ" name="address" value="{{old('address',$model->address)}}">
					@if(count($errors)>0)
						<span class="text-danger">{{$errors->first('address')}}</span>
					@endif
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group-row">
				<div class="col-md-offset-3">
					<img style="margin-left:8px; margin-bottom:5px" src="@if($model->avatar=="")
								{{asset('uploads/default-thumbnail.png')}}
							@else {{asset($model->avatar)}}
							@endif" id="exampleImage" width="150" height="130">
				</div>
			</div>
			<div class="form-group row">
				<label for="image" class="col-md-3 control-label">Ảnh</label>
				<div class="col-md-9">
					<input type="file" id="avatar" name="avatar" accept="image/*">
					@if(count($errors)>0)
						<span class="text-danger">{{$errors->first('avatar')}}</span>
					@endif
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="text-center">
				<a href="{{route('qladmin.index')}}" class="btn btn-danger">Hủy</a>
				<button type="submit" class="btn btn-success">Lưu</button>
			</div>
		</div>	
	</form>
	<input type="hidden" id="ajaxToken" value="{{csrf_token()}}">
@endsection
@section('js')
<script type="text/javascript">
	$(document).ready(function(){
		$('#admin-form').validate({
			// rules luật lệ ,required :bắt buộc
			// muốn sử dụng phải dùng jquery.validate.min.js
			rules:{
				email:{
					required:true,
					email:true,
					checkExisted:{
                        requestUrl:"{{route('qladmin.checkName')}}",
                        modelId:'{{$model->id}}'
                    }
				},
                password: 'required',
                fullname:'required',
                phonenumber:'required',
                address:'required'
			},
			// hiển thị messages 
			messages:{
				email:{
					required:'Vui lòng nhập email',
					email:'Vui lòng nhập đúng ****@gmail.com'
				},
				password:{
					required:'Vui lòng nhập mật khẩu'
				},
				phonenumber:{
					required:'Vui lòng nhập số điện thoại'
				},
				fullname:{
					required:'Vui lòng nhập tên'
				},
				address:{
					required:'Vui lòng nhập địa chỉ'
				},
			},
			// Hiển thị thông báo với class css danger
			errorPlacement:function(error,element){
				$(error).addClass('text-danger');
				error.insertAfter(element);
			}
		});
	});
</script>
@endsection