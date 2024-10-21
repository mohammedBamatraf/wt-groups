<?php

namespace App\Http\Requests;

use App\Enums\GroupsSocialEnum;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class AdminUpdateGroupRequest extends FormRequest
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
            'id' => ['required', 'exists:groups,id'],
            'name' => ['string', 'nullable'],
            'link' => ['string', Rule::unique('groups')->ignore($this->id), 'nullable'],
            'category_id' => ['string', 'nullable'],
            'language_id' => ['string', 'nullable'],
            'description' => ['nullable', 'string'],
            'social_type' => ['string', 'nullable', Rule::in(GroupsSocialEnum::getValues())],
            'image' => ['image', 'nullable'],
            'is_active' => ['nullable', 'boolean'],
            'vip_type' => ['nullable', Rule::in([0, 1, 2])],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            sendError($validator->errors()->first(), null, 422)
        );
    }
}
