<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostPost extends FormRequest
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
            'clave' => 'required',
            'nombre' => 'required',
            'carreras_id' => 'required|exists:academias,id',
            'academias_id' => 'required|exists:carreras,id',
        ];
    }
}
