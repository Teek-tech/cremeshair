<!-- Sidebar -->
<ul class="sidebar navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="{{route('admin.index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="{{route('admin.home.index')}}">Home Page</a>
            <a class="dropdown-item" href="{{route('admin.about.index')}}">About us Page</a>
            <a class="dropdown-item" href="{{route('admin.salesRep.index')}}">Sales Rep Area</a>
            <a class="dropdown-item" href="{{route('admin.products.index')}}">Products page</a>
            <a class="dropdown-item" href="{{route('admin.contact.index')}}">Contact Page</a>
          </div>
        </li>
      </ul>