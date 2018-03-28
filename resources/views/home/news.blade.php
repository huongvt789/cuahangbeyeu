@extends('layout.massive')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <!--product option-->
            <div class="row">
                @foreach ($news as $p)
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
                            <h5><a href="{{route('new.detail',['newSlug'=>$p->slug])}}">{{$p->n_name}}</a></h5>
                        </div>
                        <div class="product-price">
                            {{$p->limitDesc(120)}}
                        </div>
                    </div>
                    <!--product list-->
                </div>
                @endforeach
                

                <div class="text-center col-md-12">
                    <ul class="pagination custom-pagination">
                        {{$news->links()}}
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



            <!--top rated product-->
            <div class="widget">
                <div class="heading-title-alt text-left heading-border-bottom">
                    <h6 class="text-uppercase">Top Rated News</h6>
                </div>
                @php
                    $newMenu=App\News::Where('n_hotnews',0)->get();
                @endphp
                <ul class="widget-latest-post">
                    @foreach($newMenu as $n_hot)
                    <li>
                        <div class="thumb">
                            <a href="{{url(App\News::NEWS_URL.$p->slug)}}">
                                <img src="{{asset('massive/img/product/4.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="w-desk">
                            <a href="#">{{$n_hot->limitName(40)}}</a>
                            <div class="price">{{$n_hot->limitDesc(100)}}</div>
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