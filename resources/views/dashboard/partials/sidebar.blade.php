<div class=" col-md-2 col-6 p-0 sidebar">
    <ul class="nav flex-column ">
      @if (auth()->user()->role_id <= 2)
        <li class="nav-item {{Request::is('dashboard/admin') ? 'sidebar-active' : ''}}">
          <a class="nav-link" href="/dashboard/admin">Daftar Admin</a>
        </li>
        <li class="nav-item {{Request::is('dashboard/users') ? 'sidebar-active' : ''}}">
          <a class="nav-link " href="/dashboard/users">Daftar User</a>
        </li>
        <li class="nav-item {{Request::is('dashboard/stockmasuk') ? 'sidebar-active'  : ''}}">
          <a class="nav-link " href="/dashboard/stockmasuk">Daftar Stock Masuk</a>
        </li>
      @endif
      @if (auth()->user()->role_id <= 4)
        <li class="nav-item {{Request::is('dashboard/stocks') ? 'sidebar-active' : ''}}">
          <a class="nav-link " href="/dashboard/stocks">Daftar Stock</a>
        </li>
      @endif
      <li class="nav-item {{Request::is('dashboard/obats') ? 'sidebar-active' : ''}}">
        <a class="nav-link" href="/dashboard/obats">Daftar Obat</a>
      </li>
    </ul>
</div>