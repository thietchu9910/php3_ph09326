<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
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

    public function attributes()
    {
        $name = [
            'name' => 'Tên người dùng',
            'password' => 'Mật khẩu',
            're_password' => 'Mật khẩu nhập lại',
        ];
        return $name;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
            $err = [
                'name' => 'required',
                'email' => 'required|email:rfc,dns|unique:users',
                'password' => 'required',
                're_password' => 'required|same:password',
        ];
        return $err;
    }
    public function messages()
    {
      return [
        'required' => ':attribute không để trống',
        'unique' => ':attribute đã tồn tại',
        'same' => 'Mật khẩu nhập lại không đúng',
        'email' => 'Email không đúng định dạng',
      ];
    }
}
