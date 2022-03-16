<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChaphkonehsRequest extends FormRequest
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
            'name_chapkhonehs'=>'required',
            'year_chapkhonehs'=>'required',
            'email_chapkhonehs'=>'required',
            'website_chapkhonehs'=>'required',

            'phone_chapkhonehs'=>'required',
            'address_chapkhonehs'=>'required',
            'details_chapkhonehs'=>'required',
        ];
    }
    public function attributes(){
        return[
            'name_chapkhonehs'=>'نام چاپخانه ',
            'year_chapkhonehs'=>'سال تاسیس چاپخانه',
            'email_chapkhonehs'=>'ایمیل چاپخانه',
            'website_chapkhonehs'=>'نشانی وب سایت چاپخانه ',
            'phone_chapkhonehs'=> 'چاپخانه تلفن',
            'address_chapkhonehs'=>'آدرس چاپخانه ',
            'details_chapkhonehs'=>'توضیحات چاپخانه ',
        ];
    }
    public function messages(){
        return[
            'required'=>':attribute به درستی وارد نشده است.'

        ];
    }
}
