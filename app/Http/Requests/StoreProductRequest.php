<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Response;

class StoreProductRequest extends FormRequest
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
            'id'=>'required',
            'name'=>'required',
            'quantity_unit'=>'required',
            'unit'=>'required',
            'type_id'=>'required',
            'invQty'=>'required',
            'other'=>'required',
            'manufacturer_id'=>'required',
            'consumable'=>'required',
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
