<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HoadonAddRequest extends FormRequest
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
            'txtKy' => 'required',
            'txtChisodau' => 'required|numeric',
			'txtChisocuoi' => 'required|numeric',
            'tungay' => 'required|date|before:denngay',
            'denngay' => 'required|date|before_or_equal:txtngaylaphoadon',           
        ];
    }

    public function messages()
    {
        return 
        [
            'txtKy.required' => 'Vui lòng nhập kỳ',
            'tungay.required' => 'Vui lòng nhập từ ngày',
            'tungay.before' => 'Từ ngày < đến ngày',
            'denngay.required' => 'Vui lòng nhập đen ngay',
            'denngay.before_or_equal' => 'den ngay phai <= ngay lap hoadon',
            'txtChisodau.required' => 'Vui lòng nhập chỉ số đầu',
            'txtChisocuoi.required' => 'Vui lòng nhập chỉ số cuối',            
        ];
    }
}
