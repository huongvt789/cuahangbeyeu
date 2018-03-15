<form action="{{route('auth.reset-pwd')}}" method="post">
	{{csrf_field()}}
	<input type="hidden" name="token" value="{{$token}}">
	<div>
		New password:
		<input type="password" name="password" value="" placeholder="Password" style="margin-left:34px;margin-top:10px">
	</div>
	<div>
		Confirm password:
		<input type="password" name="cfpassword" value="" placeholder="Confirm password" style="margin-left:10px;margin-top:10px">
	</div>
	<div>
		<button type="submit" style="margin-top:20px">Submit</button>
	</div>
</form>