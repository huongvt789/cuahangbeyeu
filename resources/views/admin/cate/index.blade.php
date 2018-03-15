@extends('layout.metronic')
@section('content')
	<div class="search-form">
		<form action="" method="get" id="filterForm">
			<div class="page-size form-group col-xs-1 ">
				<select id="pageSize" name="pagesize" class="form-control">
					@foreach(getPageSizeList() as $ps)
						<option @if($pageSize==$ps) selected @endif value="{{$ps}}"> {{$ps}} </option>
					@endforeach
				</select>
			</div>
			<div class="form-group col-sm-3 div-cate-relative">
				<input class="form-control" type="text" name="keyword" value="" placeholder="Tìm kiếm...">
				<button class="btn btn-success btn-sm btn-asl-form" type="submit">
					<i class="fa fa-search"></i>
				</button>
			</div>
		</form>
	</div>
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
					 Tên danh mục
				</th>
				<th>
					 Danh mục cha
				</th>
				<th class="hidden-480">
					 Hiển thị menu
				</th>
				<th>
					 <a href="{{route('cate.add')}}" class="btn btn-success">
					 	<i class="fa fa-plus"></i>
					 	Thêm
					 </a>
				</th>
			</tr>
		</thead>
		<tbody>
			@foreach($cates as $element)
				<tr>
					<td>
						 {{$loop->index+1}}
					</td>
					<td>
						<img src="@if($element->image=="") {{asset('uploads/default-thumbnail.jpg')}}@else{{asset($element->image)}}@endif" width="140" height="100">
					</td>
					<td>
						 {{$element->name}}
					</td>
					<td>
						 {{$element->getParentName()}}
					</td>
					<td >
						@if($element->is_menu==1)
							<i class="fa fa-check fa-2x text-success"></i>
						@else
							<i class="fa fa-ban fa-2x text-danger"></i>
						@endif
					</td>
					<td>
						{{-- {{route('cate.remove',['id'=>$element->id])}} --}}
						<a href="{{route('cate.edit',['id'=>$element->id])}}" class="btn btn-sm btn-primary">
						 	<i class="fa fa-pencil"></i>
						</a>
						<a href="javascript:;" onclick="confirmRemove('{{route('cate.remove',['id'=>$element->id])}}')" class="btn btn-sm btn-danger">
						 	<i class="fa fa-remove"></i>
						</a>
					</td>
				</tr>
			@endforeach	
			<tr>
				<td colspan="5" class="text-center">
					{{$cates->links()}}
				</td>
			</tr>	
		</tbody>
	</table>
	<!-- {{url()->current()}} -->
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
	$(document).ready(function(){
		$('#pageSize').on('change',function(){
			// Xử lý Url mỗi khi select pagesize được thay đổi giá trị
			// redirect trang sang url theo giá trị đc thay đổi
			$('#filterForm').submit();
		});
	});
</script>
@endsection