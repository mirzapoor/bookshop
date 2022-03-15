<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WritersRequest extends FormRequest
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
            'name_writers'=>'required',
            'lname_writers'=>'required',
            'website_writers'=>'required',
            'phone_writers'=>'required',
            'address_writers'=>'required',
            'details_writers'=>'required',
           
            //
        ];
    }
    public function attributes(){
        return[
            'name_writers'=>'نام  نویسنده',
            'lname_writers'=>'نام خانوادگی نویسنده',
            'website_writers'=>'نشانی وب سایت  نویسنده',
            'phone_writers'=>'تلفن نویسنده',
            'address_writers'=>'آدرس نویسنده',
            'details_writers'=>'توضیحات نویسنده',
        ];
    }
    public function messages(){
        return[
            'required'=>':attribute به درستی وارد نشده است.'

        ];
    }
}
