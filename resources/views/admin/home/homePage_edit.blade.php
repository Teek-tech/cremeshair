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
            <h5>Change Home Slider Text</h5>
            <!-- home page slider 1 start -->
            <div class="home_page_slide_1 mb-5">
              <div class="main-txt mb-3">
                <form action="{{route('admin.homepage.update', $getId->id )}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PATCH')
                  <div class="row">
                    <div class=" form-group col-md-6">
                      <label for="">Enter Title</label>
                      <input type="text" name="title" class="form-control" value="{{$getId->title}}" placeholder="Enter Big Header Title">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="image">Add Image</label>
                    <input type="file" class="form-control" name="image" value="{{$getId->image}}">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="">Rank</label>
                      <select name="rank" id=""  class="form-control">
                        <option value="{{$getId->rank}}">{{$getId->rank}}</option>
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
                    <div class="form-group col-md-6">
                      <label for="">Category</label>
                      <select name="category" id=""  class="form-control">
                       <option value="{{$getId->category}}">{{$getId->category}}</option>
                        <option value="home">Home</option>
                        <option value="services">Services</option>
                        <option value="products">Products</option>
                        <option value="testimonials">Testimonials</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="client_name">Client Name <small><i>(for testimonial area only)</i></small></label>
                    <input type="text" class="form-control" name="client_name" placeholder="client name" value="{{$getId->client_name}}">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="">Enter Sub Title</label>
                      <textarea class="form-control" name="description" id="" cols="30" rows="5">{{$getId->description}}</textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Update</button>
                </form>
                <a href="{{route('admin.home.index')}}" class="btn btn-primary float-right">Go back</a>
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
