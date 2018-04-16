<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Producer extends Model
{
    protected $table = "producer";
    public $timestamps = false;

    public function sanpham(){
    	return $this->hasMany('App\Product','idProducer','product_id');
    }
}
