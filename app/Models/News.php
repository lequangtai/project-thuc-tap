<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected  $table ='tt13_news';
    protected $guarded =[];

    public function cate(){
    	return $this->belongsTo('App\Models\Cate','loaitin_id');
    }
    
}

