<?php

namespace App\Http\Requests;

use App\Enums\GroupsSocialEnum;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class GroupRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'link' => ['required', 'string', 'unique:groups,link'],
            'category_id' => ['required'],
            'language_id' => ['required'],
            'description' => ['nullable'],
            'social_type' => ['required', Rule::in(GroupsSocialEnum::getValues())],
            'image' => ['image'],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            sendError($validator->errors()->first(), null, 422)
        );
    }
}
