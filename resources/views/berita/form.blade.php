@section('title')
    Tambah Data Berita
@endsection
@extends('layout/template')
@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="{{ route('berita.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>
        @if (@$Berita->exists)
            Edit
            @php
                $aksi = 'Edit';
            @endphp
        @else
            Tambah
            @php
                $aksi = 'Tambah';
            @endphp
        @endif
        Data Berita
      </h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Posts</a></div>
        <div class="breadcrumb-item">Tambah Data Berita</div>
      </div>
    </div>
    @if (@$Berita->exists)
        <form id="modalForm" class="forms-sample" enctype="multipart/form-data" method="POST"
            action="{{ route('berita.update', $Berita) }}">
            @method('put')
        @else
            <form id="modalForm" class="forms-sample" enctype="multipart/form-data" method="POST"
                action="{{ route('berita.store') }}">
    @endif

    {{ csrf_field() }}
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Data Berita</h4>
            </div>
            <div class="card-body">
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori Berita</label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="kategori_id">
                    <option disabled selected>Pilih Kategori Berita</option>
                      @foreach ($kategoriBerita as $item)
                        <option value="{{ $item->id }}"
                          {{ old('kategori_id', @$Berita->kategori_id) == $item->id ? 'selected' : '' }}>
                          {{ $item->nama}}
                        </option>
                      @endforeach
                  </select>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Berita</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Berita" value="{{ old ('nama', @$Berita->nama)}}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul Berita</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Berita" value="{{ old ('judul', @$Berita->judul)}}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                <div class="col-sm-12 col-md-7">
                  <textarea class="summernote-simple form-control textarea" id="deskripsi" name="deskripsi" placeholder="Deskripsi Berita" >{{ old ('deskripsi', @$Berita->deskripsi)}}</textarea>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Berita</label>
                <div class="col-sm-12 col-md-7">
                  <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal Berita" value="{{ old ('tanggal', @$Berita->tanggal)}}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Waktu Berita</label>
                <div class="col-sm-12 col-md-7">
                  <input type="time" class="form-control" id="waktu" name="waktu" placeholder="Waktu Berita" value="{{ old ('waktu', @$Berita->waktu)}}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label for="foto" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Thumbnail</label>
                <div class="col-sm-12 col-md-7">
                  <div id="image-preview" class="image-preview">
                    <label for="image-upload" id="foto">Choose File</label>
                    <input type="file" class="dropify" name="foto" id="foto" data-default-file="{{ @$berita->image_url }}" data-allowed-file-extensions="jpeg jpg png">
                  </div>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tagar Berita</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control inputtags" id="tag" name="tag" placeholder="Tagar Berita" value="{{ old ('tag', @$Berita->tag)}}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="status">
                    <option disabled selected>Pilih Status</option>

                    <option value="Pending"
                      {{ old('status', @$Berita->status) == 'Pending' ? 'selected' : '' }}>
                      Pending</option>
                    <option value="Publish"
                    {{ old('status', @$Berita->status) == 'Publish' ? 'selected' : '' }}>
                    Publish</option>
                  </select>
                </div>
              </div>
              
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                  <button class="btn btn-primary">{{ $aksi }}</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection