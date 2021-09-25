<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
        $rules = [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'username' => ['required', Rule::unique('users')],
            'password' => ['required', 'min:6'],
            'email' => ['required', Rule::unique('users')],
            'phone' => ['required', Rule::unique('users')],
            'address' => ['required'],
            'role' => ['nullable']
        ];
        if(request()->isMethod('put')){
            $rules['email'] = [Rule::unique('users')->ignore($this->id)];
            $rules['phone'] = [Rule::unique('users')->ignore($this->id)];
            $rules['username'] = [ Rule::unique('users')->ignore($this->id)];
            $rules['role'] = ['nullable'];
            $rules['password'] = ['min:6'];
        }
        return $rules;
    }
    public function messages()
    {
        $messages = [
        'first_name.required' => 'vui lòng nhập tên ',
            'Last_name.required'=>'vui lòng nhập họ ',
            'Address.required'=>'vui lòng nhập địa chỉ',
             'Email.required'=>'vui lòng nhập email',
             'Phone.required'=>'vui lòng nhập số điện thoại',
             'Username .required'=>'vui lòng nhập username',
             'Password.required'=>'vui lòng nhập password',
             'Re-password.required'=>'vui lòng nhập lại password',
    ];
        return $messages;

    }

}
