<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Tables</title>

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
          <a href="{{asset('admin')}}">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Sales representatives area</li>
        </ol>

        {{--flash message  --}}
        @include('admin.layouts.message')
        
        <div class="d-flex flex-row-reverse pb-3">
          <a class="btn btn-primary" href="{{route('admin.salesRep.create')}}">Add Content</a>
        </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-users"></i>
            Sales Representatives</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach ($getSalesRep as $salesRep)
                  <tr>
                    <td>{{$salesRep->name}}</td>
                    <td>
                      <img src="{{asset((isset($salesRep) && $salesRep->image != '')? 'images/sales_rep/'.$salesRep->image : 'images/sales_rep/no_image.jpg')}}" width="50px;" height="50px;" style="border-radius: 50%;" alt="">
                    </td>
                    <td>{{$salesRep->email}}</td>
                    <td>{{$salesRep->phone}}</td>
                    <td class="d-flex">
                      <a href="{{route('admin.edit.salesRep_content', $salesRep->id)}}" class="mr-3 btn btn-info">Edit</a>
                      <button type="button" class="btn btn-danger" data-salesRep-id="{{$salesRep->id}}" data-toggle="modal" data-target="#delete">Delete</button>
                      
                      {{-- modal --}}
                      <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Delete content</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="{{route('admin.salesRep.delete', $salesRep->id)}}" method="post">
                              @csrf
                              @method("DELETE")
                              <div class="modal-body">
                                Are you sure?
                              <input type="hidden" name="hidden_id" id="salesRep_id" value="" >
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-danger">Yes, Delete</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                              {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
                            </form>
                          </div>
                        </div>
                      </div>
                    </td>
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
      <script>
        $(document).ready(function(){
          $('#delete').on('show.bs.modal', function(event){
          var button = $(event.relatedTarget);
          var content_id = button.data('salesRep-id');
          var modal = $(this);
        
          modal.find('modal-body #salesRep_id').val(salesRep_id);
          });
        });
      </script>
</body>

</html>
