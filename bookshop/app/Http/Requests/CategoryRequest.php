<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name_subjects'=>'required',
            'details_subjects'=>'required',
            'replay_subjects'=>'required',
        ];
    }
    public function attributes(){
        return[
            'name_subjects'=>'نام موضوع',
            'details_subjects'=>'توضیحات موضوع',
            'replay_subjects'=>'دسته مادر',
        ];
    }
    public function messages(){
        return[
            'required'=>':attribute به درستی وارد نشده است.'

        ];
    }
}
