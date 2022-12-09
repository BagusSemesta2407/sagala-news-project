@section('title')
    Data Berita
@endsection
@extends('layout/template')
@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>@yield('title')</h1>
      <div class="section-header-button">
        <a href="{{ route('berita.create') }}" class="btn btn-primary">Tambah</a>
      </div>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Posts</a></div>
        <div class="breadcrumb-item">All Posts</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Semua Data Berita</h4>
            </div>
            <div class="card-body">
              <div class="float-left">
                <select class="form-control selectric">
                  <option>Action For Selected</option>
                  <option>Move to Draft</option>
                  <option>Move to Pending</option>
                  <option>Delete Pemanently</option>
                </select>
              </div>
              <div class="float-right">
                <form>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                      <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </form>
              </div>

              <div class="clearfix mb-3"></div>
              
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr class="text-center pt-2">
                      <th>NO</th>
                      <th>Judul</th>
                      <th>Kategori</th>
                      <th>Thumbnail</th>
                      <th>Dibuat</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($Berita as $item)
                      <tr>
                        <td class="text-center">
                          {{ $loop->iteration }}
                          <div class="table-links">
                            <a href="#">View</a>
                            <div class="bullet"></div>
                            <a href="{{ route('berita.edit', Crypt::encryptString($item->id))}}">Edit</a>
                            <div class="bullet"></div>
                            <form action="{{ route('berita.destroy', $item->id) }}" method="POST" class="d-inline">
                              @csrf
                               <input type="hidden" name="_method" value="DELETE">
                                <button type="submit">Hapus</button> 
                              </form>
                          </div>
                        </td>
                        <td class="text-center">
                          {{ $item->judul }}
                        </td>
                        <td class="text-center">
                          {{ @$item->kategoriBerita->nama }}
                        </td>
                        <td class="text-center">
                          <img src="{{ $item->image_url }}" width="70px"
                            height="70px" alt="no-image" class="img-popup">
                        </td>
                        <td class="text-center">
                          {{ $item->tanggal }}
                        </td>
                        <td class="text-center">
                          @if ($item->status == 'Pending')
                            <div class="badge badge-warning">{{ $item->status }}</div> 
                          @else
                            <div class="badge badge-primary">{{ $item->status }}</div> 
                          @endif
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <div class="float-right">
                <nav>
                  <ul class="pagination">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                      </a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection