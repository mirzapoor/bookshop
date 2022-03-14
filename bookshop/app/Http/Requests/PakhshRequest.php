<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PakhshRequest extends FormRequest
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
            'name_pakhsh'=>'required',
            'phone_pakhsh'=>'required',
            'fax_pakhsh'=>'required',
            'email_pakhsh'=>'required',
            'website_pakhsh'=>'required',
            'address_pakhsh'=>'required',
            'website_pakhsh'=>'required',
            'details_pakhsh'=>'required',
        
            //
        ];
    }
    public function attributes(){
        return[
            'name_pakhsh'=>'نام مرکز پخش',
            'phone_pakhsh'=>'تلفن مرکز پخش',
            'fax_pakhsh'=>'فکس مرکز پخش',
            'email_pakhsh'=>'ایمیل مرکز پخش',
            'website_pakhsh'=>'نشانی وب سایت مرکز پخش',
            'address_pakhsh'=>'آدرس مرکز پخش',
            'details_pakhsh'=>'توضیحات مرکز پخش',
        ];
    }
    public function messages(){
        return[
            'required'=>':attribute به درستی وارد نشده است.'

        ];
    }
}
