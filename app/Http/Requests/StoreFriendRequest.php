<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFriendRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;
    protected $redirect = '/api/friend';
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'friend_name'           => 'required',
            'friend_birthday_date'  => 'required|date_format:Y-m-d',
            'friend_email'          => 'nullable',
            'friend_whatsapp'       => 'nullable',
            'friend_instagram'      => 'nullable',
            'friend_facebook'       => 'nullable'
        ];
    }
}
