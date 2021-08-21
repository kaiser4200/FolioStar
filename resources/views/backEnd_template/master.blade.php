<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    
    <!-- start: css -->
    @include('template.all_css')
    <!-- end: css -->
    
    <!-- start: Custom Css -->
    @yield('css')   
    <!-- end: Custome Css -->

</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- start:Sidebar -->
        @include('template.sidebar')
        <!-- end: Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- start:Navbar -->
                @include('template.topbar')
                <!-- end: Navbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @yield('content')

                </div>
                <!-- /.container-fluid -->



            </div>
            <!-- Main Content ends-->


            <!-- start: Footer -->
            @include('template.footer')
            <!-- end: Footer -->

        </div>
    </div>
    <!-- End of Page Wrapper -->


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{route('logout_GET')}}">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Add User Modal -->
    <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add an user of any type</h5>
                <button type="button" class="close text-danger text-large" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{route('user.store')}}" method="post">
            @csrf
            <div class="modal-body">
                <!-- Form -->
                

                    <fieldset class="form-group">
                    <div class="row">
                    <legend class="col-form-label col-3">User Type</legend>
                    <div class="col-9">
                    <div class="form-check">
                    <label class="form-check-label">
                    <input required class="form-check-input" type="radio" name="role" id="legendRadio1" value="pickup">
                    Pick Up
                    </label>
                    </div>
                    <div class="form-check">
                    <label class="form-check-label">
                    <input required class="form-check-input" type="radio" name="role" id="legendRadio2" value="delivery">
                    Delivery
                    </label>
                    </div>
                    <div class="form-check">
                    <label class="form-check-label">
                    <input required class="form-check-input" type="radio" name="role" id="legendRadio3" value="warehouse">
                    Warehouse
                    </label>
                    </div>
                    </div>
                    </div>
                    </fieldset>

                    <div class="form-group row">
                    <label for="first_name" class="col-3 col-form-label">Name</label>
                    <div class="col-9">
                    <input type="text" class="form-control" id="name" name="name">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="last_name" class="col-3 col-form-label">Email</label>
                    <div class="col-9">
                    <input type="text" class="form-control" id="Email" name="email">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="first_name" class="col-3 col-form-label">Password</label>
                    <div class="col-9">
                    <input type="text" class="form-control" id="password" name="password">
                    </div>
                    </div>                    

                    <div class="form-group row">
                    <div class="offset-3 col-9">
                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                    </div>
                    </div>

                
                <!-- Form Ends-->
            </div>
            <div class="modal-footer">    
                <button type="submit" class="btn btn-sm btn-success">Save changes</button>
            </div>

            </form>

            </div>
        </div>
    </div>






    <!-- start: Javascript -->
    @include('template.all_script')
    <!-- end: Javascript -->

    <!-- start: Custom Script -->
    @yield('scripts')
    <!-- end: Custome Script -->

</body>

</html>
