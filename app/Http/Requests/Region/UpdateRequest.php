<?php

declare(strict_types=1);

namespace App\Http\Requests\Region;

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
                Rule::unique('regions')->ignore($this->region->id),
            ],
            'color' => 'required|string',
            'title' => 'required|array',
            'description' => 'required|array',
            'title.*' => 'string',
            'description.*' => 'string',
        ];
    }
}
