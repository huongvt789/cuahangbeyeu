<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Producer;
use App\Product;

class SanPhamController extends Controller
{
    public function getDanhSach(){
    	$sanpham = Product::paginate(5);
     	return view('admin.product.danhsach',["sanpham"=>$sanpham]);
    }

    public function getThem(){
    	$loaisp = Category::all();
    	$ncc = Producer::all();
    	return view('admin.product.them',["loaisp"=>$loaisp,"ncc"=>$ncc]);
    }

    public function postThem(Request $request){
    	$this->validate($request,
    		[
    			"p_name" => "required|unique:product,p_name|min:3",
    			"p_description" => "required",
    			"p_content" => "required",
    			"p_img" => "required",
    			"p_price" => "required",
    			"fk_category_id" => "required",
    			"idProducer" => "required"
    		],
    		[
    			"p_name.required" => "Bạn chưa nhập tên sản phẩm",
    			"p_name.unique" => "Tên sản phẩm đã tồn tại",
    			"p_name.min" => "Tên sản phẩm có độ dài tối thiểu là 3 kí tự",
    			"p_description.required" => "Bạn chưa nhập mô tả",
    			"p_content.required" => "Bạn chưa nhập nội dung",
    			"p_img.required" => "Bạn chưa chọn ảnh",
    			"p_price.required" => "Bạn chưa nhập giá",
    			"fk_category_id.required" => "Bạn chưa nhập loại sản phẩm",
    			"idProducer.required" => "Bạn chưa nhập tên nhà cung cấp",
    		]
    	);

    	$sanpham = new Product;

    	$sanpham->p_name = $request->p_name;
    	$sanpham->p_description = $request->p_description;
    	$sanpham->p_content = $request->p_content;
    	$sanpham->p_price = $request->p_price;
    	$sanpham->fk_category_id = $request->fk_category_id;
    	$sanpham->idProducer = $request->idProducer;
        $sanpham->p_hotproduct = $request->p_hotproduct;
;    	if ($request->hasFile('p_img')) {
    		$file = $request->file('p_img');
    		$duoi = $file->getClientOriginalExtension();
    		if ($duoi != "jpg" && $duoi != "png" && $duoi != "jpeg") {
    			return redirect('admin/product/them')->with('loi','Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
    		}
    		$name = $file->getClientOriginalName();
    		$Hinh = str_random(5)."_".$name;
    		// echo $Hinh;
    		while(file_exists($Hinh)){
    			$Hinh = str_random(5)."_".$name;
    		}

    		$file->move("upload/product/",$Hinh);
    		$sanpham->p_img = $Hinh;
    	}

        $sanpham->save();
        return redirect('admin/product/them')->with('thongbao','Thêm thành công');

    }

    public function getSua($id){
        $loaisp = Category::all();
        $ncc = Producer::all();
        $sanpham = Product::find($id);
        return view('admin.product.sua',["sanpham"=>$sanpham,"loaisp"=>$loaisp,"ncc"=>$ncc]);
    }

    public function postSua(Request $request, $id){
        $this->validate($request,
            [
                "p_name" => "required|unique:product,p_name|min:3",
                "p_description" => "required",
                "p_content" => "required",
                "p_price" => "required",
                "fk_category_id" => "required",
                "idProducer" => "required"
            ],
            [
                "p_name.required" => "Bạn chưa nhập tên sản phẩm",
                "p_name.unique" => "Tên sản phẩm đã tồn tại",
                "p_name.min" => "Tên sản phẩm có độ dài tối thiểu là 3 kí tự",
                "p_description.required" => "Bạn chưa nhập mô tả",
                "p_content.required" => "Bạn chưa nhập nội dung",
                "p_price.required" => "Bạn chưa nhập giá",
                "fk_category_id.required" => "Bạn chưa nhập loại sản phẩm",
                "idProducer.required" => "Bạn chưa nhập tên nhà cung cấp",
            ]
        );

        $sanpham = Product::find($id);

        $sanpham->p_name = $request->p_name;
        $sanpham->p_description = $request->p_description;
        $sanpham->p_content = $request->p_content;
        $sanpham->p_price = $request->p_price;
        $sanpham->fk_category_id = $request->fk_category_id;
        $sanpham->idProducer = $request->idProducer;
        $sanpham->p_hotproduct = $request->p_hotproduct;
        if ($request->hasFile('p_img')) {
            $file = $request->file('p_img');
            $duoi = $file->getClientOriginalExtension();
            if ($duoi != "jpg" && $duoi != "png" && $duoi != "jpeg") {
                return redirect('admin/product/them')->with('loi','Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(5)."_".$name;
            // echo $Hinh;
            while(file_exists($Hinh)){
                $Hinh = str_random(5)."_".$name;
            }

            $file->move("upload/product/",$Hinh);
            unlink("upload/product/".$sanpham->p_img);
            $sanpham->p_img = $Hinh;
        }

        $sanpham->save();
        return redirect('admin/product/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getXoa($id){
        $sanpham = Product::find($id);
        $sanpham->delete();

        return redirect('admin/product/danhsach')->with('thongbao','Xóa thành công');
    }
}
