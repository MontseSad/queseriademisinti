<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsumoRequest extends FormRequest
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
            'nombre' => 'required',
            'cantidad' => 'required',
            'precio_u' => 'required',
            'precio_t' => 'required'
            //'nombre' ,'cantidad', 'precio_u', 'precio_t', 'fecha', 'estado'
        ];
    }
}
