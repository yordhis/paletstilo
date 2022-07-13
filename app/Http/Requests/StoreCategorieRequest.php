<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategorieRequest extends FormRequest
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
            'name' => 'required|max:50',
            'file' => 'max:2048|image'
        ];
    }

     public function attributes()
     {
        return [
            'name'=> 'nombre de la categoria',
            'file' => 'Imagen'
        ];
     }

    //  personalizacion del mensaje mas avanzada 
    //  public function messages()
    //  {
    //     return [
    //         'name.required'=> 'nombre de la categoria'
    //     ]; 
    //  }
}
