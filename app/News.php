<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table='news';
    const NEWS_URL="news/";
    public $fillable=['slug'];
    public function limitName($number){
        $text= str_limit($this->n_name,$number,'...');
        return $text;
    }
    public function limitDesc($number){
        $text= str_limit($this->n_description,$number,'...');
        return $text;
    }
}
