<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">NPC Admin</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Nav Item - Charts -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('posts.index') }}">
      <i class="fas fa-fw fa-newspaper"></i>
      <span>Artikel</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="#">
        {{-- {{ route('messages.index') }} --}}
      <i class="fas fa-fw fa-comment-dots"></i>
      <span>Pesan</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="#">
        {{-- {{ route('cabang-olahraga.index') }} --}}
      <i class="fas fa-fw fa-trophy"></i>
      <span>Cabang Olahraga</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="#">
        {{-- {{ route('players.index') }} --}}
      <i class="fas fa-fw fa-users"></i>
      <span>Pemain</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">
        {{-- {{ route('coachs.index') }} --}}
      <i class="fas fa-fw fa-user"></i>
      <span>Pelatih</span></a>
  </li>

  <!-- Nav Item - Tables -->
  <li class="nav-item">
    <a class="nav-link" href="tables.html">
      <i class="fas fa-fw fa-table"></i>
      <span>Tables</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->
