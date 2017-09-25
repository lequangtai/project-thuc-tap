<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CateEditRequest extends FormRequest
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
            'txtmabac' => 'required',
			'txttenbac' => 'required',
			'txttusokw' => 'required|numeric',
			'txtdensokw' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
        	'txtmabac.required' => 'Vui lòng nhập mã bậc',
			'txttenbac.required' => 'Vui lòng nhập tên bậc',
			'txttusokw.required' => 'Vui lòng nhập từ số kw',
			'txttusokw.numeric'=>'từ số kw phải là số',
			'txtdensokw.required' => 'Vui lòng nhập dến số kw',
			'txtdensokw.numeric'=>'đến số kw phải là số',
        ];
    }
}
