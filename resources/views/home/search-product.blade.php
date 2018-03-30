@extends('layout.massive')
@section('content')
<div class="container">
    <title>Cửa hàng bé yêu - Mua sữa online</title>
    <div class="row">
        <div class="col-md-9">
            <!--product option-->
            <div class="clearfix m-bot-30 inline-block">

                <div class="pull-left">
                    <form method="post" action="#">
                        <select class="form-control"> 
                            <option>Sort by price: low to high</option>
                            <option>Sort by price: high to low</option>
                        </select>
                    </form>
                </div>

                <div class="pull-left m-top-5 m-left-10">
                    Showing 1–10 of 55 results
                </div>

                <div class="pull-right shop-view-mode">
                    <a href="#"> <i class="fa fa-th-large"></i> 
                    </a>
                    <a href="#"> <i class="fa fa-th-list"></i> 
                    </a>
                </div>

            </div>
            <!--product option-->
            <div class="row">
                @foreach ($product as $p)
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
                        {{$product->links()}}
                    </ul>
                </div>

            </div>
        </div>
        
        <div class="col-md-3 ">
            <!--product category-->
            <div class="widget">
                <div class="heading-title-alt text-left heading-border-bottom">
                    <h6 class="text-uppercase">product category</h6>
                </div>
                @php
                    $cateMenu=App\Category::all();
                @endphp
                <ul class="widget-category">
                    @foreach ($cateMenu as $cmn)
                        <li><a href="{{route('cate.detail',['cateSlug'=>$cmn->slug])}}">{{$cmn->c_name}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <!--product category-->

            <!--price filter-->
            <div class="widget">
                <div class="heading-title-alt text-left heading-border-bottom">
                    <h6 class="text-uppercase">price filter</h6>
                </div>
                <form method="post" action="#">

                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <input type="text" name="price-from" id="price-from" class=" form-control" placeholder="From, $" maxlength="100">
                        </div>

                        <div class="col-xs-12 form-group">
                            <input type="text" name="price-to" id="price-to" class=" form-control" placeholder="To, $" maxlength="100">
                        </div>
                        <div class=" col-xs-12 form-group">
                            <button class="btn btn-small btn-dark-border  btn-transparent">Filter</button>
                        </div>
                    </div>
                </form>
            </div>
            <!--price filter-->


            <!--top rated product-->
            <div class="widget">
                <div class="heading-title-alt text-left heading-border-bottom">
                    <h6 class="text-uppercase">Top Rated Products</h6>
                </div>
                @php
                    $productMenu=App\Product::Where('p_hotproduct',1)->get();
                @endphp
                <ul class="widget-latest-post">
                    @foreach($productMenu as $prdm)
                    <li>
                        <div class="thumb">
                            <a href="#">
                                <img src="{{asset('massive/img/product/4.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="w-desk">
                            <a href="#">{{$prdm->p_name}}</a>
                            <div class="price">{{$prdm->p_price}}</div>
                            <div class="product-cart">
                                <a href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <!--top rated product-->


            <!--product tags-->
            <div class="widget">
                <div class="heading-title-alt text-left heading-border-bottom">
                    <h6 class="text-uppercase">PRODUCT TAGS</h6>
                </div>
                <div class="widget-tags">
                    <a href="#">Accessories</a>
                    <a href="#">Branding</a>
                    <a href="#">Belts</a>
                    <a href="#">Cloth</a>
                    <a href="#">Kids</a>
                    <a href="#">Watch</a>
                    <a href="#">Shoes</a>
                </div>
            </div>
            <!--product tags-->

        </div>

    </div>
</div>
@endsection