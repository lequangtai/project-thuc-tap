<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DienkeAddRequest;
use DB;
use App\Models\Khachhang;
use App\Models\Dienke;
class DienkeController extends Controller
{
    public function getDienkeAdd(){
        $data =Khachhang::select('id','tenkh')->get()->toArray();
    	
    	return view('admin.Module.dienke.add',['data'=>$data]);
    }
    public function postDienkeAdd(DienkeAddRequest $request){
        $dienke = new Dienke;
        $dienke->ngaysx = $request->ngaysx;
        $dienke->ngaylap = $request->ngaylap;
        $dienke->mota = $request->txtMota;
        $dienke->trangthai = $request->rdoPublic;
        $dienke->khachhang_id = $request->sltDK;
        $dienke->created_at = new \DateTime();
        $dienke->save(); 
        return redirect()->route('getDienkeList')->with('success', 'Thêm thành công');
    }
   public function getDienkeList(){
    $data=Dienke::with('khachhang')->get()->toArray();
    return view('admin.Module.dienke.list',['data1'=>$data]);
   }
}
