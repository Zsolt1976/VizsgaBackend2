<?php

namespace App\Http\Requests;


use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Response;

class StoreTypeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return[
            'id' => 'required',
            'name' => 'required',
            'food' => 'required',

        ];
    }
    protected function failedValidation(Validator $validator)
    {
        throw new \HttpResponseException(
            Response::json([
                'data' => $validator->errors(),
                'succes' => false,
                'message' => 'validation error',
            ], 400)
        );
    }
}
