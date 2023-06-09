<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color: rgb(37, 37, 37);">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
            <span data-feather="database"></span>
            Assets
          </a>
        </li>
      </ul>
      @can('admin')
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span style="color: white;">Admin</span>
      </h6>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
            <span data-feather="command"></span>
            Categories
          </a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts2*') ? 'active' : '' }}" href="/dashboard/posts2">
            <span data-feather="book"></span>
            Users Assets
          </a>
        </li> --}}
      </ul>
      @endcan()

    </div>
  </nav>