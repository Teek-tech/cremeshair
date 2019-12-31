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
            <a href="#">Pages</a>
          </li>
          <li class="breadcrumb-item active">Sales representative area</li>
        </ol>

        <!-- Page Content -->
        <section>
          @include('admin.layouts.message')
          <div class="salesRep-area mb-5">
            <h5>Add sales representative</h5>
            <div>
            <form action="{{route('admin.salesRep_area.save')}}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                  <label for="image">Sales rep image</label>
                  <input type="file" name="image" class="form-control col-md-6">
                </div>

                <div class="form-group">
                  <label for="name">Sales representative name</label>
                  <input type="text" name="name" class="form-control col-md-6" placeholder="sales rep name">
                </div>

                <div class="form-group">
                  <label for="phone">Sales representative phone number</label>
                  <input type="tel" name="phone" class="form-control col-md-6" placeholder="08102345622">
                </div>

                <div class="form-group">
                  <label for="email">Sales representative email</label>
                  <input type="email" name="email" class="form-control col-md-6" placeholder="rep@gmail.com">
                </div>

                <button type="submit" class="btn btn-primary">Add Rep</button>
              </form>
              <a href="{{route('admin.salesRep.index')}}" class="btn btn-primary float-right">Go back</a>

            </div>
          </div>
        </section>

      </div>
      <!-- /.container-fluid -->

      @include('admin.layouts.footer')

</body>

</html>
