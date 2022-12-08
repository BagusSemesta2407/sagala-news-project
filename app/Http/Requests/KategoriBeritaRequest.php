<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KategoriBeritaRequest extends FormRequest
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
        $rules = [
            'nama'      => 'required'
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'nama.required'   => 'Kategori Berita Wajib Diisi',
        ];
    }
}
