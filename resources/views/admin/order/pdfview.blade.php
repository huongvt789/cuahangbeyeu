<html lang="en" class="no-js">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1" name="viewport"/>
		<meta content="" name="description"/>
		<meta content="" name="author"/>
	</head>
	<body>
		<div>
			<h1 style="text-align: center; color: red;">Thong tin hoa don</h1>
		</div>
		<div class="col-md-12">
		<table style="width: 500px;">
			<tr >
				<td style="font-size: large;" >Ma hoa don</td>
				<td style="font-size: large; margin-left: 50px;" >{{$model->order_id}}</td>
			</tr>
			<tr>
				<td style="font-size: large;">Ten khach hang</td>
				<td style="font-size: large;">{{$model->ten}}</td>
			</tr>
			<tr>
				<td style="font-size: large;">So dien thoai</td>
				<td style="font-size: large;">{{$model->sdt}}</td>
			</tr>
			<tr>
				<td style="font-size: large;">Dia chi</td>
				<td style="font-size: large;">{{$model->diachi}}</td>
			</tr>
			<tr>
				<td style="font-size: large;">Ngay mua</td>
				<td style="font-size: large;">{{$model->ngaymua}}</td>
			</tr>
			<tr>
				<td style="font-size: large;">Tong so tien cua hoa don</td>
				<td style="font-size: large;">{{$model->thanhtien}}</td>
			</tr>
			<tr>
				<td style="font-size: large;">Hinh thuc thanh toan</td>
				<td style="font-size: large;">{{$model->httt==1?"Online":"Khi giao hàng"}}</td>
			</tr>
		</table>
		</div>
	</body>
</html>