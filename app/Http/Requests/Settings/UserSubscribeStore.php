<?php

namespace App\Http\Requests\Settings;

use Illuminate\Foundation\Http\FormRequest;

class UserSubscribeStore extends FormRequest
{
    public function rules()
    {
        return [
            'tier' => 'required',
            'payment_id' => 'required_without:is_downgrade',
            'reason' => 'nullable',
        ];
    }
}
