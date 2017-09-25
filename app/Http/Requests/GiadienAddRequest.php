<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GiadienAddRequest extends FormRequest
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
            'txtMabac' => 'required',
            'txtTenbac' => 'required',
            'sltTuKW' => 'required|numeric',
            'sltDenKW' => 'required|numeric',
            'txtDongia'=>'required|numeric'
        ];
    }
    public function messages()
    {
        return[
            'txtMabac.required' => 'Vui lòng nhập mã bậc',
            'txtTenbac.required' => 'Vui lòng nhập tên bậc',
            'sltTuKW.required' => 'Vui lòng chọn số kw bắt đầu',
            'sltTuKW.numeric'=>'số kw phải là số',
            'sltDenKW.required' => 'Vui lòng nhập số kw cuối',
            'sltDenKW.numeric'=>'số kw cuối phải là số',
            
            'txtDongia.required' => 'Vui lòng nhập đơn giá',
            'txtDongia.numeric'=>'đến số kw phải là số',

        ];
    }
}
