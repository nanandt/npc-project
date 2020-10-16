<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoachRequest extends FormRequest
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
            'cabang_olahraga_id' => 'required|integer|exists:cabang_olahragas,cabang_olahraga_id',
            'nama_pelatih' => 'required|min:3|max:50',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ];
    }
}
