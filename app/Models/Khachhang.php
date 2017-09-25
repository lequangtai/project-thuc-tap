<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Khachhang as Authenticatable;
class Khachhang extends Model
{
    protected $table = 'tt13_khachhang';
    protected $guarded =[];
    public function dienkekh ()
    {
    	return $this->hasMany('App\Models\Dienke','khachhang_id');
    }
}
