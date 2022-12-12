<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BeritaRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {

        $rules = [
            'nama'=> 'required',
            'judul'=> 'required',
            'tanggal'=> 'required',
            'waktu'=>'required',
            'deskripsi'=>'required',
            'tag'=>'required',
            'status'=>'required'

        ];

        if ($this->_method != 'put') {
            $rules['foto'] = 'required';
        }

        return $rules;
    }

    public function messages()
    {
        return  [
            'nama.required'=>'Nama Berita Wajib Diisi',
            'judul.required'=>'Judul Berita Wajib Diisi',
            'tanggal.required'=>'Tanggal Berita Wajib Diisi',
            'waktu.required'=>'Waktu Wajib Diisi',
            'foto.required'=>'Thumbnail Wajib Diisi',
            'deskripsi.required'=>'Deskripsi Wajib Diisi',
            'tag.required'=>'Tag Wajib Diisi',
            'status.required'=>'Status Wajib Dipilih'
        ];

        
    }
}
