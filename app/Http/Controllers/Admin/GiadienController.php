<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\GiadienAddRequest;


use DB;
use App\Models\Giadien;
class GiadienController extends Controller
{
    public function getGiadienAdd(){
    	return view ('admin.Module.giadien.add');
    }
    public function postGiadienAdd(GiadienAddRequest $request){

        $giadien = new Giadien;
        $between =   $request->sltDenKW - $request->sltTuKW;
        if($between >0){
            $giadien->mabac = $request->txtMabac;
            $giadien->tenbac = $request->txtTenbac;
            $giadien->tukw = $request->sltTuKW;
            $giadien->denkw = $request->sltDenKW;
            $giadien->dongia = $request->txtDongia;
            $giadien->ngayapdung = $request->ngayapdung;
            $giadien->created_at = new \DateTime();
            $giadien->save(); 
            return redirect()->route('getGiadienList')->with('success', 'Thêm thành công');
    }else{
        return redirect()->back()->with('nosuccess', 'Số điện cuối phải lớn hơn số đầu');
    }
    }
    public function getGiadienList(){
         $giadien = Giadien::select()->get()->toArray();
    	//$giadien = DB::table('tt13_giadien')->get()->toArray();
    	return view('admin.Module.giadien.list',['data'=>$giadien]);
    }
}
