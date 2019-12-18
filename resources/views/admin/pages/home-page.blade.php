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

  <!-- sidebar -->
  @include('admin.layouts.sidebar')

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
          <a href="#">Pages</a>
          </li>
          <li class="breadcrumb-item active">Home Page</li>
        </ol>

        <!-- Page Content -->
        <section>
          <div class="admin_home_page_sliders">
            <h5>Change Home Slider Text</h5>
            <!-- home page slider 1 start -->
            <div class="home_page_slide_1 mb-5">
              <div class="main-txt mb-3">
                <form action="{{route('admin.home.save')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class=" form-group col-md-6">
                      <label for="">Enter Title</label>
                      <input type="text" name="title" class="form-control" placeholder="Enter Big Header Title">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="image">Add Image</label>
                      <input type="file" class="form-control" name="image">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="">Rank</label>
                      <select name="rank" id=""  class="form-control">
                        <option label="Choose"></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="3">4</option>
                        <option value="3">5</option>
                        <option value="3">6</option>
                        <option value="3">7</option>
                        <option value="3">8</option>
                        <option value="3">9</option>
                        <option value="3">10</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="">Category</label>
                      <select name="category" id=""  class="form-control">
                       <option label="Choose"></option>
                        <option value="home">Home</option>
                        <option value="services">Services</option>
                        <option value="products">Products</option>
                        <option value="testimonials">Testimonials</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="">Enter Sub Title</label>
                      <textarea class="form-control" name="description" id="" cols="30" rows="5"></textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Update</button>
                </form>
              </div>
            </div>
            <!-- home page slider 1 end -->

            <!-- home page slider 3 end -->
          </div>

          <div class="services_page mb-5" style="display:none;">
            <h5>Change Services section Text</h5>
            <div class="home_page_slide_1 mb-5">
              <h4>Services</h4>
              <div class="main-txt mb-3">
                <form>
                  <div class="row">
                    <div class=" form-group col-md-8">
                      <label for="">Service Name</label>
                      <input type="text" class="form-control" placeholder="Enter service name">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="">Rank</label>
                      <select name="" id=""  class="form-control">
                        <option label="Choose"></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="3">4</option>
                        <option value="3">5</option>
                        <option value="3">6</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="">Service Description</label>
                      <textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Add Service</button>
                </form>
              </div>
            </div>
          </div>

          <div class="products_area mb-5" style="display:none;">
            <h5>Add Products</h5>
            <div>
              <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="product-name">Product Name</label>
                    <input type="text" class="form-control" name="product-name" placeholder="enter product name">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="product-rank">Rank</label>
                    <select name="product-rank" class="form-control" id="">
                      <option label="choose"></option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                    </select>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="product-image">Product Image</label>
                    <input type="file" class="form-control" name="product-image">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-12">
                    <label for="product-description">Product Description</label>
                    <textarea name="product-description" class="form-control" cols="30" rows="5"></textarea>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Add Product</button>
              </form>
            </div>
          </div>

          <div class="testimonial_area mb-5" style="display:none;">
            <h5>Add customer feedback</h5>
            <div>
              <form action="">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="client-name">Client Name</label>
                    <input type="text" class="form-control" name="client-name" placeholder="client name">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="customer-image">customer image</label>
                    <input type="file" class="form-control" name="customer-image">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="feedback-rank">Rank</label>
                    <select class="form-control" name="feedback-rank" id="">
                      <option label="choose"></option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="feedback-topic">Feedback Topic</label>
                    <input type="text" class="form-control" name="feedback-topic" placeholder="Catchy phrase of what the client says">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="feedback-message">Message</label>
                    <textarea name="feedback-message" class="form-control" id="" cols="30" rows="5" placeholder="what the client says"></textarea>
                  </div>
                </div>
                <button class="btn btn-primary">Add feedback</button>
              </form>
            </div>
          </div>
        </section>

      </div>
      <!-- /.container-fluid -->

      @include('admin.layouts.footer')

</body>

</html>
