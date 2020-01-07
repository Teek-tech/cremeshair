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
  <!-- Navbar -->
  @include('admin.layouts.navbar')

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
          @include('admin.layouts.message')
          <div class="admin_home_page_sliders">
            <h5>Add Content</h5>
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
                    <div class="form-group col-md-3">
                      <label for="image">Add Image</label>
                      <input type="file" class="form-control" name="image">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="">Rank</label>
                      <select name="rank" id=""  class="form-control">
                        <option label="Choose"></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="">Category</label>
                      <select name="category" id=""  class="form-control">
                        <option label="Choose"></option>
                        <option value="home">Home</option>
                        <option value="services">Services</option>
                        <option value="products">Products</option>
                        <option value="testimonials">Testimonials</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="">Client Name <small><i>(for testimonial area only)</i></small></label>
                      <input type="text" class="form-control" name="client_name" placeholder="Client Name">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="">Enter Sub Title</label>
                      <textarea class="form-control" name="description" id="" cols="30" rows="5"></textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Add Content</button>
                  <a href="{{route('admin.home.index')}}" class="btn btn-primary float-right">Go back</a>
                </form>
              </div>
            </div>
            <!-- home page slider 1 end -->

            <!-- home page slider 3 end -->
          </div>
        </section>

      </div>
      <!-- /.container-fluid -->

      @include('admin.layouts.footer')

</body>

</html>
