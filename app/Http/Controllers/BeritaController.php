<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Berita;
Use App\Models\Kategori;
Use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Crypt;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Berita = Berita::get();
        return view('berita.index', compact('Berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoriBerita = Kategori::oldest('nama')->get();
        $User = User::oldest('name')->get();

        return view('berita.form',[
            'kategoriBerita' => $kategoriBerita,
            'User'           => $User
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = Berita::saveImage($request);

        Berita::create([
            'kategori_id'   => $request->kategori_id,
            'nama'          => $request->nama,
            'judul'         => $request->judul,
            'deskripsi'     => $request->deskripsi,
            'tanggal'       => $request->tanggal,
            'waktu'         => $request->waktu,
            'tag'           => $request->tag,
            'status'        => $request->status,
            'foto'         => $image,
        ]);

        return redirect('berita');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $id = Crypt::decryptString($id);
        } catch (decryptException $e) {
            abort(404);
        }

        $kategoriBerita = Kategori::oldest('nama')->get();

        $Berita = Berita::find($id);

        return view('berita.form', compact(['Berita', 'kategoriBerita']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = [
            'kategori_id'   => $request->kategori_id,
            'nama'          => $request->nama,
            'judul'         => $request->judul,
            'deskripsi'     => $request->deskripsi,
            'tanggal'       => $request->tanggal,
            'waktu'         => $request->waktu,
            'tag'           => $request->tag,
            'status'        => $request->status,
        ];

        $image = Berita::saveImage($request);

        if ($image) {
            $data['foto'] = $image;

            Berita::deleteImage($id);
        }

        Berita::where('id', $id)->update($data);

        return redirect('berita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Berita = Berita::find($id);

        if ($Berita->foto) {
            Berita::deleteImage($id);
        }

        $Berita->delete();
        

        return redirect()->back();
    }
}
