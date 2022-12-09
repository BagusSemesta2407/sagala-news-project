@section('title')
    Data User
@endsection
@extends('layout/template')
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>@yield('title')</h1>
        <div class="section-header-button">
          <a href="{{ route('user.create')}}" class="btn btn-primary">Tambah</a>
        </div>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="/">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Posts</a></div>
          <div class="breadcrumb-item">Semua Data User</div>
        </div>
      </div>
      <div class="section-body">
        <div class="row mt-4">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Semua Data User</h4>
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
                        <th>No</th>
                        <th>Nama User</th>
                        <th>Email</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($User as $item)
                        <tr class="text-center pt-2">
                          <td>
                            {{ $loop->iteration }}
                          </td>
                          <td>{{ $item->name}}
                            <div class="table-links">
                              <a href="#">View</a>
                              <div class="bullet"></div>
                              <a href="{{ route('user.edit', Crypt::encryptString($item->id))}}">Edit</a>
                              <div class="bullet"></div>
                              <form action="{{ route('user.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                   <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-sm btn-danger" type="submit">
                                      Hapus
                                    </button>
                              </form>
                            </div>
                          </td>
                          <td>
                            {{$item->email}}
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