<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConferenceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'speakers' => ['required', 'string'],
            'date' => ['required', 'date'],
            'time' => ['required'],
            'address' => ['required', 'string'],
        ];
    }
}
