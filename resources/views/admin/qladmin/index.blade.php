@extends('layout.metronic')
@section('content')
	<table class="table table-hover">
		<thead>
			<tr>
				<th>
					 STT
				</th>
				<th>
					Ảnh
				</th>
				<th>
					Email
				</th>
				<th>
					 Name
				</th>
				<th>
					 Phone
				</th>
				<th>
					Adress
				</th>
				<th>
					 <a href="{{route('qladmin.add')}}" class="btn btn-success">
					 	<i class="fa fa-plus"></i>
					 	Thêm
					 </a>
				</th>
			</tr>
		</thead>
		<tbody>
			@foreach($admin as $element)
				<tr>
					<td>
						 {{$loop->index+1}}
					</td>
					<td>
						<img src="@if($element->avatar=="") {{asset('uploads/default-thumbnail.jpg')}}@else{{asset($element->avatar)}}@endif" width="140" height="100">
					</td>
					<td>
						{{$element->email}}
					</td>
					<td>
						 {{$element->fullname}}
					</td>
					<td>
						 {{$element->phonenumber}}
					</td>
					<td >
						{{$element->address}}
					</td>
					<td>
						{{-- {{route('qladmin.remove',['id'=>$element->id])}} --}}
						<a href="{{route('qladmin.edit',['id'=>$element->id])}}" class="btn btn-sm btn-primary">
						 	<i class="fa fa-pencil"></i>
						</a>
						<a href="javascript:;" onclick="confirmRemove('{{route('qladmin.remove',['id'=>$element->id])}}')" class="btn btn-sm btn-danger">
						 	<i class="fa fa-remove"></i>
						</a>
					</td>
				</tr>
			@endforeach	
			<tr>
				<td colspan="5" class="text-center">
					{{$admin->links()}}
				</td>
			</tr>	
		</tbody>
	</table>

@endsection
@section('js')
<script type="text/javascript">
	function confirmRemove(url) {
	//muốn sử dụng phải có bootbox.min.js
        bootbox.confirm({
            message: "Bạn có chắc chắn muốn xóa?",
            buttons: {
                confirm: {
                    label: 'Có',
                    className: 'btn-success'
                },
                cancel: {
                    label: 'Không',
                    className: 'btn-danger'
                }
            },
            callback: function (result) {
                if(result){
                	window.location.href=url;
                }
            }
        });
    }
</script>
@endsection