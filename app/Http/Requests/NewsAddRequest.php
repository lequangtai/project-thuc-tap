<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsAddRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'sltCate' =>'required',
            'txtTitle' =>'required|unique:tt13_news,title',
            'txtAuthor' =>'required',
            'txtIntro' =>'required',
            'txtFull' =>'required',
            'newsImg' =>'required|image|mimes:png,jpg,jpeg,gif',
            ];

    }
        
    public function messages(){
    	return[
    	'sltCate.required' => 'Vui lòng chọn danh mục',
    	'txtTitle.required' => 'Vui lòng nhập tiêu đề',
    	'txtTitle.unique' => 'Tiêu đề này đã tồn tại',
    	'txtAuthor.required' => 'Vui lòng nhập tác giả',
    	'txtIntro.required' => 'Vui lòng nhập tóm tắt tin',
    	'txtFull.required' => 'Vui lòng nhập nội dung',
    	'newsImg.required' => 'Vui lòng chọn hình cho bản tin',
    	'newsImg.image' => 'Đây không phải là hình ảnh)',
    	'newsImg.mimes' => 'Hình không đúng định dạng (png,jpg,jpeg,gif)',
    	];
    }
}
