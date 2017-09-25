<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dienke extends Model
{
    protected  $table ='tt13_dienke';
    protected $guarded =[];

    public function khachhang(){
    	return $this->belongsTo('App\Models\Khachhang','khachhang_id');
    }
   
    public function hoadon(){	
    	return $this->belongsToMany('App\Models\Hoadon','tt13_cthoadon','dienke_id','hoadon_id','id');
    }
    
}
