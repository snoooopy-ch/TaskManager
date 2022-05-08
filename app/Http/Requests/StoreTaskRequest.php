<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
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
            'name' => 'required|string|max:255|unique:tasks',
            'priority' => 'required|integer|min:1',
            'project_id'=> 'required|integer'
        ];
    }

    public function messages() {
        return [
            'project_id.integer' => 'Please select a project.',
        ];
    }
}
