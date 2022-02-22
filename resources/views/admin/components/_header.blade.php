<style>
#entete{
    background-color: rgb(197, 6, 6);
}
</style>
<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" id="entete" style="">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                    class="ti-menu ti-close"></i></a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="">

                <!-- Logo text -->
                <span class="logo-text" style="font-weight: bold;">
                    <!-- Light Logo text -->
                    <strong style="font-family: persofont;font-size: 30px;">Mcs Group Admin</strong>
                </span>
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="ti-more"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent" style="background-color: black;">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto float-left">
                <!-- This is  -->
                <li class="nav-item"> <a
                        class="nav-link sidebartoggler d-none d-md-block waves-effect waves-dark"
                        href="javascript:void(0)"><i class="ti-menu" style="color: white;"></i></a> </li>
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->
                <li class="nav-item d-none d-md-block search-box"> <a
                        class="nav-link d-none d-md-block waves-effect waves-dark" href="javascript:void(0)"><i
                            class="ti-search" style="color: white;"></i></a>
                    <form class="app-search">
                        <input type="text" class="form-control" placeholder="Search & enter">
                        <a class="srh-btn"><i class="ti-close"></i></a>
                    </form>
                </li>
                <!-- ============================================================== -->
                <!-- Mega Menu -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End Mega Menu -->
                <!-- ============================================================== -->
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-right">
                <!-- ============================================================== -->
                <!-- Comment -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                        <div class="notify"> <span class="heartbit"></span> <span class="point" style="background-color: white;"></span> </div>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right mailbox scale-up">
                        <ul class="list-style-none">
                            <li>
                                <div class="border-bottom rounded-top py-3 px-4">
                                    <h5 class="mb-0 font-weight-medium">Notifications</h5>
                                </div>
                            </li>
                            <li>
                                <div class="message-center notifications position-relative" style="height:250px;">
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                        <span class="btn btn-danger rounded-circle btn-circle"><i class="fa fa-link"></i></span>
                                        <div class="w-75 d-inline-block v-middle pl-2">
                                            <h5 class="message-title mb-0 mt-1">Message 1</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my new admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:30 AM</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                        <span class="btn btn-success rounded-circle btn-circle"><i class="ti-calendar"></i></span>
                                        <div class="w-75 d-inline-block v-middle pl-2">
                                            <h5 class="message-title mb-0 mt-1">Message 2</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just a reminder that you have event</span> <span class="font-12 text-nowrap d-block text-muted">9:10 AM</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                        <span class="btn btn-info rounded-circle btn-circle"><i class="ti-settings"></i></span>
                                        <div class="w-75 d-inline-block v-middle pl-2">
                                            <h5 class="message-title mb-0 mt-1">Message 3</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">You can customize this template as you want</span> <span class="font-12 text-nowrap d-block text-muted">9:08 AM</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                        <span class="btn btn-primary rounded-circle btn-circle"><i class="ti-user"></i></span>
                                        <div class="w-75 d-inline-block v-middle pl-2">
                                            <h5 class="message-title mb-0 mt-1">Message 4</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="nav-link border-top text-center text-dark pt-3" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- End Comment -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Messages -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End Messages -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Profile -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset('admin/img/customer.png')}}" alt="user" width="30" class="profile-pic rounded-circle" />
                    </a>
                    <div class="dropdown-menu mailbox dropdown-menu-right scale-up">
                        <ul class="dropdown-user list-style-none">
                            <li>
                                <div class="dw-user-box p-3 d-flex">
                                    <div class="u-img"><img src="{{asset('admin/img/avatar.png')}}" alt="user" class="rounded" width="50" height="50"></div>
                                    <div class="u-text ml-2">
                                        <h4 class="mb-0">{{  auth()->user()->name  }}</h4>
                                        <p class="text-muted mb-1 font-14">{{  auth()->user()->email  }}</p>

                                    </div>
                                </div>
                            </li>
                            <li role="separator" class="dropdown-divider"></li>
                            <li class="user-list"><a class="px-3 py-2" href="#"><i class="ti-settings"></i> Paramètre du compte</a></li>
                            <li role="separator" class="dropdown-divider"></li>
                            <li class="user-list"><a class="px-3 py-2" href=""><i class="fa fa-power-off"></i> Déconnexion</a></li>
                        </ul>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- Language -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href=""
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                            class="flag-icon flag-icon-fr"></i></a>
                    <div class="dropdown-menu dropdown-menu-right scale-up"> <a class="dropdown-item"
                            href="#"><i class="flag-icon flag-icon-us"></i> Anglais</a> <a class="dropdown-item"
                            href="#"><i class="flag-icon flag-icon-fr"></i> Français</a> </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
