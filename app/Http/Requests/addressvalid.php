<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addressvalid extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
    
        return [
            
                // 'address' => ['required', 'unique:posts', 'max:255'],
                // 'city' => ['required'],
                // 'phone' => ['required'],
                // 'zip' => ['required'],
                // 'phone' => ['required'],
                // 'state' => ['required'],
           
        
        ];
    }
}
