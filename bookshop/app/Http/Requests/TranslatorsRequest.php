<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TranslatorsRequest extends FormRequest
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
            'name_motarjems'=>'required',
            'lname_motarjems'=>'required',
            'age_motarjems'=>'required',
            'maghtah_motarjems'=>'required',
            'reshtah_motarjems'=>'required',
            'phone_motarjems'=>'required',
            'details_motarjems'=>'required',
            'email_motarjems'=>'required',
            'website_motarjems'=>'required',



        ];
    }
    public function attributes(){
        return[
            'name_motarjems'=>'نام  مترجم',
            'lname_motarjems'=>'نام خانوادگی مترجم',
            'age_motarjems'=>'سن مترجم',
            'maghtah_motarjems'=>'مقطع تحصیلی مترجم',
            'reshtah_motarjems'=>'رشته نحصیلی مترجم',
            'phone_motarjems'=>'تلفن مترجم',
            'website_motarjems'=>'نشانی وب سایت  مترجم',
            'email_motarjems'=>'ایمیل مترجم',
            'details_motarjems'=>'توضیحات مترجم',
        ];
    }
    public function messages(){
        return[
            'required'=>':attribute به درستی وارد نشده است.'

        ];
    }
}
