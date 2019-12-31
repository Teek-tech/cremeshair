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
          <li class="breadcrumb-item active">Contact Page</li>
        </ol>

        <!-- Page Content -->
        <section>
          @include('admin.layouts.message')
          <div class="contact-area mb-5">
            <h5>Edit company's address and phone number</h5>
            <div>
            <form action="{{route('admin.edit.contact_update', $getId->id )}}" method="POST">
              @csrf
              @method('PATCH')
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" class="form-control col-md-6" name="address" placeholder="company's address" value="{{$getId->address}}">
                </div>

                <div class="form-group">
                  <label for="phone">Phone Number</label>
                  <input type="tel" name="phone" class="form-control col-md-6" placeholder="company's phone number" value="{{$getId->phone}}">
                </div>

                <div class="form-group">
                  <label for="email">Email Address</label>
                  <input type="email" name="email" class="form-control col-md-6" placeholder="company's email" value="{{$getId->email}}">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
              </form>
              <a href="{{route('admin.contact.index')}}" class="btn btn-primary float-right">Go back</a>
            </div>
          </div>
        </section>
      </div>
      <!-- /.container-fluid -->

      @include('admin.layouts.footer')

</body>

</html>
