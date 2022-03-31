<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProjectRequest extends FormRequest
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
            'idC'=>'min:1',
            'nombreC'=>'required|min:4|max:50',
            'emailC'=>'required|min:6|max:50',
            'mensajeC'=>'required|min:4|max:3000',
        ];
    }
}