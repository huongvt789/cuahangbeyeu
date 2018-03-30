<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from massive.markup.themebucket.net/shop-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Sep 2017 04:55:09 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="{{asset('massive/img/favicon.png')}}">

    <!-- <title>Cửa hàng bé yêu</title> -->
    <!--include css-->
    @include('sub.client.css')
    <!--end include css-->
</head>

<body>

    <!--  preloader start -->
    <div id="tb-preloader">
        <div class="tb-preloader-wave"></div>
    </div>
    <!-- preloader end -->


    <div class="wrapper">

        <!--header start-->
        @include('sub.client.header')
        <!--header end-->


        <!--page title start-->
        @include('sub.client.title')
        <!--page title end-->

        <!--body content start-->
        <section class="body-content ">

            <div class="page-content product-grid">
                @yield('content')
            </div>


        </section>
        <!--body content end-->

        <!--footer start 1-->
        @include('sub.client.footer')
        <!--footer 1 end-->

    </div>
    <!--include js-->
    @include('sub.client.js')
    <!--end include js-->     
</body>


<!-- Mirrored from massive.markup.themebucket.net/shop-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Sep 2017 04:55:09 GMT -->
</html>
    