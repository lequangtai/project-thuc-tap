<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CateAddRequest;
use App\Http\Requests\CateEditRequest;
use App\Models\Cate;
use DateTime;
class CateController extends Controller
{
    public function getCateAdd(){
        $data = Cate::select('id', 'name', 'parent_id')->get();
    	return view('admin.Module.category.add',['dataCate' =>$data]);
    }
    public function postCateAdd(CateAddRequest $request){
    	$cate = new Cate;
    	$cate->name = $request->txtCateName;
    	$cate->parent_id = $request->sltCate;
    	$cate->created_at = new DateTime();
    	$cate->save();
    	return redirect()->route('getCateList')->with('success', 'Thêm thành công');
    }
    public function getCateList(){
        $data = Cate::select('id', 'name', 'parent_id')->get();
    	return view('admin.Module.category.list',['data'=> $data]);
    }

    public function getCateEdit($id){
      $data = Cate::findOrFail($id)->toArray();
      $parent = Cate::select('id', 'name', 'parent_id')->get()->toArray();
      return view('admin.Module.category.edit', ['data'=> $data, 'parent' =>$parent]);
    }
    public function postCateEdit(CateEditRequest $request, $id){
      $cate = Cate::find($id);
      $cate->name = $request->txtCateName;
      $cate->parent_id = $request->sltCate;
      $cate->updated_at = new DateTime();
      $cate->save();
      return redirect()->route('getCateList')->with('success', 'Sửa thành công');


      
    }

     
    public function getCateDel($id){
            $parent = Cate::where('parent_id', $id)->count();
            if($parent ==0){
                $cate = Cate::find($id);
                $cate ->delete($id);
                 return redirect()->route('getCateList')->with('success', 'Xóa thành công');
            }
            else{
               return redirect()->route('getCateList')->with('error', 'Không thể xóa ');
                
            }
    }
}
