<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsCreateRequest extends FormRequest
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
            'title'=>'required',
            'category_id'=>'required',
            'brand_id'=>'required',
            'size_id'=>'required',
            'photo_id'=>'required',
            'body'=>'required',
            'price'=>'required',
        ];
    }
    public function messages(){
        return [
          'title.required'=>'Title is required!',
          'category_id.required'=>'Category is required!',
          'brand_id.required'=>'Brand is required!',
          'size_id.required'=>'Size is required!',
          'photo_id.required'=>'Photo is required!',
          'body.required'=>'Description is required!',
          'price.required'=>'Price is required!',

        ];
    }
}
