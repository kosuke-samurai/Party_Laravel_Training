<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResisterAdminRequest extends FormRequest
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


    public function rules()
    {
        return [
            'email' => ['required'],
            'password' => ['required'],
            'project_number' => ['required'],
        ];
    }
}
