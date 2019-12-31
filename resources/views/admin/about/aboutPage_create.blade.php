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
          <li class="breadcrumb-item active">About Page</li>
        </ol>

        <!-- Page Content -->
        <section>
          @include('admin.layouts.message')
          <div class="showcase-area mb-5">
            <h5>Add Content</h5>
            <div class="">
              <div class="main-txt mb-3">
              <form action="{{route('admin.about_page_content.save')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="title">Add Title</label>
                      <input type="text" name="title" class="form-control" placeholder="enter title">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="image">Add Image</label>
                      <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="category">Category</label>
                      <select name="category" class="form-control">
                        <option label="choose"></option>
                        <option value="showcase">Showcase</option>
                        <option value="who are we">Who are we</option>
                        <option value="our vision">Our Vision</option>
                        <option value="about our hair">About our hair</option>
                      </select>
                    </div>
                    <div class="form-group col-md-12">
                      <label for="description">Add Description</label>
                      <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Add Content</button>
                  <a href="{{route('admin.about.index')}}" class="btn btn-primary float-right">Go back</a>
                </form>
              </div>
              
            </div>
          </div>
        </section>

      </div>
      <!-- /.container-fluid -->

      @include('admin.layouts.footer')

</body>

</html>
