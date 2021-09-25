<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedBackRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'subject'=>'required',
            'message'=>'required'
        ];
    }
    public function messages()
    {
        return [
          'name.required'=>'Vui lòng nhập tên',
          'email.required'=>'Vui lòng nhập địa chỉ email',
          'phone.required'=>'Vui lòng nhập số điện thoại',
          'subject.required'=>'Vui lòng chọn chủ đề',
          'message.required'=>'Vui lòng nhập chú thích'
        ];
    }
}
