<?php

namespace App\Http\Requests;

use App\Enums\GroupsSocialEnum;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class UpdateGroupRequest extends FormRequest
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
            'name' => ['string','nullable'],
            'link'=> ['string',Rule::unique('groups')->ignore($this->route('group')),'nullable'],
            'category_id' => ['string','nullable'],
            'language_id' => ['string','nullable'],
            'description' => ['nullable','string'],
            'social_type' => ['string','nullable',Rule::in(GroupsSocialEnum::getValues())],
            'image' => ['image','nullable'],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(sendError($validator->errors()->first()));
    }

}
