<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class Berita extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $appends = ['image_url'];
    /**
     * Get the Kategori Berita that owns the Berita
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    // public function KategoriBerita(): BelongsTo
    // {
    //     return $this->belongsTo(Kategori::class);
    // }

    /**
     * Get the user that owns the Berita
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kategoriBerita(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
    


    /**
     * Get the user that owns the Berita
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'foreign_key');
    }

    public static function saveImage($request)
    {
        $filename = null;

        if ($request->foto) {
            $file = $request->foto;

            $ext = $file->getClientOriginalExtension();
            $filename = date('YmdHis') . uniqid() . '.' .$ext;

            $file->storeAs('public/image/berita/',$filename);
        }

        return $filename;
    }

    public static function deleteImage($id)
    {
        $Berita = Berita::firstWhere('id', $id);

        if ($Berita->foto != null) {
            $path = 'public/image/berita/' . $Berita->foto;

            if (Storage::exists($path)) {
                Storage::delete('public/image/berita/' . $Berita->foto);
            }
        }
    }

    public function getImageUrlAttribute()
    {
        if ($this->foto) {
            return asset('storage/image/berita/' . $this->foto);
        } else {
            return asset('images/customer/' . $this->defaultFiles['avatar']);
        }

        return null;
    }

}
