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
          <a href="{{asset('admin')}}">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Home Page</li>
        </ol>

        {{--flash message  --}}
        @include('admin.layouts.message')
        <div class="d-flex flex-row-reverse pb-3">
          <a class="btn btn-primary" href="{{route('admin.home.create')}}">Add Content</a>
        </div>
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-home"></i>
            Home Page Content</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Client Name</th>
                    <th>Rank</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Client Name</th>
                    <th>Rank</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach($getHomePageContent as $content)
                  <tr>
                    <td>{{$content->title}}</td>
                    <td>{{$content->description}}</td>
                    <td>
                      <img src="{{asset((isset($content) && $content->image != '')? 'images/home_page/'.$content->image : 'images/home_page/no_image.jpg')}}" width="50px;" height="50px;" style="border-radius: 50%;" alt="">
                    </td>
                    <td>{{$content->category}}</td>
                    <td>{{$content->client_name}}</td>
                    <td>{{$content->rank}}</td>
                    <td class="d-flex">
                      <a href="{{route('admin.edit.homepage-content', $content->id)}}" class="mr-3 btn btn-info">Edit</a>
                      <button type="button" class="btn btn-danger" data-contentId="{{$content->id}}" data-toggle="modal" data-target="#delete">Delete</button>
                    </td>
                    <!-- Modal -->
                    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete content</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="{{route('admin.homepage.delete', $content->id)}}" method="post">
                            @csrf
                            @method("DELETE")
                            <div class="modal-body">
                              Are you sure?
                              <input type="hidden" name="about_id" id="content_id" value="{{$content->id}}">
                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-danger">Delete</button>
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>

        
        
      </div>
      <!-- /.container-fluid -->

      @include('admin.layouts.footer')
      <script>
        $(document).ready(function(){
          $('#delete').on('show.bs.modal', function(event){
          var button = $(event.relatedTarget)
          var content_id = button.data('contentId')
          var modal = $(this)
          
          modal.find('modal-body #content_id' ).val(content_id);
          })
        });
      </script>

</body>

</html>
