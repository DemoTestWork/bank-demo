<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BeneficiaryRequest extends FormRequest
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
			'type' => 'string|required|in:physical,moral',
            'lastname' => 'required_if:type,physical',
            'firstname' => 'required_if:type,physical',
			'social_reason' => 'required_if:type,moral',            
            'rib_prefix' => 'string|required|size:3',
            'rib' => 'string|required|size:24'
		];
    }
}
