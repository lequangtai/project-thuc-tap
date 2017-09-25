<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DienkeAddRequest extends FormRequest
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
            'sltDK'  =>'required',
            'ngaysx' => 'required|date|before_or_equal:tomorrow',
            'ngaylap' => 'required|date|after:ngaysx',
			'txtMota' => 'required',
        ];
    }
    public function messages()
    {
        return[
            'sltDK.required' => 'Vui lòng chọn khách hàng',
			'ngaysx.required' => 'Vui lòng nhập ngày sản xuất',
            'ngaysx.before_or_equal' =>'Ngày sản xuất <= ngày hiện tại',
            'ngaylap.required' => 'Vui lòng nhập ngày lắp',
            'ngaylap.after' =>'Ngày lắp > ngày sản xuất',
			'txtMota.required' => 'Vui lòng nhập mô tả',
        ];
    }
}
