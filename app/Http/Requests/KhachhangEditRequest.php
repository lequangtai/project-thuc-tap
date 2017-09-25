<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KhachhangEditRequest extends FormRequest
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
            'txtTen' => 'required',
            'txtPhuong' => 'required',
            'txtDiachi' => 'required',
            'txtSDT'=>'required|numeric',
            'txtCMND' => 'required|numeric|digits:9',
          
        ];
    }

     public function messages(){
        return 
        [
            'txtTen.required' => 'Vui lòng nhập tên khách hàng',
            'txtPhuong.required' => 'Vui lòng nhập phường (xã)',
            'txtDiachi.required' => 'Vui lòng nhập địa chỉ',
            'txtSDT.required'=>'Vui lòng nhập số dt',
            'txtSDT.numeric'=>'SDT phải là số',
            'txtCMND.required'=>'Vui lòng nhập số cmnd',
            'txtCMND.numeric'=>'CMND phải là số',
            'txtCMND.digits'=>'Vui lòng nhập đủ số CMND',
      
        ];
    }
}
