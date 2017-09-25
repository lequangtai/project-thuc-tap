<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\NewsAddRequest;
use App\Http\Requests\NewsEditRequest;
use App\Models\Cate;
use App\Models\News;
use Auth, DateTime,File;
class NewsConroller extends Controller
{
    public function getNewsAdd()
    {
        $cate = Cate::select('id', 'name', 'parent_id')->get()->toArray();
    	return view('admin.Module.news.add',['cate'=>$cate]); 

    }
     public function postNewsAdd(NewsAddRequest $request)
     {
        $news = new News;
        $file = $request->file('newsImg');
        $news->title = $request->txtTitle;
        $news->author =$request->txtAuthor;
        $news->intro =$request->txtIntro;
        $news->content =$request->txtFull;

        if(strlen($file) > 0){
            $filename = time().'.'.$file->getClientOriginalName();
            $destinationPath = 'public/uploads/news/';
            $file->move($destinationPath, $filename);
            $news->image = $filename;

        }
        $news->status =$request->rdoPublic;
        $news->loaitin_id =$request->sltCate;
        $news->created_at =new DateTime();
        $news->save();
        return redirect()->route('getNewsList')->with('success', 'Thêm thành công');
    	
    }
    public function getNewsList()
    {
        $news = News::select('id', 'title', 'author', 'created_at')->orderBy('id', 'DESC')->get()->toArray();
     	return view('admin.Module.news.list', ['news'=>$news]); 
    }
    public function getNewsDel($id){
        $news = News::findOrFail($id);
        if(file_exists(public_path().'/uploads/news/'.$news->image)){
            File::delete(public_path().'/uploads/news/'.$news->image);
        }
        $news->delete();
         return redirect()->route('getNewsList')->with('success', 'Xóa thành công');
    }
     public function getNewsEdit($id){
        $news =News::findOrFail($id);
        $cate =Cate::select('id','name','parent_id')->get()->toArray();
        return view('admin.Module.news.edit',["data_news"=>$news,'data_cate'=>$cate]);
    }
     public function postNewsEdit(NewsEditRequest $request,$id){
        $news =News::findOrFail($id);
        $file = $request->file('newsImg');
        $news->title = $request->txtTitle;
        $news->author =$request->txtAuthor;
        $news->intro =$request->txtIntro;
        $news->content =$request->txtFull;

        if(strlen($file) > 0){
            $fImageCurrent = $request ->fImageCurrent;
            if(file_exists(public_path().'/uploads/news/'. $fImageCurrent)){
            File::delete(public_path().'/uploads/news/'. $fImageCurrent);
        }
            $filename = time().'.'.$file->getClientOriginalName();
            $destinationPath = 'public/uploads/news/';
            $file->move($destinationPath, $filename);
            $news->image = $filename;

        }
        $news->status =$request->rdoPublic;
        $news->loaitin_id =$request->sltCate;
        $news->updated_at =new DateTime();
        $news->save();
        return redirect()->route('getNewsList')->with('success', 'Sửa thành công');
    }

}
    

