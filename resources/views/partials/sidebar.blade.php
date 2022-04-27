        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand  align-items-center justify-content-center" href="/" style="transition: none;">
                <img src="/img/logo 1.png" alt="" width="20%" class="img" id="logo">
                <div class="sidebar-brand-text "><img src="/img/webmedia2.png" alt="" width="60%"></div>
            </a>

            <!-- Divider -->

            <!-- Nav Item - Dashboard -->
            <li class="nav-item mt-3">
                <a class="nav-link" href="/">
                    <i class="fas fa-home" id="i-Dashboard"></i>
                    <span id="Dashboard" >Dashboard</span></a>
            </li>

            <!-- Divider -->

            <!-- Heading -->
            <div class="sidebar-heading">
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="/clients">
                    <i class="fas fa-fw fa-users" id="i-Clients"></i>
                    <span id="Clients">Clients</span>

                </a>

            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" id="projectsidebar" href="/projects" data-toggle="collapse" data-target="#collapsePagessettings" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-briefcase" id="i-project"></i>
                    <span id="project">Projects</span>
                </a>
                <div id="collapsePagessettings" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="/category">Category</a>
                        <div class="collapse-divider"></div>
                        <a class="collapse-item" href="/platform">Platform</a>


                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="/payments" >
                    <i class="fas fa-fw fa-money-bill" id="i-payments"></i>
                    <span id="payments">Payments</span>

                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/finances" >
                    <i class="fas fa-fw fa-wallet" id="i-Finance"></i>
                    <span id="Finance">Finance</span>

                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/salary">
                    <i class="fas fa-hand-holding-usd" id="i-salary"></i>
                    <span id="salary ">Salary</span>
                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/developers" >
                    <i class="fas fa-fw fa-users" id="i-Developers"></i>
                    <span id="Developers">Developers</span>

                </a>

            </li>

            <!-- Nav Item - Utilities Collapse Menu -->


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->



            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-sign-in-alt"  rgb(0, 183, 255)"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="#"  data-toggle="modal" data-target="#logoutModal">Logout</a><!-- -->
                        <a class="collapse-item" href="/recovery">Forgot Password</a>

                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->


            <!-- Nav Item - Tables -->
    

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->


        </ul>