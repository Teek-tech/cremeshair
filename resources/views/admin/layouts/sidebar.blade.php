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
            {{-- <h6 class="dropdown-header">Login Screens:</h6> --}}
            <a class="dropdown-item" href="{{route('admin.home.page')}}">Home Page</a>
            <a class="dropdown-item" href="{{route('admin.about_page_content')}}">About us Page</a>
            <a class="dropdown-item" href="{{route('admin.salesRep_area')}}">Sales Rep Area</a>
            <a class="dropdown-item" href="{{route('admin.products_page_content')}}">Products page</a>
            <a class="dropdown-item" href="{{route('admin.contact_page')}}">Contact Page</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>uploads</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            {{-- <h6 class="dropdown-header">Login Screens:</h6> --}}
            <a class="dropdown-item" href="{{route('admin.uploads.home')}}">Home Page</a>
            <a class="dropdown-item" href="{{route('admin.uploads.about')}}">About us Page</a>
            <a class="dropdown-item" href="{{route('admin.uploads.salesRep')}}">Sales Rep Area</a>
            <a class="dropdown-item" href="{{route('admin.uploads.products')}}">Products page</a>
            <a class="dropdown-item" href="{{route('admin.uploads.contact')}}">Contact Page</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.products')}}">
            <i class="fas fa-boxes"></i>
            <span>Products</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.salesRep')}}">
            <i class="fas fa-users"></i>
            <span>Sales Representative</span>
          </a>
      </ul>