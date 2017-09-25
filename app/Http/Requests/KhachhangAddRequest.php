<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KhachhangAddRequest extends FormRequest
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
            'txtTen' => 'required|unique:tt13_khachhang,tenkh',
            'sltQuan' => 'required',
            'txtPhuong' => 'required',
            'txtDiachi' => 'required',
            'txtSDT'=>'required|numeric',
            'txtCMND' => 'required|numeric|digits:9',
            'txtPass' =>'required|min:8',
            'txtRepass' =>'required|same:txtPass'
        ];
    }

     public function messages(){
        return 
        [
            'txtTen.required' => 'Vui lòng nhập tên khách hàng',
            'txtTen.unique' => 'Tên này đã tồn tại',
            'sltQuan.required' => 'Vui lòng nhập quận (huyện)',
            'txtPhuong.required' => 'Vui lòng nhập phường (xã)',
            'txtDiachi.required' => 'Vui lòng nhập địa chỉ',
            'txtSDT.required'=>'Vui lòng nhập số dt',
            'txtSDT.numeric'=>'SDT phải là số',
            'txtCMND.required'=>'Vui lòng nhập số cmnd',
            'txtCMND.numeric'=>'CMND phải là số',
            'txtCMND.digits'=>'Vui lòng nhập đủ số CMND',
            'txtPass.required'=>'Vui lòng nhập mật khẩu',
            'txtPass.min' => 'Mật khẩu 8 kí tự trở lên',
            'txtRepass.required' => 'Bạn chưa xác nhận mật khẩu',
            'txtRepass.same' => 'Hai mật khẩu không trùng nhau'
        ];
    }
}
