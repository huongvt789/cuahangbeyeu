<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Users;
use App\Http\Requests\SaveUsersRequest;
use Illuminate\Support\Facades\Hash; 
class AdminController extends Controller 
{
    public function index(){
    	$admin= Users::paginate(10);
    	return view('admin.qladmin.index',compact('admin'));
    }
    public function add()
    {
    	$model=new Users();
    	$admin=Users::all();
    	return view('admin.qladmin.form',compact('model','admin'));
    }
    public function edit($id)
    {
    	$model=Users::find($id);
    	if(!$model) return view('admin.404');
    	$admin=Users::all();
    	return view('admin.qladmin.edit',compact('model','admin'));
    }
    public function save(SaveUsersRequest $request)
    {
    	if($request->id)
    	{
    		$model=Users::find($request->id);
    		if(!$model) return view('admin.404');
    	}
    	else{
    		$model=new Users();
    	}
    	$model->fill($request->all());
        $model->password=Hash::make($request->password);
        /*$model->is_menu= $request->is_menu ==1 ? 1: 0 ;*/
    	//upload file
    	if($request->hasFile('avatar')){
    	    $file=$request->file('avatar');
    	    $fileName=uniqid()."-".$file->getClientOriginalName();
    	    $file->storeAs('uploads',$fileName);
    	    $model->avatar='uploads/'.$fileName;
        }
        $model->save();
    	return redirect(route('qladmin.index'));
    }
    public function remove($id){
    	$admin=Users::find($id);
    	if(!$admin) return view('admin.404');
    	$admin->delete();
    	return redirect(route('qladmin.index'));
    }
    public function checkName(Request $request){
        $admin=Users::where('email',$request->email)->first();
        if($admin && $admin->id == $request->id)
        {
            return response()->json(true);
        }
        $result=$admin==false?true:false;
        return response()->json($result);
    }
}
