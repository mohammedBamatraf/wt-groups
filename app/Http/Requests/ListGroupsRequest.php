<?php

namespace App\Http\Requests;

use App\Enums\GroupsSocialEnum;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class ListGroupsRequest extends FormRequest
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
            'name'        => ['string','nullable'],
            'category_id' => ['nullable','string', 'exists:categories,id'],//'exists:categories,id'
            'language_id' => ['string', 'exists:languages,id','required'],
            'social_type' => [Rule::in(GroupsSocialEnum::getValues()),'required'],

        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            sendError($validator->errors()->first(), null, 422)
        );
    }
}
