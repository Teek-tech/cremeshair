<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Dashboard</title>

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
          <a href="{{('admin')}}">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-6 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-users"></i>
                </div>
                <div class="mr-5">There are 6 sales sepresentatives!</div>
              </div>
            <a class="card-footer text-white clearfix small z-1" href="{{asset('adminSalesRep')}}">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-6 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-boxes"></i>
                </div>
                <div class="mr-5">There are 12 availble products!</div>
              </div>
            <a class="card-footer text-white clearfix small z-1" href="{{asset('adminProducts')}}">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          {{-- <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">123 New Orders!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div> --}}
          {{-- <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">13 New Tickets!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div> --}}
        </div>

        <!-- Area Chart Example-->
        <div class="card mb-3" style="display: none;">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Area Chart Example</div>
          <div class="card-body">
            <canvas id="myAreaChart" width="100%" height="30"></canvas>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-boxes"></i>
            products</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Color</th>
                    <th>Size</th>
                    <th>Weight</th>
                    <th>Length</th>
                    {{-- <th>Action</th> --}}
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Color</th>
                    <th>Size</th>
                    <th>Weight</th>
                    <th>Length</th>
                    {{-- <th>Action</th> --}}
                  </tr>
                </tfoot>
                <tbody>
                  @foreach ($getProductPageContent as $product)
                  <tr>
                  <td>{{$product->name}}</td>
                    <td>{{$product->color}}</td>
                    <td>{{$product->size}}</td>
                    <td>{{$product->weight}}</td>
                    <td>{{$product->length}}</td>
                    {{-- <td>$320,800</td> --}}
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          {{-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> --}}
        </div>

        <!-- DataTables Example -->
        <div class="card mb-3" style="display:none;">
          <div class="card-header">
            <i class="fas fa-users"></i>
            Sales Representatives</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    {{-- <th>Action</th> --}}
                    {{-- <th>Length</th> --}}
                    {{-- <th>Action</th> --}}
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    {{-- <th>Action</th> --}}
                    {{-- <th>Length</th> --}}
                    {{-- <th>Action</th> --}}
                  </tr>
                </tfoot>
                <tbody>
                  @foreach($getHomePageContent as $homepage)
                  <tr>
                    <td>{{$homepage->title}}</td>
                    <td>{{$homepage->description}}</td>
                    <td>{{$homepage->category}}</td>
                  </tr>
                 @endforeach
                
                </tbody>
              </table>
            </div>
          </div>
          {{-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> --}}
        </div>

      </div>
      <!-- /.container-fluid -->

      @include('admin.layouts.footer')

</body>

</html>
