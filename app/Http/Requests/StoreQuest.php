<?php

namespace App\Http\Requests;

use App\Facades\Limit;
use App\Traits\ApiRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreQuest extends FormRequest
{
    use ApiRequest;

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
        $rules = [
            'name' => 'required|max:191',
            'entry' => 'nullable|string',
            'type' => 'nullable|string|max:191',
            'image' => 'mimes:jpeg,png,jpg,gif,webp|max:' . Limit::upload(),
            'image_url' => 'nullable|url|active_url',
            'quest_id' => 'nullable|integer|exists:quests,id',
            'character_id' => 'nullable|integer|exists:characters,id',
            'template_id' => 'nullable',
        ];

        // If the calendar is present and not null, but we aren't "skipping" it (editing but without permission)
        if (request()->has('calendar_id') && request()->post('calendar_id') !== null && !request()->has('calendar_skip')) {
            $rules['calendar_day'] = 'required_with:calendar_id|min:1';
            $rules['calendar_year'] = 'required_with:calendar_id';

            if (request()->has('length')) {
                $rules['length'] = 'required_with:calendar_id|min:1';
            }
        }

        $self = request()->route('quest');
        if (!empty($self)) {
            $rules['quest_id'] = [
                'nullable',
                'integer',
                'not_in:' . ((int) $self->id),
                Rule::exists('quests', 'id')->where(function ($query) use ($self) {
                    return $query->whereNull('quest_id')->orWhere('quest_id', '!=', $self->id);
                }),
            ];
        }

        return $this->clean($rules);
    }
}
