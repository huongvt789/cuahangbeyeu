<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class c_newsController extends Controller
{
    //list news
    public function list_news(){
    	// lấy các bản ghi của tbl news
    	$data["arr"] = DB::table("news")->orderBy("n_id","desc")->paginate(7);
    	return view("admin.news.index",$data);
    }
    //edit
    public function edit(Request $request, $id){
    	// lấy bản ghi có id truyền vào
    	$data["arr"] = DB::table("news")->where("n_id","=",$id)->first();
    	return view('admin.news.add_edit_news',$data);
    }
    //do edit
    public function do_edit(Request $request,$id){
    	$n_name = $request->get('n_name');
    	$n_description = $request->get('n_description');
    	$n_content = $request->get('n_content');
    	$n_hotnews = $request->get('n_hotnews')!=""?1:0;
    	$n_img = "";
        $author = $request->get("author");
        $slug = $request->get("slug");
    	//update bản ghi có id truyền vào
    	DB::table("news")->where("n_id","=",$id)->update(array("n_name"=>$n_name,"n_description"=>$n_description,"n_content"=>$n_content,"n_hotnews"=>$n_hotnews,"author"=>$author,"slug"=>$slug));
    	//kiểm tra việc upload file
    	if($request->hasFile("n_img")){
    		// lấy ảnh cũ và thực hiện xóa ảnh
    		$old_img = DB::table("news")->where("n_id","=",$id)->select("n_img","n_id")->first();
    		if (file_exists('upload/news/'.$old_img->n_img)) {
    			# code...
    			unlink('upload/news/'.$old_img->n_img);
    		}
    		// lấy tên ảnh
    		$n_img = $request->file('n_img')->getClientOriginalName();
    		$n_img = time().$n_img;
    		// thực hiện việc upload ảnh
    		$request->file("n_img")->move('upload/news',$n_img);
    		//update bản ghi
    		DB::table("news")->where("n_id","=",$id)->update(array("n_img"=>$n_img));
    	}
    	//lấy biến page từ url
    	$page = $request->get("page");
    	//quay lại trang tin tức
    	return redirect(url('admin/news?page='.$page));

    }
    //add
    public function add(){
    	return view('admin.news.add_edit_news');
    }

    public function do_add(Request $request){
    	$n_name = $request->get('n_name');
        $n_description = $request->get('n_description');
        $n_content = $request->get('n_content');
        $n_hotnews = $request->get('n_hotnews')!=""?1:0;
        $n_img = "";
        $author = $request->get("author");
        $slug = $request->get("slug");
    	//kiểm tra việc upload file
    	if ($request->hasFile('n_img')) {
    		# code...
    		//lấy tên ảnh
    		$n_img = $request->file('n_img')->getClientOriginalName();
    		$n_img = time().$n_img;
    		//thực hiện việc upload ảnh
    		$request->file('n_img')->move('upload/news',$n_img);
    	}
    	//add ban ghi vao csdl
    	DB::table("news")->insert(array("n_name"=>$n_name,"n_description"=>$n_description,"n_content"=>$n_content,"n_hotnews"=>$n_hotnews,"n_img"=>$n_img,"author"=>$author,"slug"=>$slug));
    	//quay tro lai trang tin tuc
    	return redirect(url('admin/news'));
    }
    public function delete($id){
    	//lấy tên ảnh cũ và thực hiện xóa ảnh
    	$old_img = DB::table("news")->where("n_id","=",$id)->select("n_img","n_id")->first();
    	if (file_exists('upload/news/'.$old_img->n_img)) {
    		# code...
    		@unlink('upload/news/'.$old_img->n_img);
    	}
    	// thực hiện xóa bản ghi
    	DB::table("news")->where("n_id","=",$id)->delete();
    	//quay lại trang tin tức
    	return redirect(url('admin/news'));
    }
}

