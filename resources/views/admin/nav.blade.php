<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="typcn typcn-device-desktop menu-icon"></i>
          <span class="menu-title">Dashboard</span>
          <div class="badge badge-danger">new</div>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('watch') }}">
          <i class="typcn typcn-document-text menu-icon"></i>
          <span class="menu-title">Add Product</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('watch-table') }}">
            <i class="typcn typcn-user-add-outline menu-icon"></i>
            <span class="menu-title">All Product</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="{{ route('cart-table') }}">
            <i class="typcn typcn-globe-outline menu-icon"></i>
            <span class="menu-title">All Cart</span>
        </a>
    </li>
    
    <li class="nav-item">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a class="nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault(); this.closest('form').submit();">
                <i class="typcn typcn-mortar-board menu-icon"></i>
                <span class="menu-title">Log Out</span>
            </a>
        </form>
    </li>
    

    </ul>
  </nav>                     