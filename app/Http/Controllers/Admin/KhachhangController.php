<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\KhachhangAddRequest;
use App\Http\Requests\KhachhangEditRequest;
use Auth, DateTime;
use App\Models\Khachhang;
class KhachhangController extends Controller
{
    public function getKhachhangAdd(){
    	return view('admin.Module.khachhang.add'); 
    }
    public function postKhachhangAdd(KhachhangAddRequest $request){
      
		$khachhang = new Khachhang;
		$khachhang->tenkh = $request->txtTen;
		$khachhang->quan = $request->sltQuan;
		$khachhang->phuong = $request->txtPhuong;
		$khachhang->diachi = $request->txtDiachi;
		$khachhang->sdt = $request->txtSDT;
		$khachhang->cmnd = $request->txtCMND;
		$khachhang->matkhau = $request->txtPass;
		$khachhang->created_at = new DateTime();
		$khachhang->save(); 
   		return redirect()->route('getKhachhangList')->with('success', 'Thêm thành công');
    }

    public function getKhachhangDel($id){
        
        $khachhang_delete = Khachhang::find($id);
        
          $khachhang_delete->delete($id);
          return redirect()->route('getKhachhangList')->with('success', 'Xóa thành công');
        
    }
    public function getKhachhangList(){
     $data = Khachhang::select('id', 'tenkh', 'diachi')->get()->toArray();

      return view('admin.module.khachhang.list',['data'=>$data]);
    }
    public function getKhachhangEdit($id){
      $data = Khachhang::findOrFail($id)->toArray();
      return view('admin.module.khachhang.edit', ['data'=>$data]);
      
    }

    public function postKhachhangEdit(KhachhangEditRequest $request,$id){
      $khachhang = Khachhang::find($id);
      if($request->txtPass){
        $this->validate($request,
          [
            'txtRepass' => 'same:txtPass'
          ],
          [
            'txtRepass.same' => 'Hai mật khẩu k trùng'
          ]
          );
        $khachhang->matkhau = $request->txtPass;
      }
			$khachhang->tenkh = $request->txtTen;
			$khachhang->quan = $request->sltQuan;
			$khachhang->phuong = $request->txtPhuong;
			$khachhang->diachi = $request->txtDiachi;
			$khachhang->sdt = $request->txtSDT;
			$khachhang->cmnd = $request->txtCMND;
			
			$khachhang->updated_at = new DateTime;
			$khachhang->save();
       return redirect()->route('getKhachhangList')->with('success', 'Sửa thành công');


     }
    
}
