@extends('layout.massive')
@section('content')
<div class="container">
    @php
        $product=App\Product::paginate(9);
    @endphp
    <h1>{{$cate->c_name}}</h1>
        @foreach ($product as $p)
         <div class="row">
                @php
                    $cate=$p->getProduct();
                @endphp
                <div class="col-md-4">
                    <!--product list-->
                    <div class="product-list">
                        <div class="product-img">
                            <a href="#">
                                <img src="{{asset('massive/img/product/1.jpg')}}" alt="" />
                            </a>
                            <a href="#">
                                <img src="{{asset('massive/img/product/1-alt.jpg')}}" alt="" />
                            </a>
                            
                        </div>
                        <div class="product-title">
                            <h5><a href="#">{{$p->p_name}}</a></h5>
                        </div>
                        <div class="product-price">
                            {{$p->p_price}}
                        </div>
                        <div class="product-btn">
                            <a href="#" class="btn btn-extra-small btn-dark-border  "><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div>
                    </div>
                    <!--product list-->
                </div>
                @endforeach
                

                <div class="text-center col-md-12">
                    <ul class="pagination custom-pagination">
                        {{$prod->links()}}
                    </ul>
                </div>

            </div>
        </div>
                    
</div>
@endsection