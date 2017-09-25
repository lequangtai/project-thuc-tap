<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserAddRequest extends FormRequest
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
        return 
        [
            'txtUser' => 'required|unique:tt13_admin,username',
            'txtPass' =>'required|min:8',
            'txtRepass' =>'required|same:txtPass'
        ];
    }

    public function messages(){
        return 
        [
            'txtUser.required' => 'Vui lòng nhập tên',
            'txtUser.unique' => 'Tên này đã tồn tại',
            'txtPass.required' => 'Vui lòng nhập mật khẩu',
            'txtPass.min' => 'Mật khẩu 8 kí tự trở lên',
            'txtRepass.required' => 'Bạn chưa xác nhận mật khẩu',
            'txtRepass.same' => 'Hai mật khẩu không trùng nhau'
        ];
    }
}
