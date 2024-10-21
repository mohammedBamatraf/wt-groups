<?php

namespace App\Http\Requests;

use App\Enums\LanguageCodeEnum;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class AdvertisementRequest extends FormRequest
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
        return [
            'image' => ['required', 'image'],
            'language_code' => ['required', 'string', Rule::in(LanguageCodeEnum::getValues()), 'unique:advertisements,language_code'],
            'link' => ['required', 'string', 'unique:advertisements,link'],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            sendError($validator->errors()->first(), null, 422)
        );
    }
}
