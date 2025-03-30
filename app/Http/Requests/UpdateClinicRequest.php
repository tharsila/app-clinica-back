<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClinicRequest extends FormRequest
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
            'corporate_name' => 'required|string',
            'trade_name' => 'required|string',
            'cnpj' => 'required|string|unique:clinics,cnpj,' . $this->route('clinic') . ',id,deleted_at,NULL',
            'regional_id' => 'required|exists:regionals,id',
            'opening_date' => 'required|date',
            'active' => 'boolean',
            'specialties' => 'array',
            'specialties.*' => 'exists:specialties,id'
        ];
    }

    public function messages()
    {
        return [
            'cnpj.required' => 'O campo CNPJ é obrigatório.',
            'cnpj.unique' => 'Este CNPJ já está registrado.',
            'regional_id.exists' => 'A regional informada não existe.',
            'specialties.*.exists' => 'Uma das especialidades informadas não existe.',
        ];
    }
}
