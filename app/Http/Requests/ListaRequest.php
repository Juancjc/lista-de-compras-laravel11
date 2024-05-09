<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ListaRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nome' => ['nullable'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
