@extends('layout.massive')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-4">
			<div class="img">
				<img src="{{ asset('upload/product/'.$product->p_img) }}" style="max-width: 300px" alt="">
			</div>
		</div>
		<div class="col-xs-12 col-md-6">
			<h2 class="tensp">{{ $product->p_name }}</h2>
			<p>Loại sản phẩm : {{ $product->loaisanpham->c_name }}</p>
			<h2 class="price"> Giá : {{ $product->p_price }}</h2>
			<p>Mô tả : {!! $product->p_description !!}</p>
			<div class="col-md-4">
				<button class="btn btn-info">Cho vào giỏ hàng</button>
			</div>
		</div>
		<div class="col-xs-12 col-md-10">
			<div class="chitiet">
				Chi tiết sản phẩm
			</div>
			<div class="noidung">
				{!! $product->p_content !!}
			</div>
		</div>
		
	</div>
</div>
@endsection

@section('css')
	<style type="text/css" media="screen">
		.tensp{
			font-size: 24px;
            font-weight: 700;
            text-transform: uppercase;
            margin: 0 0 25px;
            padding-bottom: 20px;
            border-bottom: solid 1px #ebebeb;
            color: #464646;
            line-height: 34px; 
		}
		.price{
			color:#77ca64;
		}

		.chitiet{
			width: 150px;
			height: 30px;
			background-color: #77ca64;
			color: white;
			padding: 5px 10px;
    		border: solid 1px #ebebeb;
    		border-bottom: 0;
    		text-transform: uppercase;
		}
	</style>
@endsection