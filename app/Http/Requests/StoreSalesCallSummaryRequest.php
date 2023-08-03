<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSalesCallSummaryRequest extends FormRequest
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
            'date'=>['required','date'],
            'company'=>['required'],
            'user_id'=>['required','exists:users,id'],
            'contact_person'=>['required'],
            'email_address'=>['required'],
            'phone_number'=>['required'],
            'notes'=>['required']
        ];
    }
}