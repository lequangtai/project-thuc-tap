<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserAddRequest;
use App\Http\Requests\UserEditRequest;
use App\Models\User;
use DateTime, Auth;

class UserController extends Controller
{
    public function timkiem(Request $request){
      $tukhoa = $request->tukhoa;
      $data = User::where('username', 'like', "%$tukhoa%" )->get();
      return view('admin.module.user.kqtim',['data'=>$data]);
    }
    public function getUserAdd(){
    	return view('admin.module.user.add');
    }
    public function postUserAdd(UserAddRequest $request){
      //echo 111;
   		$user = new User;
   		$user->username = $request->txtUser;
   		$user->password = bcrypt($request->txtPass);
   		$user->level = $request->rdoLevel;
   		$user->created_at = new DateTime();
   		$user->save(); 
   		return redirect()->route('getUserList')->with('success', 'Thêm thành công');
   }

    public function getUserList(){
      $data = User::select('id', 'username', 'level')->get()->toArray();

    	return view('admin.module.user.list', ['data'=>$data]);
    }

    public function getUserDel($id){
        $user_current_login = Auth::user()->id;
        $user_delete = User::find($id);
        if(($id ==1)||($user_current_login!=1 && $user_delete["level"]==1)){
          return redirect()->route('getUserList')->with('success', 'Bạn không được xóa thành viên này');
        }else{
          $user_delete->delete($id);
          return redirect()->route('getUserList')->with('success', 'Xóa thành công');
        }
    }
    public function getUserEdit($id){
      $data = User::findOrFail($id)->toArray();
      if(Auth::user()->id !=1 && ($id==1 ||($data["level"]==1 && (Auth::user()->id !=$id)))){
         return redirect()->route('getUserList')->with('success', 'Bạn không được sửa thành viên này'); 
      }
        return view('admin.module.user.edit', ['data'=>$data]);
      
    }

    public function postUserEdit(UserEditRequest $request,$id){
      $user = User::find($id);
      if($request->txtPass){
        $this->validate($request,
          [
            'txtRepass' => 'same:txtPass'
          ],
          [
            'txtRepass.same' => 'Hai mật khẩu k trùng'
          ]
          );
        $user->password = bcrypt($request->txtPass);
      }
      $user->username = $request->txtUser;
      $user->level = $request->rdoLevel;
      $user->updated_at = new DateTime;
      $user->save();
       return redirect()->route('getUserList')->with('success', 'Sửa thành công');


    }
}
