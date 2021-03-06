<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-icon">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">NPC Admin</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Nav Item - Charts -->
  <li class="nav-item {{ request()->is('admin/posts*') ? ' active' : '' }}">
    <a class="nav-link" href="{{ route('posts.index') }}">
      <i class="fas fa-fw fa-newspaper"></i>
      <span>Artikel</span></a>
  </li>

  <li class="nav-item  {{ request()->is('admin/messages*') ? ' active' : '' }}">
    <a class="nav-link" href="{{ route('messages.index') }}">
      <i class="fas fa-fw fa-comment-dots"></i>
      <span>Pesan</span></a>
  </li>

  <li class="nav-item  {{ request()->is('admin/cabang-olahraga*') ? ' active' : '' }}">
    <a class="nav-link" href="{{ route('cabang-olahraga.index') }}">
      <i class="fas fa-fw fa-trophy"></i>
      <span>Cabang Olahraga</span></a>
  </li>

  <li class="nav-item  {{ request()->is('admin/players*') ? ' active' : '' }}">
    <a class="nav-link" href="{{ route('players.index') }}">
      <i class="fas fa-fw fa-users"></i>
      <span>Pemain</span></a>
  </li>
  <li class="nav-item  {{ request()->is('admin/coachs*') ? ' active' : '' }}">
    <a class="nav-link" href="{{ route('coachs.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Pelatih</span></a>
  </li>
  <li class="nav-item  {{ request()->is('admin/photos*') ? ' active' : '' }}">
    <a class="nav-link" href="{{ route('photos.index') }}">
      <i class="fas fa-fw fa-camera"></i>
      <span>Foto</span></a>
  </li>
  <li class="nav-item  {{ request()->is('admin/video*') ? ' active' : '' }}">
    <a class="nav-link" href="{{ route('video.index') }}">
      <i class="fas fa-fw fa-camera"></i>
      <span>Video</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->
