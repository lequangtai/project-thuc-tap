<!-- <?php

// namespace App\Http\Controllers\user;

// use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
// use App\Models\News;
// use App\Models\Cate;
// use App\Models\Giadien;
// use DB;

// class HomeController extends Controller
// {
//     public function getIndex(){
//         $data = DB::table('tt13_news')
//             ->leftJoin('tt13_loaitin', 'tt13_news.loaitin_id', '=', 'tt13_loaitin.id')
//             ->where('loaitin_id','=',11)
//             ->get();
//         return view('user.pages.index',['data'=>$data]);
//     }

//     public function getDKMD(){
//         return view('user.pages.TTchung.dangkymuadien');
//     }

//     public function getDSTTD(){
//         return view('user.pages.TTchung.DSthutiendien');
//     }

//     public function getHTTT(){
//          $data = DB::table('tt13_loaitin')
//             ->where('parent_id','=',19)
//             ->get();
//         return view('user.pages.TTchung.hinhthucthanhtoan',['data'=>$data]);
//     }

//     public function getHDTT(){
//         $data = DB::table('tt13_news')
//             ->leftJoin('tt13_loaitin', 'tt13_news.loaitin_id', '=', 'tt13_loaitin.id')
//             ->where('loaitin_id','=',20)
//             ->get();
//         return view('user.pages.TTchung.huongdanthutuc',['data'=>$data]);
//     }

//     public function getTTGD(){
//          $data = DB::table('tt13_giadien')
//             ->get();
//         return view('user.pages.TTchung.thongtingiadien',['data'=>$data]);
//     }

//     public function getTTDK(){
//         return view('user.pages.TTKH.TTdienke');
//     }

//     public function getTTKH(){
//         return view('user.pages.TTKH.thongtinKH');
//     }

//     public function getTTTT(){
//         return view('user.pages.TTKH.thongtinthanhtoan');
//     }

//     public function getXTTDK(){
//          $data = DB::table('tt13_dienke')
//             ->leftJoin('tt13_khachhang', 'tt13_dienke.khachhang_id', '=', 'tt13_khachhang.id')
//             ->get();
//         return view('user.pages.TTKH.xemTTdienke',['data'=>$data]);
//     }

//     public function getCCD(){
//         $data = DB::table('tt13_news')
//             ->leftJoin('tt13_loaitin', 'tt13_news.loaitin_id', '=', 'tt13_loaitin.id')
//             ->where('loaitin_id','=',6)
//             ->get();
//         return view('user.pages.TVSD.capcuudien',['data'=>$data]);
//     }

//     public function getDPTND(){
//     	$data = DB::table('tt13_news')
//             ->leftJoin('tt13_loaitin', 'tt13_news.loaitin_id', '=', 'tt13_loaitin.id')
//             ->where('loaitin_id','=',4)
//             ->get();
//         return view('user.pages.TVSD.dephongtainandien',['data'=>$data]);
//     }

//     public function getTVSDD($id){
         // $cate= Cate::select('name')->where('id',$id)->first()->toArray();
         //    $news = News::where('category_id',$id)->orderBy('id','DESC')->get()->toArray();
        //  $data = DB::table('tt13_loaitin')
        //     //->select('name')
        //     ->where('parent_id','=',5)
        //     ->get();
        // $news = DB::table('tt13_news')
        //     ->leftJoin('tt13_loaitin', 'tt13_news.loaitin_id', '=', 'tt13_loaitin.id')
        //     ->where('loaitin_id','=',4)
        //     ->get();
        //     //print_r($data);
        //     echo "<pre>";
        // print_r($cate,$news);
        // echo "<pre>";
    //     return view('user.pages.TVSD.tuvansudungdien');
    // }

    // public function getCTT($id){
    //     $news = News::select()->where('id', $id)->first()->toArray();
    //     return view('user.pages.TVSD.chitiettin', ['news'=>$news]);
    // }
    // public function getDK(){
    //     return view('user.pages.DK.dangky');
    // }

    // public function getHDDK(){
    //     return view('user.pages.DK.huongdandangky');
    // }

    // public function getLH(){
    //     $data = DB::table('tt13_news')
    //         ->leftJoin('tt13_loaitin', 'tt13_news.loaitin_id', '=', 'tt13_loaitin.id')
    //         ->where('loaitin_id','=',2)
    //         ->get();
    //     return view('user.pages.HDSD-LH.lienhe',['data'=>$data]);
    // }

    // public function getHDSD(){
    //     $data = DB::table('tt13_news')
    //         ->leftJoin('tt13_loaitin', 'tt13_news.loaitin_id', '=', 'tt13_loaitin.id')
    //         ->where('loaitin_id','=',1)
    //         ->get();
    //     return view('user.pages.HDSD-LH.huongdansudung',['data'=>$data]);
    // }

    // public function getHD(){
    //     return view('user.pages.HDDT.hoadondientu');
    // }

    // public function getXHDDT(){
    //     return view('user.pages.HDDT.xemHDDT');
    // }

    // public function getTT(){
    //     return view('user.pages.HDDT.thanhtoantructuyen');
    // }
    //  public function getCTTM(){
    //     $data = DB::table('tt13_news')
    //         ->leftJoin('tt13_loaitin', 'tt13_news.loaitin_id', '=', 'tt13_loaitin.id')
    //         ->where('loaitin_id','=',11)
    //         ->get();
    //     return view('user.pages.tinmoi.chitiettinmoi',['data'=>$data]);
    // }
    //  public function getXTTKH(){
    //     $data = DB::table('tt13_khachhang')
    //         ->get();
    //     return view('user.pages.TTKH.xemTTKH',['data'=>$data]);
    // }
    
    // public function getNews($id){
    //     $news = News::select()->paginate(6);
    //     return view('user.pages.index',['news'=>$news]);
    // }
    
    // public function getDetail($id){
    //     $data=News::with('cate')->where('id',$id)->first()->toArray();
    //     return view('user.pages.detail',['data'=>$data]);
    // }
    

    
// }
//  -->