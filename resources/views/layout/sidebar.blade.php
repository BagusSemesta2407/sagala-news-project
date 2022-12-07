<ul class="sidebar-menu">
    <li class="menu-header">Dashboard</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
      <ul class="dropdown-menu">
        <li class="{{ request()->is('') ? 'active' : '' }}">
          <a class="nav-link" href="/">Dashboard</a>
        </li>
      </ul>
    </li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown"><i class="fas fa-bicycle"></i><span>Data</span></a>
      <ul class="dropdown-menu">
        <li class="{{ request()->is('kategori') ? 'active' : '' }}">
          <a class="nav-link" href="kategori">Kategori Berita</a>
        </li>
        <li class="{{ request()->is('berita') ? 'active' : '' }}">
          <a class="nav-link" href="berita">Berita</a>
        </li>
      </ul>
    </li>
</ul>