<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $table='product';
    const PRODUCT_URL="product/";
    public $timestamps = false;
    protected $primaryKey = 'product_id';
    public function limitTitle($number){
    	$text= str_limit($this->title,$number,'...');
    	return $text;
    }
    public function limitDesc($number){
    	$text= str_limit($this->short_desc,$number,'...');
    	return $text;
    }

    public function loaisanpham(){
    	return $this->belongsTo('App\Category','fk_category_id');
    }

    public function nhacungcap(){
    	return $this->belongsTo('App\Producer','idProducer','producer_id');
    }
   
}
