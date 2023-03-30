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
                <div class="card-body user-form mt-3">
                    <table id="myTable" class="table table-striped text-center table-bordered table-responsive table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Gmail</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $data)
                            <tr>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                @if ( $data -> usertype =="0" )
                                <td><a href="{{ url('/deleteuser', $data->id) }}" class="text-decoration-none text-danger"><i class="fas fa-trash"></i> delete </a></td>
                                @else
                                <td><div class="text-warning">Sorry! Not allowed</div></td>
                                @endif
                            </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Gmail</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
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