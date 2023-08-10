<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|integer|between:0,2',

        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'The title field is required.',
            'title.string' => 'The title field must be string.',
            'title.max' => 'The title field must be less than 255 characters.',
            'description.string' => 'The description field must be string.',
            'status.required' => 'The status field is required.',
            'status.integer' => 'The status field must be integer.',
        ];
    }
}
