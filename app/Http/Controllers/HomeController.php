<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\News;
class HomeController extends Controller
{
    public function index(){
    	$prod=Product::paginate(9);
    	return view('home.index',compact('prod'));
    }
    public function cate($cateSlug){
        $cate=Category::Where('slug',$cateSlug)->first();
        $prod=Product::Where('fk_category_id',$cate->category_id)->paginate(9);
        if(!$cate){
            dd('not-found');
        } 
        return view('home.cate-detail',compact('prod','cate'));
    }
}
