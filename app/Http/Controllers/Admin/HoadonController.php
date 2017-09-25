<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Hoadon;
use DB;
use App\Models\Khachhang;
use App\Models\Dienke;
use App\Models\Giadien;
use Carbon\Carbon;
use App\Http\Requests\HoadonAddRequest;
class HoadonController extends Controller
{
    public function getHoadonAdd()
    {
    	$data=Dienke::with('khachhang')->get()->toArray();
        return view('admin.Module.hoadon.add',['data'=>$data]);
    }
    public function getHoadonBill($id)
    { 
      return view('admin.Module.hoadon.tinhtien');
    }

    public function postHoadonBill(HoadonAddRequest $request,$id)
    {
      $dienke = Dienke::find($id);

      $data1= Giadien::select()->where('mabac',1)->Where('ngayapdung','<=',Carbon::now())->get()->toArray();
      $data2= Giadien::select()->where('ngayapdung','<=',Carbon::now())->Where('mabac',2)->get()->toArray();
      $data3= Giadien::select()->where('ngayapdung','<=',Carbon::now())->Where('mabac',3)->get()->toArray();
      $data4= Giadien::select()->where('ngayapdung','<=',Carbon::now())->Where('mabac',4)->get()->toArray();
      $data5= Giadien::select()->where('ngayapdung','<=',Carbon::now())->Where('mabac',5)->get()->toArray();
      $data6= Giadien::select()->where('ngayapdung','<=',Carbon::now())->Where('mabac',6)->get()->toArray();
      print_r($data6);
        foreach ($data1 as $item1)
        {
            $tien1= $item1["dongia"];
            $tukw1= $item1["tukw"];
            $denkw1= $item1["denkw"];
        }
        foreach ($data2 as $item2)
        {
            $tien2= $item2["dongia"];
            $tukw2= $item2["tukw"];
            $denkw2= $item2["denkw"];
        }
        foreach ($data3 as $item3)
        {
            $tien3= $item3["dongia"];
            $tukw3= $item3["tukw"];
            $denkw3= $item3["denkw"];
        }
        foreach ($data4 as $item4)
        {
            $tien4= $item4["dongia"];
            $tukw4= $item4["tukw"];
            $denkw4= $item4["denkw"];
        }
        foreach ($data5 as $item5)
        {
            $tien5= $item5["dongia"];
            $tukw5= $item5["tukw"];
            $denkw5= $item5["denkw"];
        }
        foreach ($data6 as $item6)
        {
            $tien6= $item6["dongia"];
            $tukw6= $item6["tukw"];
            $denkw6= $item6["denkw"];
        }
    	$hoadon = new Hoadon;
        $hoadon->ky = $request->txtKy;
        $hoadon->tungay = $request->tungay;
        $hoadon->denngay = $request->denngay;
        $hoadon->chisodau = $request->txtChisodau;
        $hoadon->chisocuoi = $request->txtChisocuoi;
        $hoadon->ngaylaphd = $request->txtngaylaphoadon;
        $hoadon->trangthai =  $request->rdoPublic;
        $hoadon->created_at = new \DateTime();
        $dntt=$hoadon->chisocuoi -$hoadon->chisodau;
        $tongtien=0;
        if($dntt <0)
        {
            return redirect()->route('getHoadonList')->with('error', 'Lỗi rồi bạn ơi');   
	      }
  	    else
  	    {
  	    	  if($dntt >=$tukw1 && $dntt <=$denkw1)
              {
                  $tongtien = $tongtien +($dntt*$tien1);
                  

              }
              elseif ($dntt >= $tukw2 && $dntt <=$denkw2) 
              {
                  $tongtien = (($denkw1-$tukw1)*$tien1)+(($dntt-($denkw1-$tukw1))*$tien2);
                  
              }
              elseif ($dntt >= $tukw3 && $dntt <=$denkw3)
              {
                   $tongtien = (($denkw1-$tukw1)*$tien1)+(($denkw2-$denkw1)*$tien2) +(($dntt-(($denkw1-$tukw1)+($denkw2-$denkw1)))*$tien3);
                   
              }
              elseif ($dntt >= $tukw4 && $dntt <=$denkw4) 
              {
                  $tongtien = (($denkw1-$tukw1)*$tien1)+(($denkw2-$denkw1)*$tien2) +(($denkw3-$denkw2)*$tien3) +(($dntt-(($denkw1-$tukw1)+($denkw2-$denkw1)+($denkw3-$denkw2)))*$tien4);
                  
              }
             elseif ($dntt >= $tukw5 && $dntt <=$denkw5) 
              {
                  $tongtien = (($denkw1-$tukw1)*$tien1)+(($denkw2-$denkw1)*$tien2) +(($denkw3-$denkw2)*$tien3)+(($denkw4-$denkw3)*$tien4) +(($dntt-(($denkw1-$tukw1)+($denkw2-$denkw1)+($denkw3-$denkw2)+($denkw4-$denkw3)))*$tien5);   
              }
              elseif ($dntt >= $tukw6) 
              {
                  $tongtien = (($denkw1-$tukw1)*$tien1)+(($denkw2-$denkw1)*$tien2) +(($denkw3-$denkw2)*$tien3)+(($denkw4-$denkw3)*$tien4)+(($denkw5-$denkw4)*$tien5) +(($dntt-(($denkw1-$tukw1)+($denkw2-$denkw1)+($denkw3-$denkw2)+($denkw4-$denkw3)+($denkw5-$denkw4)))*$tien6);   
              }
              $hoadon->tongtien = $tongtien;
              $hoadon->save();
              DB::table('tt13_cthoadon')->insert
              (
                  [
                      'dntt' => $dntt,
                      'hoadon_id' => $hoadon->id,
                      'dienke_id' =>$dienke->id,
                      'created_at'=>$hoadon->created_at
                  ]
              );
            return redirect()->route('getHoadonList')->with('success', 'Thêm thành công');
  	    }           
    }
    
    public function getHoadonList()
    {
        $data = Dienke::with(
                              array('khachhang','hoadon'=>function($tudat){
                              $tudat->select();})
                            )->select()->get()->toArray();
       return view('admin.Module.hoadon.list',['data'=>$data]);  
    }
    public function getInhoadon($id)
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
        // echo "<pre>";
        // print_r($zxc2);
        // echo "</pre>";
      return view('admin.Module.hoadon.inhd',['data3'=>$data3,'abc1'=>$abc1,'abc'=>$abc,'zxc'=>$zxc,'zxc1'=>$zxc1,'zxc2'=>$zxc2]);
    }
    public function getIngiaybao($id)
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
      return view('admin.Module.hoadon.giaybaodien',['abc1'=>$abc1,'abc'=>$abc]);
    }   
    public function getSuahoadon($id){
     $data = Hoadon::findOrFail($id)->toArray();
     // $khachhang = Khachhang::select('id', 'tenkh')->get()->toArray();
      return view('admin.Module.hoadon.suahoadon', ['data'=>$data]);

    }   

    public function postSuahoadon(Request $request, $id){
      $hoadoncu = Hoadon::findOrFail($id);
      $hoadoncu->ky =  $hoadoncu->ky;
      $hoadoncu->tungay =  $hoadoncu->tungay;
      $hoadoncu->denngay =  $hoadoncu->denngay;
      $hoadoncu->chisodau = $hoadoncu->chisodau;
      $hoadoncu->chisocuoi = $hoadoncu->chisocuoi;
      $hoadoncu->ngaylaphd = $hoadoncu->ngaylaphd;
      $hoadoncu->trangthai =  $request->rdoPublic;
      $hoadoncu->updated_at = new \DateTime();
      $hoadoncu->tongtien =$hoadoncu->tongtien;
      $hoadoncu->save();
            return redirect()->route('getHoadonList')->with('success', 'Sửa thành công');

    }               
}
