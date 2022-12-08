<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">Stisla</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="{{ request()->is('/') ? 'active' : '' }}">
          <a class="nav-link" href="/">
            <i class="fas fa-fire"></i> 
            <span> Dashboard </span>
          </a>
        </li>
        
        {{-- <li class="nav-item dropdown {{ request()->is('/') || request()->is('/masterAkun') ? 'active' : '' }}">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          <ul class="dropdown-menu">
            <li class="{{ request()->is('/masterAkun') ? 'active' : '' }}"><a class="nav-link" href="/masterAkun">Master Akun</a></li>
          </ul>
        </li> --}}

        <li class="menu-header">Manajemen User</li>
        <li class="{{ request()->is('/') ? 'active' : '' }}">
          <a class="nav-link" href="/">
            <i class="fas fa-fire"></i> 
            <span> User </span>
          </a>
        </li>
        <li class="menu-header">Berita</li>
        <li class="nav-item dropdown {{ request()->is('/kategori') || request()->is('/berita') ? 'active' : '' }}">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Menu Berita</span></a>
          <ul class="dropdown-menu">
            <li class="{{ request()->is('/kategori') ? 'active' : '' }}"><a class="nav-link" href="{{ url ('kategori-berita')}}">Kategori Berita</a></li>
            <li class="{{ request()->is('/berita') ? 'active' : '' }}"><a class="nav-link" href="/berita">Berita</a></li>
            <li class=" active "><a href="/komentar" class="nav-link">Komentar</a></li>
          </ul>
        </li>
      {{-- <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
          <i class="fas fa-rocket"></i> Documentation
        </a>
      </div> --}}
  </aside>
</div>