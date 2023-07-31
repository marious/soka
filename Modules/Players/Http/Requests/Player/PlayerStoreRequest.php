<?php

namespace Modules\Players\Http\Requests\Player;

use Illuminate\Foundation\Http\FormRequest;

class PlayerStoreRequest extends FormRequest
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
            'team_id' => 'required|exists:teams,id',
            'name' => 'required|max:255|string',
            'dob' => 'required',
            'position' => 'required|max:255|string',
            'height' => 'required',
            'matches' => 'required',
            'soka_score' => 'required',
            'attacking' => 'required',
            'defensive' => 'required',
            'passing' => 'required',
            'possession' => 'required',
            'image' => 'nullable|image',
        ];
    }
}
