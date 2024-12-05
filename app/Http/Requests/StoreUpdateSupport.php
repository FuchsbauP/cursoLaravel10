<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUpdateSupport extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illinate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            //Preenchimento obrigatório, minimo de 3 caracteres e máximo de 255, único na tabela supports
            'subject' => 'required | min:3 | max:255 | unique:supports',
            'body' => [
                'required',
                'min: 3',
                'max: 10000'
            ],
        ];
        return $rules;

        if ($this->method() === 'PUT') {
            $rules['subject'] = [
                'required',
                'min:3',
                'max:255',
                Rule::unique('supports')->ignore($this->id)
            ];
        }
    }
}
