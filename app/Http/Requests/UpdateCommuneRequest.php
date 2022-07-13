<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCommuneRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'name' => 'required|max:75',
            'idProvince' => 'required'
        ];
    }

    public function attributes()
    {
       return [
           'name'=> 'nombre de la provincia',
           'idProvince' => 'provincia'
       ];
    }
}
