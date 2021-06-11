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
            'user_id' => '',
            'main_title' => 'required',
            'title_1' => 'required',
            'text_1' => 'required',
            'title_2' => 'required',
            'text_2' => 'required',
            'title_3' => 'required',
            'text_3' => 'required',
            'image' => 'image|required',
            'money_goals' => 'required|',
            'reception_deadline' => 'required|after:yesterday'
        ];
    }
}
