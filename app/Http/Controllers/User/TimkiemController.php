<?php

namespace App\Http\Controllers\User;

// use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserAddRequest;
use App\Http\Requests\UserEditRequest;
use App\Models\User;
use App\Models\News;
use DateTime, Auth;

class TimkiemController extends Controller
{
	public function gettimkiem() {
		return view('user.pages.TK.timkiem');
	}
    public function Timkiem(Request $request){
    $tukhoa = $request->tukhoa;
    
    $news = News::select()->where('title', 'like', "%$tukhoa%" )->orwhere('intro','like', "%$tukhoa%")->take(30)->paginate(6);
   
		    return view('user.pages.TK.timkiem',['news'=>$news]);
	
  }
}
