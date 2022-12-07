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
        <li class="nav-item dropdown {{ request()->is('/') || request()->is('/masterAkun') ? 'active' : '' }}">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          <ul class="dropdown-menu">
            <li class="{{ request()->is('/') ? 'active' : '' }}"><a class="nav-link" href="/">General Dashboard</a></li>
            <li class="{{ request()->is('/masterAkun') ? 'active' : '' }}"><a class="nav-link" href="/masterAkun">Master Akun</a></li>
          </ul>
        </li>
        <li class="menu-header">Berita</li>
        <li class="nav-item dropdown {{ request()->is('/kategori') || request()->is('/berita') ? 'active' : '' }}">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Layout</span></a>
          <ul class="dropdown-menu">
            <li class="{{ request()->is('/kategori') ? 'active' : '' }}"><a class="nav-link" href="/kategori">Kategori Berita</a></li>
            <li class="{{ request()->is('/berita') ? 'active' : '' }}"><a class="nav-link" href="/berita">Berita</a></li>
          </ul>
        </li>
        <li class="menu-header">Komentar</li>
        <li class=" active ">
          <a href="/komentar" class="nav-link">
            <i class="fas fa-fire"></i>
            <span>Komentar</span>
          </a>
        </li>
      <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
          <i class="fas fa-rocket"></i> Documentation
        </a>
      </div>
  </aside>
</div>