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
          <li class="breadcrumb-item active">Products Page</li>
        </ol>

        <!-- Page Content -->
        <section>
          <div class="products-area mb-5">
            <h5>Add products</h5>
            <div>
            <form action="{{route('admin.products_page_content.save')}}" method="POST" enctype="multipart/form-data">
              @csrf  
              <div class="form-group">
                  <label for="image">Product Image</label>
                  <input type="file" name="image" class="form-control col-md-6">
                </div>

                <div class="form-group">
                  <label for="prodcut-name">Product Name</label>
                  <input type="text" class="form-control col-md-6" name="name" placeholder="Product name">
                </div>

                <div class="form-group">
                  <label for="color">Product Color</label>
                  <input type="text" class="form-control col-md-6" name="color" placeholder="product color">
                </div>

                <div class="form-group">
                  <label for="size">Product Size</label>
                  <input type="text" class="form-control col-md-6" name="size" placeholder="product size">
                </div>

                <div class="form-group">
                  <label for="weight">Product weight</label>
                  <input type="text" class="form-control col-md-6" name="weight" placeholder="product weight">
                </div>

                <div class="form-group">
                  <label for="length">Product length</label>
                  <input type="text" class="form-control col-md-6" name="length" placeholder="product lenght">
                </div>

                <button type="submit" class="btn btn-primary">Add Product</button>
              </form>
            </div>
          </div>
        </section>

      </div>
      <!-- /.container-fluid -->

      @include('admin.layouts.footer')

</body>

</html>
