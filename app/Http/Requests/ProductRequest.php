<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        $rules =  [
            'name'=>'required',
            'price'=>'required',
            'description'=>'required',
            'image'=>'required',
            'category_id'=>'required',
            'is_featured' => ''
        ];
        return $rules;
    }
    public function messages()
    {
        return [
            'name.required'=>'Vui lòng nhập tên.',
            'price.required'=>'Vui lòng nhập giá.',
            'description.required'=>'Vui lòng nhập mô tả.',
            'image.required'=>'Vui lòng chọn ảnh.',
            'image.jpg'=>'Vui lòng chọn ảnh có đuôi jpg, jpeg, gif, svg.',
            'image.jpeg'=>'Vui lòng chọn ảnh có đuôi jpg, jpeg, gif, svg.',
            'image.gif'=>'Vui lòng chọn ảnh có đuôi jpg, jpeg, gif, svg.',
            'image.svg'=>'Vui lòng chọn ảnh có đuôi jpg, jpeg, gif, svg.',
            'image.max'=>'Vui lòng chọn ảnh kích thước nhỏ hơn.',
            'category_id.required'=>'Vui lòng chọn category.'
        ];
    }
}
