<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Khachhang;
use App\Models\Dienke;
use App\Models\Hoadon;
use DB;
use Carbon\Carbon;
class TracuuController extends Controller
{
    public function index()
    {
      return view('admin.module.tracuu.main');
    }
    public function nhaptimkh()
    {
      return view('admin.module.tracuu.tckhachhang.timkiem');
  	}
  	public function timkh(Request $request){
      $tukhoa = $request->tukhoa;
      $tukhoa1 = $request->sltQuan;
      $tukhoa2 = $request->phuong;
      $data = Khachhang::where('tenkh', 'like', "%$tukhoa%")->where('quan', 'like', "%$tukhoa1%")->where('phuong', 'like', "%$tukhoa2%")->get();
      return view('admin.module.tracuu.tckhachhang.dstim',['data'=>$data]);
  	}
    


    public function nhaptimdk(Request $request)
    {
      return view('admin.module.tracuu.tcdienke.timkiem');
    }
    public function timdk(Request $request)
    {
      $tukhoa1 = $request->sltQuan;
      $data = Dienke::with('khachhang')->where('trangthai', 'like', "%$tukhoa1%")->get();
      return view('admin.module.tracuu.tcdienke.dstim',['data'=>$data]);
    }
   
    public function nhaptimhd(Request $request)
    {
      $data1 = Hoadon::with('dienke.khachhang')->where('trangthai','Chưa thanh toán')->whereMonth('ngaylaphd', '<=', Carbon::today()->addDays(-29))->get()->toArray();
       return view('admin.module.tracuu.tccongno.timkiem');
    }
    public function timhd(Request $request)
    {
      $tukhoa1 = $request->sltQuan;
      $data =Hoadon::with('dienke.khachhang')->where('trangthai', 'like', "%$tukhoa1%")->get()->toArray();
      // $data1 = Hoadon::with('dienke.khachhang')->where('trangthai','Chưa thanh toán')->whereMonth('ngaylaphd', '<=', Carbon::today()->addDays(-29))->get()->toArray();
      // echo "<pre>";
      // print_r($data1);
      //  echo "</pre>";
    return view('admin.module.tracuu.tccongno.dstim', ['data'=>$data]);
  }
  public function nohoai()
    {
      $data1 = Hoadon::with('dienke.khachhang')->where('trangthai','Chưa thanh toán')->whereMonth('ngaylaphd', '<=', Carbon::today()->addDays(-29))->get()->toArray();
       return view('admin.module.tracuu.tccongno.nohoai',['data1'=>$data1]);
    }
}
