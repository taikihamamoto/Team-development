<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmissionRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'main_title' => 'required|min:5',
            'title_1' => 'required|min:5',
            'text_1' => 'required|min:5',
            'title_2' => 'required|min:5',
            'text_2' => 'required|min:5',
            'title_3' => 'required|min:5',
            'text_3' => 'required|min:5',
            'image' => 'required',
            'money_goals' => 'required',
            'reception_deadline' => 'required',
        ];
    }
}
