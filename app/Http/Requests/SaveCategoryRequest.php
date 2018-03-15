<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SaveCategoryRequest extends FormRequest
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
            'name'=>[
                'required',
                Rule::unique('categories')->ignore($this->id)
            ],
            'slug'=>[
                'required',
                Rule::unique('categories')->ignore($this->id)
            ],
            'image'=>'image'
        ];
    }
    public function messages(){
        return[
            'name.required'=>'Vui lòng nhập tên',
            'name.unique'=>'Tên đã bị trùng',
            'slug.required'=>'Vui lòng nhập đường dẫn',
            'slug.unique'=>'Đường dẫn bị trùng',
            'image.image'=>'Không đúng định dạng ảnh',
        ];  
    }
}
