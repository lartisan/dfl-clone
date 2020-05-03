<?php

namespace App\Http\Requests;

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
        return [
            // 'category_list_id' => 'required_unless:products,' . $this->id,
            // 'slug' => 'required|unique:products,' . $this->slug,
            'brand_id' => 'required',
            'category_list_id' => 'required',
			'title' => 'required',
			'description' => 'required',
			'price' => 'required',
			'discount' => 'required',
			'inventory' => 'required',
			// 'preview_image_url' => 'required',
        ];
	}

	// public function messages()
    // {
    //     return [
    //         'required' => 'The :attribute field is required.',
    //     ];
    // }

}
