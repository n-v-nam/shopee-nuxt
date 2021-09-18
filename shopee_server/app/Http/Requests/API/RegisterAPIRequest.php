<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Http\Utils\AppUtils;

class RegisterAPIRequest extends FormRequest
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
            'email' => [ 
                'required',
                'string',
                'email',
                'max:256',
                Rule::unique('mst_user')->where(function ($query)  {
                    return $query->where('state_flg', '!=', AppUtils::STATE_FLAG_DELETE);
                })
            ],
            'password' => 'required|min:6',
        ];
    }
}
