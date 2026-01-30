<?php

namespace App\Services\Admin;

use Illuminate\Support\Facades\Validator;

class CreateAdminAction
{
    public function rules()
    {
        return [
            'first_name' => ['required'],
            'last_name' => ['nullable'],
            'email' => ['required', 'email'],
        ];
    }

    public function execute(array $data)
    {
        $validated = Validator::make($data, $this->rules())->validate();

        // Admin::create($validated);
        return $validated;
    }
}
