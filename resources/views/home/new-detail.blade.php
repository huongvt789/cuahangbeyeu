@extends('layout.massive')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!--classic image post-->
            <div class="blog-classic">
                @foreach($new as $row)
                <div class="blog-post">
                    <div class="full-width">
                        <img src="assets/img/post/p12.jpg" alt="" />
                    </div>
                    <h4 class="text-uppercase"><a href="{{route('new.detail',['newSlug'=>$row->slug])}}">{{ $row->n_name }}</a></h4>
                    <ul class="post-meta">
                        <li><i class="fa fa-user"></i>posted by <a href="#" style="margin-left: 5px;">  {{$row->author}}</a>
                        </li>
                        <!-- <li><i class="fa fa-folder-open"></i>  <a href="#">lifestyle</a>, <a href="#">travel</a>, <a href="#">fashion</a>
                        </li>
                        <li><i class="fa fa-comments"></i>  <a href="#">4 comments</a>
                        </li> -->
                    </ul>
					<!-- short_desc -->
                    <p>
                    	<strong>{!!$row->n_description!!}</strong>
                    </p>
					<!-- end short_desc -->

					<!-- content -->
                    <p>{!!$row->n_content!!}</p>
					<!-- content -->
                    <!-- <div class="inline-block">
                    
                        <div class="widget-tags">
                            <h6 class="text-uppercase">Tags </h6>
                            <a href="#">Portfolio</a>
                            <a href="#">Design</a>
                            <a href="#">Link</a>
                            <a href="#">Gallery</a>
                            <a href="#">Video</a>
                            <a href="#">Clean</a>
                            <a href="#">Retina</a>
                        </div>
                    </div> -->


                    <div class="clearfix inline-block m-top-50 m-bot-50">
                        <h6 class="text-uppercase">Share this Post </h6>
                        <div class="widget-social-link circle">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--classic image post-->
            @endforeach
        </div>
    </div>
</div>
@endsection