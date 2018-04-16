<?php 

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    public function getDanhSach(){
    	$category = Category::paginate(5);
    	return view('admin.category.danhsach',["category"=>$category]);
    }

    public function getThem(){
    	return view('admin.category.them');
    }

    public function postThem(Request $request){
    	$this->validate($request,
    		[
    			"c_name" => "required|unique:category,c_name|min:3|max:32"
    		],
    		[
    			"c_name.required" => "Bạn chưa nhập tên loại sản phẩm",
    			"c_name.unique" => "Tên loại sản phẩm đã tồn tại",
    			"c_name.min" => "Tên loại sản phẩm phải có ít nhất 3 kí tự",
    			"c_name.max" => "Tên loại sản phẩm có độ dài tối đa 32 kí tự"
    		]
    	);

    	$category = new Category;
    	$category->c_name = $request->c_name;
    	$category->slug = changeTitle($request->c_name);

    	// $category->save();
    	// return redirect('admin/category/them')->with('thongbao','Thêm thành công');
    }

    public function getSua($id){
    	$category = Category::find($id);
    	return view('admin.category.sua',["category"=>$category]);
    }

    public function postSua(Request $request, $id){
    	$this->validate($request,
    		[
    			"c_name" => "required|unique:category,c_name|min:3|max:32"
    		],
    		[
    			"c_name.required" => "Bạn chưa nhập tên sản phẩm",
    			"c_name.unique" => "Tên loại sản phẩm đã tồn tại",
    			"c_name.min" => "Tên loại sản phẩm phải có ít nhất 3 kí tự",
    			"c_name.max" => "Tên loại sản phẩm có độ dài tối đa 32 kí tự"
    		]
    	);
    	$category = Category::find($id);
    	$category->c_name = $request->c_name;
    	$category->slug = changeTitle($request->c_name);

    	$category->save();
    	return redirect('admin/category/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getXoa($id){
    	$category = Category::find($id);
    	$category->delete();
    	return redirect('admin/category/danhsach')->with('thongbao',"Xóa thành công");
    }
}
