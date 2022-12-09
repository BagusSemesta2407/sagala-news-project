@section('title')
    Tambah Data Kategori Berita
@endsection
@extends('layout/template')
@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="{{ route('kategori-berita.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>
        @if (@$KategoriBerita->exists)
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
        Data Kategori Berita
      </h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Posts</a></div>
        <div class="breadcrumb-item">Tambah Data Kategori Berita</div>
      </div>
    </div>

    @if (@$KategoriBerita->exists)
        <form id="modalForm" class="forms-sample" enctype="multipart/form-data" method="POST"
            action="{{ route('kategori-berita.update', $KategoriBerita) }}">
            @method('put')
        @else
            <form id="modalForm" class="forms-sample" enctype="multipart/form-data" method="POST"
                action="{{ route('kategori-berita.store') }}">
    @endif

    {{ csrf_field() }}
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Data Kategori Berita</h4>
            </div>
            <div class="card-body">
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori Berita</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control @error('nama')
                     is-invalid
                  @enderror" id="nama" name="nama" placeholder="Kategori Berita" value="{{ old ('nama', @$KategoriBerita->nama)}}">
                </div>
              </div>
              @if ($errors->has('nama'))
                <span class="col-12 text-danger">{{ $errors->first('nama') }}</span>
              @endif
      
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
