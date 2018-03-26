<?php

namespace App;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='product';
    public function limitTitle($number){
    	$text= str_limit($this->title,$number,'...');
    	return $text;
    }
    public function limitDesc($number){
    	$text= str_limit($this->short_desc,$number,'...');
    	return $text;
    }
   
}
