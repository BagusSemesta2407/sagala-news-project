@section('title')
    Tambah Data User
@endsection
@extends('layout/template')
@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="{{ route('user.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>
        @if (@$User->exists)
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
        Data User
      </h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Posts</a></div>
        <div class="breadcrumb-item">Tambah Data User</div>
      </div>
    </div>

    @if (@$User->exists)
        <form id="modalForm" class="forms-sample" enctype="multipart/form-data" method="POST"
            action="{{ route('user.update', $User) }}">
            @method('put')
        @else
            <form id="modalForm" class="forms-sample" enctype="multipart/form-data" method="POST"
                action="{{ route('user.store') }}">
    @endif

    {{ csrf_field() }}
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Data User</h4>
            </div>
            <div class="card-body">
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama User</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Nama User" value="{{ old ('name', @$User->name)}}">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                <div class="col-sm-12 col-md-7">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old ('email', @$User->email)}}">
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
