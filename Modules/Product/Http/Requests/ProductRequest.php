<?php

namespace Modules\Product\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
       if ($this->request == 'post')
       {
           return [
               'title' => 'required|string|max:255',
               'slug' => 'nullable',
               'description' => 'nullable',
               'category_id' => 'required',
               'price' => 'required|numeric',
               'discount_price' => 'nullable|numeric',
               'image' => 'required|mimes:jpeg,png,jpg',
               'content' => 'nullable',
               'status' => 'required'
           ];
       }else{
           return [
               'title' => 'required|string|max:255',
               'slug' => 'nullable',
               'category_id' => 'required',
               'description' => 'nullable',
               'price' => 'required|numeric',
               'discount_price' => 'nullable|numeric',
               'image' => 'nullable|mimes:jpeg,png,jpg',
               'content' => 'nullable',
               'status' => 'required'
           ];
       }
    }
}
