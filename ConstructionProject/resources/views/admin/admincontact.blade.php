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
                    <table id="myTable" class="table border table-striped text-center table-bordered table-responsive table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone NO</th>
                                <th>Subject</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $data)
                            <tr>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->phone}}</td>
                                <td>{{$data->subject}}</td>
                                <td>{{$data->message}}</td>
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