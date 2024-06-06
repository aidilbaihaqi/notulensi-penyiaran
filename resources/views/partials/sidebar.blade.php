<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fa-solid fa-gauge mx-2"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('siaran.index') }}">
        <i class="fa-solid fa-radio mx-2"></i>
        <span class="menu-title">Siaran</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('notulensi.index') }}">
        <i class="fa-regular fa-file mx-2"></i>
        <span class="menu-title">Notulensi</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('arsip.index') }}">
        <i class="fa-regular fa-folder-open mx-2"></i>
        <span class="menu-title">Arsip</span>
      </a>
    </li>
  </ul>
</nav>