<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hoadon extends Model
{
    protected  $table ='tt13_hoadon';
    protected $guarded =[];

    public function dienke(){	
    	return $this->belongsToMany('App\Models\Dienke', 'tt13_cthoadon','hoadon_id','dienke_id','id');
    }
   
    
   
}
