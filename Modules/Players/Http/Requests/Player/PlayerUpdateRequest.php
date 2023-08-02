<?php

namespace Modules\Players\Http\Requests\Player;

use Illuminate\Foundation\Http\FormRequest;

class PlayerUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'team_id' => 'sometimes|exists:teams,id',
            'name' => 'sometimes|max:255|string',
            'dob' => 'sometimes',
            'position' => 'sometimes|max:255|string',
            'height' => 'sometimes',
            'matches' => 'sometimes',
            'soka_score' => 'sometimes',
            'attacking' => 'sometimes',
            'defensive' => 'sometimes',
            'passing' => 'sometimes',
            'possession' => 'sometimes',
            'image' => 'nullable|image',
        ];
    }
}
