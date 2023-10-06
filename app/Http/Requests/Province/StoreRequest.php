<?php

declare(strict_types=1);

namespace App\Http\Requests\Province;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'slug' => [
                'required',
                'string',
                Rule::unique('provinces'),
            ],
            'ekatte' => ['required', 'string'],
            'code' => ['required', 'string'],
            'name' => ['required', 'array'],
            'description' => ['required', 'array'],

            'name.*' => ['required', 'string'],
            'description.*' => ['required', 'string'],
        ];
    }
}
