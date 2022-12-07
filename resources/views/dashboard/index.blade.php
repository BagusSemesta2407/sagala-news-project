@section('title')
    Dashboard
@endsection
@extends('layout/template')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>@yield('title')</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Kategori Berita</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-4">
                                <div class="text-small float-right font-weight-bold text-muted">2,100</div>
                                <div class="font-weight-bold mb-1">Google</div>
                                <div class="progress" data-height="3">
                                    <div class="progress-bar" role="progressbar" data-width="80%" aria-valuenow="80"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="text-small float-right font-weight-bold text-muted">1,880</div>
                                <div class="font-weight-bold mb-1">Facebook</div>
                                <div class="progress" data-height="3">
                                    <div class="progress-bar" role="progressbar" data-width="67%" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="text-small float-right font-weight-bold text-muted">1,521</div>
                                <div class="font-weight-bold mb-1">Bing</div>
                                <div class="progress" data-height="3">
                                    <div class="progress-bar" role="progressbar" data-width="58%" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="text-small float-right font-weight-bold text-muted">884</div>
                                <div class="font-weight-bold mb-1">Yahoo</div>
                                <div class="progress" data-height="3">
                                    <div class="progress-bar" role="progressbar" data-width="36%" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="text-small float-right font-weight-bold text-muted">473</div>
                                <div class="font-weight-bold mb-1">Kodinger</div>
                                <div class="progress" data-height="3">
                                    <div class="progress-bar" role="progressbar" data-width="28%" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="text-small float-right font-weight-bold text-muted">418</div>
                                <div class="font-weight-bold mb-1">Multinity</div>
                                <div class="progress" data-height="3">
                                    <div class="progress-bar" role="progressbar" data-width="20%" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
