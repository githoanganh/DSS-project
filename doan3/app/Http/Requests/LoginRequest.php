<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'mail'=>'required|email|min:6',
            'pass'=>'required',
            'repass'=>'required|same:pass',
        ];
    }
    public function messages()
    {
        return [
        'mail.required'=>'Không được để trống tài khoản',
        'mail.email'=>'Tài khoản không đúng định dạng',
        'mail.min'=>'Tài khoản ít nhất gồm 6 chữ số',
        'pass.required'=>'Không được để trống mật khẩu',
        'repass.required'=>'Không được để trống mật khẩu',
        'repass.same'=>'Nhập không đúng mật khẩu',
        ];
    }

}
