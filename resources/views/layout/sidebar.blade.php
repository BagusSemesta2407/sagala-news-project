<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">SAGALA NEWS</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">SN</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="{{ request()->is('/') ? 'active' : '' }}">
          <a class="nav-link" href="/">
            <i class="fas fa-fire"></i> 
            <span> Dashboard </span>
          </a>
        </li>

        <li class="menu-header">Manajemen User</li>
        <li class="{{ request()->is('user*') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('user')}}">
            <i class="fas fa-users"></i>
            <span> User </span>
          </a>
        </li>

        <li class="menu-header">Berita</li>
        <li class="nav-item dropdown {{ request()->is('kategori-berita*') || request()->is('berita*') ? 'active' : '' }}">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-newspaper"></i> <span>Menu Berita</span></a>
          <ul class="dropdown-menu">
            <li class="{{ request()->is('kategori-berita') ? 'active' : '' }}">
              <a class="nav-link" href="{{ url ('kategori-berita')}}">Kategori Berita</a>
            </li>
            <li class="{{ request()->is('berita') ? 'active' : '' }}">
              <a class="nav-link" href="{{ url('berita') }}">Berita</a>
            </li>
            <li class=" active ">
              <a href="/komentar" class="nav-link">Komentar</a>
            </li>
          </ul>
        </li>
  </aside>
</div>