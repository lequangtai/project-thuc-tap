<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\KhachhangAddRequest;
use App\Http\Requests\KhachhangEditRequest;
use App\Models\Khachhang;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
//use DateTime, Auth;
use App\Models\News;
use App\Models\Cate;
use App\Models\Hoadon;
use App\Models\Dienke;
use App\Models\Giadien;
use DB;
use Carbon\Carbon;
class dangnhapController extends Controller
{

  public function getdshoadon()
    {
        $data = Dienke::with(
                              array('khachhang','hoadon'=>function($tudat){
                              $tudat->select();})
                            )->select()->get()->toArray();
       return view('user.pages.HDDT.list',['data'=>$data]);  
    }

    public function postdangnhap(Request $request){
      $tenkh=$request->txtUser;
      $matkhau=$request->txtPass;
      $user=Khachhang::where('tenkh','=',$tenkh)->where('matkhau','like',$matkhau)->first();
      if(($user['tenkh']==$tenkh) && ($user['matkhau']==$matkhau)){
        $data=Khachhang::where('tenkh','=',$tenkh)->where('matkhau','like',$matkhau)->with('dienkekh.hoadon')->get()->toArray();
       return view('user.pages.HDDT.list',['data'=>$data]);  
      }else {
        return redirect()->route('getIndex')->with(['flash_level' => 'result_msg', 'flash_message'=>'Thông tin đăng nhập sai hoặc tài khoản không tồn tại!']);
      }

    }

     public function postdangnhapXTTKH(Request $request){
      $tenkh=$request->txtUser;
      $matkhau=$request->txtPass;
      $user=Khachhang::where('tenkh','=',$tenkh)->where('matkhau','like',$matkhau)->first();
      if(($user['tenkh']==$tenkh) && ($user['matkhau']==$matkhau)){
        $data=Khachhang::where('tenkh','=',$tenkh)->where('matkhau','like',$matkhau)->with('dienkekh.hoadon')->get();
        return view('user.pages.TTKH.xemTTKH',['data'=>$data]);
       //return view('user.pages.HDDT.list',['data'=>$data]);  
      }else {
        return redirect()->route('getTTKH')->with(['flash_level' => 'result_msg', 'flash_message'=>'Thông tin đăng nhập sai hoặc tài khoản không tồn tại!']);
      }

    }

     public function postdangnhapXTTDK(Request $request){
      $tenkh=$request->txtUser;
      $matkhau=$request->txtPass;
      $user=Khachhang::where('tenkh','=',$tenkh)->where('matkhau','like',$matkhau)->first();
      if(($user['tenkh']==$tenkh) && ($user['matkhau']==$matkhau)){
        $data = DB::table('tt13_dienke')
            ->leftJoin('tt13_khachhang', 'tt13_dienke.khachhang_id', '=', 'tt13_khachhang.id')
            ->where('tenkh','=',$tenkh)->where('matkhau','like',$matkhau)
            ->get();
        return view('user.pages.TTKH.xemTTdienke',['data'=>$data]);
      }else {
         return redirect()->route('getTTDK')->with(['flash_level' => 'result_msg', 'flash_message'=>'Thông tin đăng nhập sai hoặc tài khoản không tồn tại!']);
      }

    }
   
   
    public function getinhoadon($id)
    {
      $gia1= Giadien::select()->where('mabac',1)->Where('ngayapdung','<=',Carbon::now())->get()->toArray();
      $gia2= Giadien::select()->where('ngayapdung','<=',Carbon::now())->Where('mabac',2)->get()->toArray();
      $gia3= Giadien::select()->where('ngayapdung','<=',Carbon::now())->Where('mabac',3)->get()->toArray();
      $gia4= Giadien::select()->where('ngayapdung','<=',Carbon::now())->Where('mabac',4)->get()->toArray();
      $gia5= Giadien::select()->where('ngayapdung','<=',Carbon::now())->Where('mabac',5)->get()->toArray();
      $gia6= Giadien::select()->where('ngayapdung','<=',Carbon::now())->Where('mabac',6)->get()->toArray();
        foreach ($gia1 as $item1)
        {
            $tien1= $item1["dongia"];
            $tukw1= $item1["tukw"];
            $denkw1= $item1["denkw"];
        }
        foreach ($gia2 as $item2)
        {
            $tien2= $item2["dongia"];
            $tukw2= $item2["tukw"];
            $denkw2= $item2["denkw"];
        }
        foreach ($gia3 as $item3)
        {
            $tien3= $item3["dongia"];
            $tukw3= $item3["tukw"];
            $denkw3= $item3["denkw"];
        }
        foreach ($gia4 as $item4)
        {
            $tien4= $item4["dongia"];
            $tukw4= $item4["tukw"];
            $denkw4= $item4["denkw"];
        }
        foreach ($gia5 as $item5)
        {
            $tien5= $item5["dongia"];
            $tukw5= $item5["tukw"];
            $denkw5= $item5["denkw"];
        }
        foreach ($gia6 as $item6)
        {
            $tien6= $item6["dongia"];
            $tukw6= $item6["tukw"];
            $denkw6= $item6["denkw"];
        }
      $data = new Hoadon;
      $abc = $data->with(
                          array('dienke'=>function($tudat){
                          $tudat->select();})
                        )->select()->where('id',$id)->get()->toArray();
        foreach ($abc as $key => $value) 
        {
          foreach ($value["dienke"] as $ahuhu) 
          {
            $data1 = new Dienke;
            $abc1 = $data1->with(
                                  array('khachhang'=>function($tudat){
                                  $tudat->select();})
                                )->select()->where('id',$ahuhu["khachhang_id"])->get()->toArray();
            
            if($ahuhu["dntt"] >=$tukw1 && $ahuhu["dntt"] <=$denkw1){
            
            $zxc=array(
                      'kw1'=>$ahuhu["dntt"] - $tukw1,
                      'kw2'=>'',
                      'kw3'=>'',
                      'kw4'=>'',
                      'kw5'=>'',
                      'kw6'=>'',
                      );
            $zxc1=array(
                      'gia1'=>number_format($tien1,0,',','.'),
                      'gia2'=>'',
                      'gia3'=>'',
                      'gia4'=>'',
                      'gia5'=>'',
                      'gia6'=>'',
                      );
            $zxc2=array(
                      'ttien1'=>number_format($tien1 * ($ahuhu["dntt"] - $tukw1),0,',','.') ,
                      'ttien2'=>'',
                      'ttien3'=>'',
                      'ttien4'=>'',
                      'ttien5'=>'',
                      'ttien6'=>'',
                      );
              $data3=array(
                $data1= Giadien::select()->where('mabac',1)->get()->toArray(),
                );
            }
            elseif($ahuhu["dntt"] >=$tukw2 && $ahuhu["dntt"] <=$denkw2){
              $zxc=array(
                      'kw1'=>$denkw1 - $tukw1,
                      'kw2'=>$ahuhu["dntt"] - $denkw1,
                      'kw3'=>'',
                      'kw4'=>'',
                      'kw5'=>'',
                      'kw6'=>'',
                      );
              $zxc1=array(
                      'gia1'=>number_format($tien1,0,',','.'),
                      'gia2'=>number_format($tien2,0,',','.'),
                      'gia3'=>'',
                      'gia4'=>'',
                      'gia5'=>'',
                      'gia6'=>'',
                      );
              $zxc2=array(
                      'ttien1'=>number_format($tien1 * ($denkw1 - $tukw1),0,',','.') ,
                      'ttien2'=>number_format($tien2 * ($ahuhu["dntt"] - $denkw1),0,',','.'),
                      'ttien3'=>'',
                      'ttien4'=>'',
                      'ttien5'=>'',
                      'ttien6'=>'',
                      );
              $data3=array(
                $data1= Giadien::select()->where('mabac',1)->get()->toArray(),
               $data2= Giadien::select()->where('mabac',2)->get()->toArray()
                );
            }
            elseif($ahuhu["dntt"] >=$tukw3 && $ahuhu["dntt"] <=$denkw3){
                  $zxc=array(
                      'kw1'=>$denkw1 - $tukw1,
                      'kw2'=>$denkw2 - $denkw1,
                      'kw3'=>$ahuhu["dntt"] - $denkw2,
                      'kw4'=>'',
                      'kw5'=>'',
                      'kw6'=>'',
                      );
                  $zxc1=array(
                      'gia1'=>number_format($tien1,0,',','.'),
                      'gia2'=>number_format($tien2,0,',','.'),
                      'gia3'=>number_format($tien3,0,',','.'),
                      'gia4'=>'',
                      'gia5'=>'',
                      'gia6'=>'',
                      );
                  $zxc2=array(
                      'ttien1'=>number_format($tien1 * ($denkw1 - $tukw1),0,',','.') ,
                      'ttien2'=>number_format($tien2 * ($denkw2 - $denkw1),0,',','.'),
                      'ttien3'=>number_format($tien3 * ($ahuhu["dntt"] - $denkw2),0,',','.'),
                      'ttien4'=>'',
                      'ttien5'=>'',
                      'ttien6'=>'',
                      );
              $data3=array(
                $data1= Giadien::select()->where('mabac',1)->get()->toArray(),
               $data2= Giadien::select()->where('mabac',2)->get()->toArray(),
               $data3= Giadien::select()->where('mabac',3)->get()->toArray()
                );
            }
            elseif($ahuhu["dntt"] >=$tukw4 && $ahuhu["dntt"] <=$denkw4){
              $zxc1=array(
                      'gia1'=>number_format($tien1,0,',','.'),
                      'gia2'=>number_format($tien2,0,',','.'),
                      'gia3'=>number_format($tien3,0,',','.'),
                      'gia4'=>number_format($tien4,0,',','.'),
                      'gia5'=>'',
                      'gia6'=>'',
                      );
               $zxc=array(
                      'kw1'=>$denkw1 - $tukw1,
                      'kw2'=>$denkw2 - $denkw1,
                      'kw3'=>$denkw3 - $denkw2,
                      'kw4'=>$ahuhu["dntt"] - $denkw3,
                      'kw5'=>'',
                      'kw6'=>'',
                      );
               $zxc2=array(
                      'ttien1'=>number_format($tien1 * ($denkw1 - $tukw1),0,',','.') ,
                      'ttien2'=>number_format($tien2 * ($denkw2 - $denkw1),0,',','.'),
                      'ttien3'=>number_format($tien3 * ($denkw3 - $denkw2),0,',','.'),
                      'ttien4'=>number_format($tien4 * ($ahuhu["dntt"] - $denkw3),0,',','.'),
                      'ttien5'=>'',
                      'ttien6'=>'',
                      );
              $data3=array(
                    
              $data1= Giadien::select()->where('mabac',1)->get()->toArray(),
               $data2= Giadien::select()->where('mabac',2)->get()->toArray(),
               $data3= Giadien::select()->where('mabac',3)->get()->toArray(),
               $data4= Giadien::select()->where('mabac',4)->get()->toArray()
                );
            }
            elseif($ahuhu["dntt"] >=$tukw5 && $ahuhu["dntt"] <=$denkw5){
              $zxc1=array(
                      'gia1'=>number_format($tien1,0,',','.'),
                      'gia2'=>number_format($tien2,0,',','.'),
                      'gia3'=>number_format($tien3,0,',','.'),
                      'gia4'=>number_format($tien4,0,',','.'),
                      'gia5'=>number_format($tien5,0,',','.'),
                      'gia6'=>'',
                      );
               $zxc=array(
                      'kw1'=>$denkw1 - $tukw1,
                      'kw2'=>$denkw2 - $denkw1,
                      'kw3'=>$denkw3 - $denkw2,
                      'kw4'=>$denkw4 - $denkw3,
                      'kw5'=>$ahuhu["dntt"] - $denkw4,
                      'kw6'=>'',
                      );
              $zxc2=array(
                      'ttien1'=>number_format($tien1 * ($denkw1 - $tukw1),0,',','.') ,
                      'ttien2'=>number_format($tien2 * ($denkw2 - $denkw1),0,',','.'),
                      'ttien3'=>number_format($tien3 * ($denkw3 - $denkw2),0,',','.'),
                      'ttien4'=>number_format($tien4 * ($denkw4 - $denkw3),0,',','.'),
                      'ttien5'=>number_format($tien5 * ($ahuhu["dntt"] - $denkw4),0,',','.'),
                      'ttien6'=>'',
                      );
              $data3=array(
                    $data1= Giadien::select()->where('mabac',1)->get()->toArray(),
                    $data2= Giadien::select()->where('mabac',2)->get()->toArray(),
                    $data3= Giadien::select()->where('mabac',3)->get()->toArray(),
                    $data4= Giadien::select()->where('mabac',4)->get()->toArray(),
                    $data5= Giadien::select()->where('mabac',5)->get()->toArray()
                );
            }
            elseif($ahuhu["dntt"] >=$tukw6 ){
              $zxc1=array(
                      'gia1'=>number_format($tien1,0,',','.'),
                      'gia2'=>number_format($tien2,0,',','.'),
                      'gia3'=>number_format($tien3,0,',','.'),
                      'gia4'=>number_format($tien4,0,',','.'),
                      'gia5'=>number_format($tien5,0,',','.'),
                      'gia6'=>number_format($tien6,0,',','.'),
                      );
               $zxc=array(
                      'kw1'=>$denkw1 - $tukw1,
                      'kw2'=>$denkw2 - $denkw1,
                      'kw3'=>$denkw3 - $denkw2,
                      'kw4'=>$denkw4 - $denkw3,
                      'kw5'=>$denkw5 - $denkw4,
                      'kw6'=>$ahuhu["dntt"] - $denkw5,
                      );
              $zxc2=array(
                      'ttien1'=>number_format($tien1 * ($denkw1 - $tukw1),0,',','.') ,
                      'ttien2'=>number_format($tien2 * ($denkw2 - $denkw1),0,',','.'),
                      'ttien3'=>number_format($tien3 * ($denkw3 - $denkw2),0,',','.'),
                      'ttien4'=>number_format($tien4 * ($denkw4 - $denkw3),0,',','.'),
                      'ttien5'=>number_format($tien5 * ($denkw5 - $denkw4),0,',','.'),
                      'ttien6'=>number_format($tien6 * ($ahuhu["dntt"] - $denkw5),0,',','.'),
                      );
              $data3=array(
                    $data1= Giadien::select()->where('mabac',1)->get()->toArray(),
                    $data2= Giadien::select()->where('mabac',2)->get()->toArray(),
                    $data3= Giadien::select()->where('mabac',3)->get()->toArray(),
                    $data4= Giadien::select()->where('mabac',4)->get()->toArray(),
                    $data5= Giadien::select()->where('mabac',5)->get()->toArray()
                );
            }
          }
        }
      return view('user.pages.HDDT.xemHDDT',['data3'=>$data3,'abc1'=>$abc1,'abc'=>$abc,'zxc'=>$zxc,'zxc1'=>$zxc1,'zxc2'=>$zxc2]);
    }
    public function getingiaybao($id)
    {
      $data = new Hoadon;
      $abc = $data->with(
                          array('dienke'=>function($tudat){
                          $tudat->select();})
                        )->select()->where('id',$id)->get()->toArray();
        foreach ($abc as $key => $value) 
        {
          foreach ($value["dienke"] as $ahuhu) 
          {
            $data1 = new Dienke;
            $abc1 = $data1->with(
                                  array('khachhang'=>function($tudat){
                                  $tudat->select();})
                                )->select()->where('id',$ahuhu["khachhang_id"])->get()->toArray();
            
          }
        }
  
      return view('user.pages.HDDT.xemgiaybao',['abc1'=>$abc1,'abc'=>$abc]);
    }  

              
   
	public function getdangxuat(){
		Auth::logout();
		// return redirect()->route('');
    return view('user.pages.index');
	}

}
