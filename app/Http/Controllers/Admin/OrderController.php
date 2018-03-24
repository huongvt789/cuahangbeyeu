<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use PDF;
use Carbon\Carbon;
class OrderController extends Controller
{
    public function index(){
    	$order= Order::where('status',0)->paginate(8);
    	return view('admin.order.index',compact('order'));
    }
    public function pass(){
    	$order= Order::where('status',2)->paginate(8);
    	return view('admin.order.pass',compact('order'));
    }
    public function destroy(){
    	$order= Order::where('status',1)->paginate(8);
    	return view('admin.order.destroy',compact('order'));
    }
    public function update($id)
    {
    	$order=Order::find($id);
    	if(!$order) return view('admin.404');
    	$order->status=2;	
    	$order->save();		
    	return redirect(route('order.pass'));
    }
    public function remove($id){
    	$order=Order::find($id);
    	if(!$order) return view('admin.404');
    	$order->status=1;	
    	$order->save();		
    	return redirect(route('order.destroy'));
    } 
    public function info($id){
        $model=Order::find($id);
        if(!$model) return view('admin.404');
        $order=Order::all();
        return view('admin.order.pdfview',compact('model','order'));

    }
    public function pdfview($id,Request $request)
    {
        $model=Order::find($id);
        $now=Carbon::Now();
        view()->share('model',$model);
        view()->share('now',$now);
        /*if($request->has('download'))
        {*/
            /*dd($model);*/
            $pdf = PDF::loadView('admin.order.pdfview',compact('model'));
            return $pdf->download('pdfview.pdf');
        /*}
        return redirect(route('order.pass'));*/
    }
}
