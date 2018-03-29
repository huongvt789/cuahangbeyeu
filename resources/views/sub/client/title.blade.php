<section class="page-title">
    <div class="container">
            <script language="javascript">
                // dinh nghia array
                var arr= new Array();
                arr[0] = "{{asset('assets/banner/anh1.jpg')}}";
                arr[1] = "{{asset('assets/banner/anh2.jpg')}}";
                arr[2] = "{{asset('assets/banner/anh3.jpg')}}";
                arr[3] = "{{asset('assets/banner/anh4.jpg')}}";
                arr[4] = "{{asset('assets/banner/anh5.jpg')}}";
                // tao bien n de luu vi tri cua anh da su dung
                var n=0;
                function slide(){
                    // thay doi anh theo bien n luu vi tri anh
                    document.getElementById("imgslide").setAttribute("src",arr[n]);
                    n++;
                    if(n >= arr.length)
                        n=0;
                }
                // goi ham setInterval de lap lai lien tuc ham slide
                setInterval(slide,7000);
            </script>
            <div id="slide">
                <img title="Cuộc thi ảnh online nhận quà liền tay" style="width: 1150px;height: 350px;margin-top: -30px;margin-bottom: -20px;" src="{{asset('assets/banner/anh1.jpg')}}" id="imgslide">
            </div>
        </div>
</section>