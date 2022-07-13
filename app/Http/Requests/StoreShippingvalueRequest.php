<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreShippingvalueRequest extends FormRequest
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
            'kmValue' => "required|min:1|max:11",
            'kmDiference'  => "required|min:1|max:11",
            'price'  => "required|min:1|max:11",
            'idCommune'  => "required"
        ];
    }
   
    public function attributes()
    {
        
        return [
            'kmValue' => "Valor de kilometros",
            'kmDiference'  => "Diferencia de kilometros",
            'price'  => "precio",
            'idCommune'  => "Comuna"
        ];
    }

   

    
}
