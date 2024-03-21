<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('AdminLTE-3.2.0/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">ガレリ</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('AdminLTE-3.2.0/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a class="d-block"> @auth {{ auth()->user()->username }} @endauth</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="/home" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Home
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{route('page.album')}}" class="nav-link ">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Album
                        </p>
                    </a>
                    <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading" style="color: #F6F6F6">
                Post
            </div>

             <!-- Nav Item - Pages Collapse Menu -->
             <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="bi bi-pin-angle-fill" style="color: #F6F6F6"></i>
                    <span style="color: #F6F6F6">Posts</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="py-2 collapse-inner rounded" style="background-color: #F6F6F6;">
                        <h6 class="collapse-header" style="color: grey">My Posts</h6>
                        <a class="collapse-item" href="{{route('page.foto')}}">Photo</a>
                        <a class="collapse-item" href="{{route('page.album')}}">Album</a>
                    </div>
                </div>
            </li>
                <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="">
                <i class="bi bi-chat-right-heart-fill" style="color: #F6F6F6"></i>
                    <span style="color: #F6F6F6">Comments</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="bi bi-activity" style="color: #F6F6F6"></i>
                    <span style="color: #F6F6F6">Activity</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="py-2 collapse-inner rounded" style="background-color: #F6F6F6;">
                        <h6 class="collapse-header" style="color: grey;">My Activity</h6>
                        <a class="collapse-item" href="utilities-color.html">Likes</a>
                        <a class="collapse-item" href="utilities-border.html"></i>Comments</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
    <!-- /.sidebar -->
</aside>
