<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyCreateRequest extends FormRequest
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
            'name' => 'required|min:2|max:191',
            'email' => 'nullable|email|min:5|max:191',
            'website' => 'nullable|min:5|max:191',
            'logo' => 'bail|nullable|image|dimensions:min_width=100,min_height=100'
        ];
    }
}
