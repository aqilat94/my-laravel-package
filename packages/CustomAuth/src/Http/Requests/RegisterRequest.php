<?php

namespace Mras\CustomAuth\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return CustomRegister::validationRules();
    }
}
