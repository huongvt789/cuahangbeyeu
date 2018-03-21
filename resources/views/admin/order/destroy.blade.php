@extends('layout.metronic')
@section('content')
<h1>Danh sách order đã hủy</h1>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>
					 STT
				</th>
				<th>
					Mã đơn hàng
				</th>
				<th>
					Ngày mua
				</th>
				<th>
					Thành tiền
				</th>
				<th>
					Tên khách hàng
				</th>
				<th>
					SĐT
				</th>
				<th>
					Địa chỉ
				</th>
				<th>
					HTTT
				</th>
				<th>
					Trạng thái
				</th>
			</tr>
		</thead>
		<tbody>
			@foreach($order as $element)
				<tr>
					<td>
						{{$loop->index+1}}
					</td>
					<td style="text-align: center;">
						{{$element->order_id}}
					</td>
					<td>
						{{$element->ngaymua}}
					</td>
					<td>
						{{$element->thanhtien}}
					</td>
					<td>
						{{$element->ten}}
					</td>
					<td >
						{{$element->sdt}}
					</td>
					<td >
						{{$element->diachi}}
					</td>
					<td >
						@if($element->httt==1)
							Online
						@elseif($element->httt==0)
							Trực tiếp
						@endif
					</td>
					<td>
						<button type="button" class="btn btn-danger	">Đã hủy <a class="glyphicon glyphicon-remove"></a></button>
					</td>
				</tr>
			@endforeach	
			<tr>
				<td colspan="10" class="text-center" style="text-align: center;">
					{{$order->links()}}
				</td>
			</tr>	
		</tbody>
	</table>

@endsection