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
          <li class="breadcrumb-item active">About Page</li>
        </ol>

        <!-- Page Content -->
        <section>
          <div class="showcase-area mb-5">
            <h5>Change the showcase area text</h5>
            <div class="">
              <div class="main-txt mb-3">
              <form action="{{route('admin.about_page_content.update', $getId->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PATCH')
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="title">Add Title</label>
                      <input type="text" name="title" class="form-control" placeholder="enter title" value="{{$getId->title}}">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="image">Add Image</label>
                      <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="category">Category</label>
                      <select name="category" class="form-control">
                        <option value="{{$getId->title}}">{{$getId->category}}</option>
                        <option value="showcase">Showcase</option>
                        <option value="who_are_we">Who are we</option>
                        <option value="our_vision">Our Vision</option>
                        <option value="about_our_hair">About our hair</option>
                      </select>
                    </div>
                    <div class="form-group col-md-12">
                      <label for="description">Add Description</label>
                      <textarea name="description" class="form-control" id="" cols="30" rows="10">{{$getId->description}}</textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Update</button>
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
