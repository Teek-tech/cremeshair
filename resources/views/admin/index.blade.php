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
  <!-- Navbar -->
  @include('admin.layouts.navbar')

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
                @if ($getTotalSalesRep === 1)
                  <div class="mr-5">There is {{$getTotalSalesRep}} available sales sepresentative!</div>
                @elseif($getTotalSalesRep > 1)
                  <div class="mr-5">There are {{$getTotalSalesRep}} available sales sepresentatives!</div>
                @else
                  <div class="mr-5">There are no available sales sepresentatives!</div>
                @endif
                {{-- <div class="mr-5">There are {{$getTotalSalesRep}} sales sepresentatives!</div> --}}
              </div>
            <a class="card-footer text-white clearfix small z-1" href="{{route('admin.salesRep.index')}}">
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
                @if ($getProductPageContent->count() === 1)
                  <div class="mr-5">There is {{$getProductPageContent->count()}} availble product!</div>
                @elseif ($getProductPageContent->count() > 1)
                  <div class="mr-5">There are {{$getProductPageContent->count()}} availble products!</div>
                @else
                  <div class="mr-5">There are no availble products!</div>
                @endif
              </div>
              <a class="card-footer text-white clearfix small z-1" href="{{route('admin.products.index')}}">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
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
