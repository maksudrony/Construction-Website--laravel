<!DOCTYPE html>
<html lang="en">
    <head>
        @include("admin.admincss")
    </head>
    <body class="sb-nav-fixed">
        <div id="layoutSidenav">
        @include("admin.adminNavbar")

        <div id="layoutSidenav_content">       
            <div class="container-fluid">
                <div class="row">
                    <div class="col-3 col-lg-3"></div>
                    <div class="col-6 col-lg-6">
                        <div class="card-body mt-2 user-form" style="background-color: #ECF9FF">
                            <form action="{{ url('/uploadimage') }}" method="post" enctype="multipart/form-data">
        
                                @csrf 
                                {{-- we want to upload data to the database
                                thats why we used csrf --}}
                
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-2 mt-2"><label for="">Title: </label></div>
                                    <div class="col-10"><input class="form-control bg-light text-dark" type="text" name="title" placeholder="write a title" required></div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                    <div class="col-2"><label for="">Image: </label></div>
                                    <div class="col-10"><input class="form-control border bg-light text-dark" type="file" name="image" required></div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-2 mt-2"><label for="">Type: </label></div>
                                        <div class="col-10">
                                            <select name="imageType" id="imageType">
                                              <option value="software">software</option>
                                              <option value="business">business</option>
                                              <option value="finance">finance</option>
                                              <option value="corporate">corporate</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input class="form-control bg-primary btn btn-primary" type="submit" value="save">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-3 col-lg-3"></div>
                </div>


                <div class="card-body user-form mt-5">
                    <table id="myTable" class="table table-striped text-center table-bordered table-responsive table-hover">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Image Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $data)
                            <tr>
                                <td>{{$data->title}}</td>
                                <td><img src="/imageGallery/{{$data->image}}" class="img-fluid" style="height: 120px; width:160px;" alt=""></td>
                                <td>{{$data->imageType}}</td>
                                <td><a href="{{ url('/deleteimage', $data->id) }}" class="text-decoration-none text-danger"><i class="fas fa-trash"></i> delete </a></td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>

        @include("admin.adminjs")

    </body>
    <script>
        $(document).ready(function(){
            $('#myTable').dataTable();
        });
    </script>
</html>