<?php

 namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Cate;
use App\Models\Hoadon;
use App\Models\Dienke;
use App\Models\Giadien;
use DB;

class MainController extends Controller
{
 
    public function getNews($id){
        $news = News::select()->where('loaitin_id',11)->paginate(4);                  
        return view('user.pages.index',['news'=>$news]);
    }
    public function getCate($id){
        $data=Cate::select()->where('id',$id)->paginate(4);
        return view('user.pages.tuvansudungdien',['data'=>$data]);
    }
    public function getDetail($id){
        $data=News::with('cate')->where('id',$id)->first()->toArray();
        return view('user.pages.detail',['data'=>$data]);
    }

    public function getIndex(){
        return view('user.pages.index');
    }

    public function getDKMD(){
        return view('user.pages.TTchung.dangkymuadien');
    }

    public function getDSTTD(){
        return view('user.pages.TTchung.DSthutiendien');
    }

    public function getHTTT(){
        return view('user.pages.TTchung.hinhthucthanhtoan');
    }

    public function getHDTT(){
        $data = DB::table('tt13_news')
            ->leftJoin('tt13_loaitin', 'tt13_news.loaitin_id', '=', 'tt13_loaitin.id')
            ->where('loaitin_id','=',20)
            ->get();
        return view('user.pages.TTchung.huongdanthutuc',['data'=>$data]);
    }

    public function getTTGD(){
         $data = DB::table('tt13_giadien')
            ->get();
        return view('user.pages.TTchung.thongtingiadien',['data'=>$data]);
    }

    public function getTTDK(){
        return view('user.pages.TTKH.TTdienke');
    }

    public function getTTKH(){
        return view('user.pages.TTKH.thongtinKH');
    }

    public function getTTTT(){
        return view('user.pages.TTKH.thongtinthanhtoan');
    }

    public function getXTTDK(){
        //  $data = DB::table('tt13_dienke')
        //     ->leftJoin('tt13_khachhang', 'tt13_dienke.khachhang_id', '=', 'tt13_khachhang.id')
        //     ->get();
        // return view('user.pages.TTKH.xemTTdienke',['data'=>$data]);
        return view('user.pages.TTKH.xemTTdienke');
    }

    public function getCCD(){
        $data = DB::table('tt13_news')
            ->leftJoin('tt13_loaitin', 'tt13_news.loaitin_id', '=', 'tt13_loaitin.id')
            ->where('loaitin_id','=',6)
            ->get();
        return view('user.pages.TVSD.capcuudien',['data'=>$data]);
    }

    public function getDPTND(){
     $data = DB::table('tt13_news')
            ->leftJoin('tt13_loaitin', 'tt13_news.loaitin_id', '=', 'tt13_loaitin.id')
            ->where('loaitin_id','=',4)
            ->get();
        return view('user.pages.TVSD.dephongtainandien',['data'=>$data]);
    }

    public function getTVSDD(){
        return view('user.pages.TVSD.tuvansudungdien');
    }

    public function getCTT($id){
        $news = News::select()->where('loaitin_id', $id)->get()->toArray();
        // echo "<pre>";
        // print_r($news);
        // echo "</pre>";
        return view('user.pages.TVSD.chitiettin', ['news'=>$news]);
    }

    public function getCTHTTT($id){
        $news = News::select()->where('loaitin_id', $id)->get()->toArray();
        return view('user.pages.TTchung.chitietHTTT', ['news'=>$news]);
    }

    public function getDK(){
        return view('user.pages.DK.dangky');
    }

    public function getHDDK(){
        return view('user.pages.DK.huongdandangky');
    }

    public function getLH(){
        $data = DB::table('tt13_news')
            ->leftJoin('tt13_loaitin', 'tt13_news.loaitin_id', '=', 'tt13_loaitin.id')
            ->where('loaitin_id','=',2)
            ->get();
        return view('user.pages.HDSD-LH.lienhe',['data'=>$data]);
    }


    public function getHDSD(){
        $data = DB::table('tt13_news')
            ->leftJoin('tt13_loaitin', 'tt13_news.loaitin_id', '=', 'tt13_loaitin.id')
            ->where('loaitin_id','=',1)
            ->get();
        return view('user.pages.HDSD-LH.huongdansudung',['data'=>$data]);
    }

    public function getHD(){
        return view('user.pages.HDDT.hoadondientu');
    }

    public function getXHDDT(){
        $data = new Hoadon;
      $abc = $data->with(
                          array('dienke'=>function($tudat){
                          $tudat->select();})
                        )->select()->where('id',8)->get()->toArray();
        foreach ($abc as $key => $value) 
        {
          foreach ($value["dienke"] as $ahuhu) 
          {
            $data1 = new Dienke;
            $abc1 = $data1->with(
                                  array('khachhang'=>function($tudat){
                                  $tudat->select();})
                                )->select()->where('id',5)->get()->toArray();
            if($ahuhu["dntt"]<=100){
              $data3=array(
                $data1= Giadien::select()->where('mabac',1)->get()->toArray(),
                );
            }
            elseif($ahuhu["dntt"]<=100){
              $data3=array(
                $data1= Giadien::select()->where('mabac',1)->get()->toArray(),
                );
            }
            elseif($ahuhu["dntt"]<=200){
              $data3=array(
                $data1= Giadien::select()->where('mabac',1)->get()->toArray(),
               $data2= Giadien::select()->where('mabac',2)->get()->toArray()
                );
            }
            elseif($ahuhu["dntt"]<=300){
              $data3=array(
                $data1= Giadien::select()->where('mabac',1)->get()->toArray(),
               $data2= Giadien::select()->where('mabac',2)->get()->toArray(),
               $data3= Giadien::select()->where('mabac',3)->get()->toArray()
                );
            }
          }
        }
        //  echo "<pre>";
        // print_r($data3);
        // print_r($abc1);
        // print_r($abc);
        // echo "<pre>";
      return view('user.pages.HDDT.xemHDDT',['data3'=>$data3,'abc1'=>$abc1,'abc'=>$abc]);
    }
       
   

    public function getTT(){
        return view('user.pages.HDDT.thanhtoantructuyen');
    }
     public function getCTTM($id){
        $news = News::select()->where('id', $id)->first();
        return view('user.pages.tinmoi.chitiettinmoi',['news'=>$news]);
    }
     public function getXTTKH(){
        // $data = DB::table('tt13_khachhang')
        //     ->get();
        // return view('user.pages.TTKH.xemTTKH',['data'=>$data]);
        return view('user.pages.TTKH.xemTTKH');
    }

}

