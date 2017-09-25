<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    protected  $table ='tt13_loaitin';
    protected $guarded =[];
    public function news (){
    	return $this->hasMany('App\Models\News','loaitin_id','id');
    }
 
}
