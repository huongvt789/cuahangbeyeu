<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class producerController extends Controller
{
    //hiển thị danh sách các danh mục tin tức
    public function list_producer(){
    	$data["arr"] = DB::table("producer")->orderBy("producer_id","desc")->paginate(4);
    	//gọi view và truyền dữ liệu ra view
    	return view("admin.producer.index",$data);
    }
    //add edit
    public function add_edit_producer(Request $request){
    	// lấy biến act để phân biệt add hay edit
    	$act = $request->get('act');
    	switch ($act) {
    		case 'edit':
    			# code...
    			$id = $request->get("id");
    			$name = $request->get("name");
    			$phone = $request->get("phone");
    			$address = $request->get("address");
    			$email = $request->get("email");
    			//update bản ghi có id truyền vào
    			DB::table('producer')->where('producer_id','=',$id)->update(array('name'=>$name,'phone'=>$phone,'address'=>$address,'email'=>$email));
    			//hoặc dùng cách update bằng câu lệnh sql
    			//DB::update('update producer set c_name='$c_name' where producer_id=$id );
    			//di chuyển đến trang producer(de bỏ ?act...)
    			return redirect(url('admin/producer'));
    			break;
    		case 'add':
    			# code...
    			$name = $request->get("name");
    			$phone = $request->get("phone");
    			$address = $request->get("address");
    			$email = $request->get("email");
    			//insert bản ghi có id truyền vào
    			DB::table('producer')->insert(array('name'=>$name,'phone'=>$phone,'address'=>$address,'email'=>$email));
    			//di chuyển đến trang producer(de bỏ ?act...)
    			return redirect(url('admin/producer'));
    			break;
    		default:
    			# code...
    			break;
    	}
    	
    }
    //delete
    public function delete($id){
    	//xóa bản ghi có id truyền vào
    	DB::table('producer')->where("producer_id","=",$id)->delete();
    	return redirect(url('admin/producer'));
    }
}
