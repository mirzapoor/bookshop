<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
        return [
            //
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'fname'=>'required',
            'lname'=>'required',
            'role'=>'required',
            'imguser'=>'required|max:300|mimes:jpeg,jpg,png',

        ];
    }
    public function attributes(){
        return[
            'name'=>'نام کاربری ',
            'email'=>'ایمیل کاربر',
            'password'=>'رمز عبور کاربر',
            'lname'=>'نام کاربر',
            'fname'=>'نام خانوادگی کاربر',
            'role'=>'نقش کاربر',
            'imguser'=>'پروفایل کاربر',
            
        ];
    }
    public function messages(){
        return[
            'required'=>':attribute به درستی وارد نشده است.',
            'max'=>':attribute پروفایل نباید بیشتر ار300 کیلوبایت باشد.',
            'mimes'=>':attribute فقط نوع فایلی های png , jpg , jpeg میتواند باشد.'

        ];
    }
}
