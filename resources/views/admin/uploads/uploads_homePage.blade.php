<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Tables</title>

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
    @include('admin.layouts.navbar')

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    @include('admin.layouts.sidebar')

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
          <a href="{{asset('admin')}}">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Uploads</li>
          <li class="breadcrumb-item active">Home Page</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-boxes"></i>
            Products</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Rank</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Rank</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach($getHomePageContent as $content)
                  <tr>
                  <td>{{$content->title}}</td>
                  <td>{{$content->description}}</td>
                  <td>blah blah</td>
                  <td>{{$content->category}}</td>
                  <td>{{$content->rank}}</td>
                  <td>
                    <a href="" class="btn btn-warning">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                  </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          {{-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> --}}
        </div>

        {{-- <p class="small text-center text-muted my-5">
          <em>More table examples coming soon...</em>
        </p> --}}

      </div>
      <!-- /.container-fluid -->

      @include('admin.layouts.footer')

</body>

</html>
