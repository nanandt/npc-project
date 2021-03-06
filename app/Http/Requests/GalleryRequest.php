<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
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
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'video' =>'required|mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:30040'
        ];
    }
}
