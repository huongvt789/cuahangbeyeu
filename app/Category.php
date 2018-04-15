<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	const CATE_URL="danh-muc/";
    protected $table='category';
    public $timestamps = false;
    protected $primaryKey = 'category_id';
}
