<?php

namespace Modules\products\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\brands\Models\Brand;

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
        $rules = [
            'title' => 'required',
            'cat_id' => 'required',
            'description' => 'required|max:150'
        ];
        if (class_exists(Brand::class)) {
            $rules['brand_id'] = 'required';
        }
        return $rules;
    }

    public function attributes()
    {
        $attributes = [
            'title' => 'عنوان محصول',
            'cat_id' => 'دسته محصول',
            'description' => 'توضیحات',
        ];
        if (class_exists(Brand::class)) {
            $attributes['brand_id'] = 'برند محصول';
        }
        return $attributes;
    }
}
