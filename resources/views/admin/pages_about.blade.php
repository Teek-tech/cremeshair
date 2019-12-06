<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Blank Page</title>

  @include('admin.layouts.header')

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
      <a class="nav-link" href="{{asset('admin')}}">
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
          <a class="dropdown-item" href="{{asset('pagesHome')}}">Home Page</a>
          <a class="dropdown-item" href="{{asset('pagesAbout')}}">About us Page</a>
          <a class="dropdown-item" href="{{asset('pagesProducts')}}">Products page</a>
          <a class="dropdown-item" href="{{asset('pagesContact')}}">Contact Page</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{asset('adminProducts')}}">
          <i class="fas fa-boxes"></i>
          <span>Products</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{asset('adminSalesRep')}}">
          <i class="fas fa-users"></i>
          <span>Sales Representative</span></a>
      {{-- <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li> --}}
      {{-- <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li> --}}
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Pages</a>
          </li>
          <li class="breadcrumb-item active">About Page</li>
        </ol>

        <!-- Page Content -->
        <section>
          <div class="showcase-area mb-5">
            <h5>Change the showcase area text</h5>
            <div class="">
              <div class="main-txt mb-3">
                <div class="row">
                  <div class="col-md-2">Main Text</div>
                  <div class="col-md-6"><input type="text" class="form-control"></div>
                  <div class="col-md-2"><button class="btn btn-primary">Update</button></div>
                </div>
              </div>
              <div class="sub-txt">
                <div class="row">
                  <div class="col-md-2">Sub Text</div>
                  <div class="col-md-6"><input type="text" class="form-control"></div>
                  <div class="col-md-2"><button class="btn btn-primary">Update</button></div>
                </div>
              </div>
            </div>
          </div>

          <div class="salesRep-area mb-5">
            <h5>Add sales representative</h5>
            <div>
              <form action="">
                <div class="form-group">
                  <label for="rep-image">Sales rep image</label>
                  <input type="file" name="rep-image" class="form-control col-md-6">
                </div>

                <div class="form-group">
                  <label for="rep-name">Sales representative name</label>
                  <input type="text" name="rep-name" class="form-control col-md-6" placeholder="sales rep name">
                </div>

                <div class="form-group">
                  <label for="rep-phone">Sales representative phone number</label>
                  <input type="tel" name="rep-phone" class="form-control col-md-6" placeholder="08102345622">
                </div>

                <div class="form-group">
                  <label for="rep-email">Sales representative email</label>
                  <input type="email" name="rep-email" class="form-control col-md-6" placeholder="rep@gmail.com">
                </div>

                <button class="btn btn-primary">Add Rep</button>
              </form>
            </div>
          </div>
        </section>

      </div>
      <!-- /.container-fluid -->

      @include('admin.layouts.footer')

</body>

</html>
