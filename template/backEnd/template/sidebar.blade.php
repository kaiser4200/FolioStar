    <!-- Sidebar -->
 
    <ul 
        class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion data-simplebar custom-scrollbar" 
        id="accordionSidebar"
        style="
            
            "
        >

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-0">
            {{--<img src="{{ asset('img/logo/cursor.png') }}" width="100px" height="28px"></img>--}}
            <h3 class="text-warning"><strong>P2P</strong></h3>
            </div>
            <div class="sidebar-brand-text mx-3">Logistics</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>



        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        @if(Auth::user()->role == 'client')
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('client_order.create')}}" data-toggle="" data-target=""
                aria-expanded="true" aria-controls="">
                <i class="fas fa-user"></i>
                <span>Call For Courier</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" 
               href="{{route('client_order.index', ['client_id' => Auth::user()->id])}}" 
               data-toggle="" 
               aria-expanded="true" >
                <i class="fas fa-briefcase"></i>
                <span>Orders</span>
            </a>
        </li>
        

        @elseif(Auth::user()->role == 'admin')
        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('user.create')}}" data-toggle="modal" data-target="#addUserModal"
                aria-expanded="true" aria-controls="">
                <i class="fas fa-user"></i>
                <span>Add User</span>
            </a>
            <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseUtilities"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-users"></i>
                <span>Users</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Clients & Management:</h6>
                    <a class="collapse-item" href="{{route('user.index', ['role' => 'pickup'])}}">Pickup</a>
                    <a class="collapse-item" href="{{route('user.index', ['role' => 'delivery'])}}">Delivery</a>
                    <a class="collapse-item" href="{{route('user.index', ['role' => 'warehouse'])}}">Waerhouse</a>
                    <a class="collapse-item" href="{{route('user.index', ['role' => 'client'])}}">Clients</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
          

        <!-- Divider -->
        <hr class="sidebar-divider">

        @elseif(Auth::user()->role == 'pickup' || Auth::user()->role == 'delivery')
        <li class="nav-item">
            <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseUtilities"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-users"></i>
                <span>Orders</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Clients & Management:</h6>
                    @if(Auth::user()->role == 'pickup')
                    <a class="collapse-item" href="{{route('all_orders', ['role' => 'pickup'])}}">All</a>
                    @elseif(Auth::user()->role == 'delivery')
                    <a class="collapse-item" href="{{route('all_orders', ['role' => 'delivery'])}}">All</a>
                    @endif
                    <a class="collapse-item" href="{{route('all_orders', ['user_id' => Auth::user()->id])}}">Mine</a>
                </div>
            </div>
        </li>

        @elseif(Auth::user()->role == 'warehouse')
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('all_orders', ['role' => Auth::user()->role])}}"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-table"></i>
                <span>Handle Orders</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('all_orders')}}"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-table"></i>
                <span>All Orders</span>
            </a>
        </li>




        <!-- Heading -->
        <!-- <div class="sidebar-heading">
            Addons
        </div> -->

        <!-- Nav Item - Pages Collapse Menu -->
        <!-- <li class="nav-item ">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
                aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Pages</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Login Screens:</h6>
                    <a class="collapse-item" href="login.html">Login</a>
                    <a class="collapse-item" href="register.html">Register</a>
                    <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                    <div class="collapse-divider"></div>
                    <h6 class="collapse-header">Other Pages:</h6>
                    <a class="collapse-item" href="404.html">404 Page</a>
                    <a class="collapse-item" href="blank.html">Blank Page</a>
                </div>
            </div>
        </li> -->

        <!-- Nav Item - Charts -->
        <!-- <li class="nav-item">
            <a class="nav-link" href="charts.html">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Charts</span></a>
        </li> -->

        <!-- Nav Item - Tables -->
        <!-- <li class="nav-item">
            <a class="nav-link" href="tables.html">
                <i class="fas fa-fw fa-table"></i>
                <span>Tables</span></a>
        </li> -->
        @endif

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>

    <!-- End of Sidebar -->
