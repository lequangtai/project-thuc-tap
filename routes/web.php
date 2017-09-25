<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//phần giao diện người dùng
	Route::group(['prefix'=>'/', 'namespace' =>'user'], function(){
		Route::get('/', ['as'=>'getIndex','uses'=>'MainController@getIndex']);
		Route::get('dangkymuadien', ['as'=>'getDKMD','uses'=>'MainController@getDKMD']);
		Route::get('DSthutiendien', ['as'=>'getDSTTD','uses'=>'MainController@getDSTTD']);
		Route::get('hinhthucthanhtoan', ['as'=>'getHTTT','uses'=>'MainController@getHTTT']);
		Route::get('huongdanthutuc', ['as'=>'getHDTT','uses'=>'MainController@getHDTT']);
		Route::get('thongtingiadien', ['as'=>'getTTGD','uses'=>'MainController@getTTGD']);
		Route::get('thongtincungcapdien', ['as'=>'getTTCCD','uses'=>'MainController@getTTCCD']);
		Route::get('lichghidien', ['as'=>'getLGD','uses'=>'MainController@getLGD']);
		Route::get('thongtinthanhtoan', ['as'=>'getTTTT','uses'=>'MainController@getTTTT']);
		Route::get('xemthongtincungcapdien', ['as'=>'getXTTCCD','uses'=>'MainController@getXTTCCD']);
		Route::get('xemthongtinkhachhang', ['as'=>'getXTTKH','uses'=>'MainController@getXTTKH']);
		Route::get('xemthongtindienke', ['as'=>'getXTTDK','uses'=>'MainController@getXTTDK']);
		Route::get('thongtinKH', ['as'=>'getTTKH','uses'=>'MainController@getTTKH']);
		Route::get('capcuudien', ['as'=>'getCCD','uses'=>'MainController@getCCD']);
		Route::get('dephongtainan', ['as'=>'getDPTND','uses'=>'MainController@getDPTND']);
		Route::get('tuvansudung', ['as'=>'getTVSDD','uses'=>'MainController@getTVSDD']);
		Route::get('dangky', ['as'=>'getDK','uses'=>'MainController@getDK']);
		Route::get('chitiettin/{id}', ['as'=>'getCTT','uses'=>'MainController@getCTT']);
		Route::get('chitiettinmoi/{id}', ['as'=>'getCTTM','uses'=>'MainController@getCTTM']);
		Route::get('chitiethinhthucthanhtoan/{id}', ['as'=>'getCTHTTT','uses'=>'MainController@getCTHTTT']);
		Route::get('thongtindienke', ['as'=>'getTTDK','uses'=>'MainController@getTTDK']);
		Route::get('huongdandangky', ['as'=>'getHDDK','uses'=>'MainController@getHDDK']);
		Route::get('lienhe', ['as'=>'getLH','uses'=>'MainController@getLH']);
		Route::get('huongdansudung', ['as'=>'getHDSD','uses'=>'MainController@getHDSD']);
		Route::get('hoadondientu', ['as'=>'getHD','uses'=>'MainController@getHD']);
		Route::get('xemhoadon', ['as'=>'getXHDDT','uses'=>'MainController@getXHDDT']);
		Route::get('thanhtoantructuyen', ['as'=>'getTT','uses'=>'MainController@getTT']);
		Route::get('danhsachhoadon', ['as'=>'getlistHD','uses'=>'MainController@getlistHD']);

		
		
		// });
		});
	Route::get('list','User\dangnhapController@getdshoadon')->name('getdshoadon');
	//Route::get('dangnhap', 'dangnhapController@getdangnhap')->name('getdangnhap');
	Route::post('dangnhap', 'User\dangnhapController@postdangnhap')->name('postdangnhap');
	Route::post('dangnhapxemthongtinkhachhang', 'User\dangnhapController@postdangnhapXTTKH')->name('postdangnhapXTTKH');
	Route::post('dangnhapxemthongtindienke', 'User\dangnhapController@postdangnhapXTTDK')->name('postdangnhapXTTDK');
	Route::get('inhoadon/{id}','User\dangnhapController@getinhoadon')->name('getinhoadon');
	Route::get('getgiaybaodien/{id}','User\dangnhapController@getingiaybao')->name('getingiaybao');
	Route::post('Timkiem','User\TimkiemController@Timkiem')->name('Timkiem');
	Route::get('dangxuat', 'User\dangnhapController@getdangxuat')->name('getdangxuat');

	


//phần admin


Route::get('login', 'LoginController@getLogin')->name('getLogin');
Route::post('login', 'LoginController@postLogin')->name('postLogin');
Route::get('logout', 'LoginController@getLogout')->name('getLogout');
	Route::post('timkiem','Admin\UserController@timkiem')->name('timkiem');
Route::group(['middleware'=>'adminlogin'], function(){
Route::group(['prefix'=>'admin', 'namespace' =>'Admin'], function(){
	Route::get('/', function(){
		$stas_user = DB::table('tt13_admin')->count();
		$stas_cate = DB::table('tt13_loaitin')->count();
		$stas_news = DB::table('tt13_news')->count();
		$stas_khachhang   = DB::table('tt13_khachhang')->count();
		$stas_dienke   = DB::table('tt13_dienke')->count();
		$stas_giadien   = DB::table('tt13_giadien')->count();
		$stas_hoadon   = DB::table('tt13_hoadon')->count();
		return view('admin.module.dashboard.main',['stas_user'=>$stas_user,'stas_cate'=>$stas_cate,'stas_news'=>$stas_news,'stas_khachhang'=>$stas_khachhang,'stas_dienke'=>$stas_dienke,'stas_giadien'=>$stas_giadien,'stas_hoadon'=>$stas_hoadon]);
	});
	Route::group(['prefix'=>'category'], function(){
		Route::get('add','CateController@getCateAdd')->name('getCateAdd');
		Route::post('add','CateController@postCateAdd')->name('postCateAdd');
		Route::get('list','CateController@getCateList')->where('id', '[0-9]+')->name('getCateList');
		Route::get('delete/{id}', 'CateController@getCateDel')->where('id', '[0-9]+')->name('getCateDel');
		Route::get('edit/{id}','CateController@getCateEdit')->where('id', '[0-9]+')->name('getCateEdit');
		Route::post('edit/{id}','CateController@postCateEdit')->where('id', '[0-9]+')->name('postCateEdit');


	});
	Route::group(['prefix'=>'user'], function(){
		Route::get('add','UserController@getUserAdd')->name('getUserAdd');
		Route::post('add','UserController@postUserAdd')->name('postUserAdd');
		Route::get('list','UserController@getUserList')->name('getUserList');
		Route::get('delete/{id}','UserController@getUserDel')->where('id', '[0-9]+')->name('getUserDel');
		Route::get('edit/{id}','UserController@getUserEdit')->where('id', '[0-9]+')->name('getUserEdit');
		Route::post('edit/{id}','UserController@postUserEdit')->where('id', '[0-9]+')->name('postUserEdit');


	});
	Route::group(['prefix'=>'news'], function(){
		Route::get('add','NewsConroller@getNewsAdd')->name('getNewsAdd');
		Route::post('add','NewsConroller@postNewsAdd')->name('postNewsAdd');
		Route::get('list','NewsConroller@getNewsList')->name('getNewsList');
		Route::get('delete/{id}','NewsConroller@getNewsDel')->where('id', '[0-9]+')->name('getNewsDel');
		Route::get('edit/{id}','NewsConroller@getNewsEdit')->where('id', '[0-9]+')->name('getNewsEdit');
		Route::post('edit/{id}','NewsConroller@postNewsEdit')->where('id', '[0-9]+')->name('postNewsEdit');
		
	});
	Route::group(['prefix'=>'khachhang'], function(){
		Route::get('add','KhachhangController@getKhachhangAdd')->name('getKhachhangAdd');
		Route::post('add','KhachhangController@postKhachhangAdd')->name('postKhachhangAdd');
		Route::get('list','KhachhangController@getKhachhangList')->name('getKhachhangList');
		Route::post('timkiem','KhachhangController@timkiem')->name('timkiemKhachhang');
		Route::get('delete/{id}','KhachhangController@getKhachhangDel')->where('id', '[0-9]+')->name('getKhachhangDel');
		Route::get('edit/{id}','KhachhangController@getKhachhangEdit')->where('id', '[0-9]+')->name('getKhachhangEdit');
		Route::post('edit/{id}','KhachhangController@postKhachhangEdit')->where('id', '[0-9]+')->name('postKhachhangEdit');
	});
	Route::group(['prefix'=>'giadien'], function(){
		Route::get('add','GiadienController@getGiadienAdd')->name('getGiadienAdd');
		Route::post('add','GiadienController@postGiadienAdd')->name('postGiadienAdd');
		Route::get('list','GiadienController@getGiadienList')->name('getGiadienList');
	});
	Route::group(['prefix'=>'dienke'], function(){
		Route::get('add','DienkeController@getDienkeAdd')->name('getDienkeAdd');
		Route::post('add','DienkeController@postDienkeAdd')->name('postDienkeAdd');
		Route::get('list','DienkeController@getDienkeList')->name('getDienkeList');
	});
	Route::group(['prefix'=>'hoadon'], function(){
		Route::get('add','HoadonController@getHoadonAdd')->name('getHoadonAdd');
		Route::get('bill/{id}','HoadonController@getHoadonBill')->name('getHoadonBill');
		Route::post('bill/{id}','HoadonController@postHoadonBill')->name('postHoadonBill');
		Route::get('list','HoadonController@getHoadonList')->name('getHoadonList');
		Route::get('inhoadon/{id}','HoadonController@getInhoadon')->name('getInhoadon');
		Route::post('timkiem','HoadonController@timkiem')->name('TracuuCongno');
		Route::get('getgiaybaodien/{id}','HoadonController@getIngiaybao')->name('getIngiaybao');
		Route::get('suahoadon/{id}', 'HoadonController@getSuahoadon')->name('getSuahoadon');
		Route::post('suahoadon/{id}', 'HoadonController@postSuahoadon')->name('postsuahoadon');

	});
	Route::group(['prefix'=>'tracuu'], function(){
		Route::get('/','TracuuController@index')->name('tracuu');
		Route::get('timkh','TracuuController@nhaptimkh')->name('nhaptimkh');
		Route::post('timkh','TracuuController@timkh')->name('timkh');
		Route::get('timdk','TracuuController@nhaptimdk')->name('nhaptimdk');
		Route::post('timdk','TracuuController@timdk')->name('timdk');
		Route::get('timhd','TracuuController@nhaptimhd')->name('nhaptimhd');
		Route::get('nohoai','TracuuController@nohoai')->name('nohoai');
		Route::post('timhd','TracuuController@timhd')->name('timhd');
	});

});
});





