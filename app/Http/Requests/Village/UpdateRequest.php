<?php

declare(strict_types=1);

namespace App\Http\Requests\Village;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
                Rule::unique('villages')->ignore($this->province->id),
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
