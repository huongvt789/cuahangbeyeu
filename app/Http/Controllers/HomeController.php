<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\News;
use DB;
class HomeController extends Controller
{
    public function index(){
    	/*$product=Product::paginate(9);
    	return view('home.index',compact('product'));*/
        $product= new Product;

        /*if(request()->has('sort')){
            $product=$product->orderBy('p_price',request('sort'));
        }*/
        /*$product=$product->paginate(9)->append([
            'sort'=>request(['sort']),
        ]);*/

        $product=Product::paginate(9);
        return view('home.index',compact('product'));
    }
    public function cate($cateSlug){
        $cate=Category::Where('slug',$cateSlug)->first();
        $prod=Product::Where('fk_category_id',$cate->category_id)->paginate(9);
        if(!$cate){ 
            dd('not-found');
        } 
        return view('home.cate-detail',compact('prod','cate'));
    }
    public function newsindex(){
        $news=News::paginate(9);
        return view('home.news',compact('news'));
    }
    public function newsdetail($newSlug){
        $newslug=News::Where('slug',$newSlug)->first();
        $new=News::Where('n_id',$newslug->n_id)->paginate(24);
        if(!$newslug){
            dd('not-found'); 
        } 
        return view('home.new-detail',compact('new','newslug'));
    }
    public function searchProduct(Request $request){
        if(!$request->keyword)
        {
            return redirect(route('homepage'));
        }

        $keyword=$request->keyword;
        $product=Product::Where('p_name','like',"%$keyword%")->paginate(9);
        $product->withPath("?keyword=$keyword");
        return view('home.search-product',compact('keyword','product'));
    }
    public function filter(Request $request){
        if(!$request->pricefrom||!$request->priceto)
        {
            return redirect(route('homepage'));
        }
        // $priceto=$request->priceto;
        // $pricefrom=$request->pricefrom; 
         $priceto=5;
         $pricefrom=10;
         $a = [5,10];
        // $product=Product::whereBetween('p_price',[ $priceto, $pricefrom])->toSql();
        $users = DB::table('product')
                    ->whereBetween('p_price',$a)->toSql();
        dd($users);
        return view('home.search-filter',compact('priceto','product','priceform'));
    }
}
