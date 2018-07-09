
<div class="navbar-top">

<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-main">
            <div class="sidebar-content">

                <!-- User menu -->
                <div class="sidebar-user">
                    <div class="category-content">
                        <div class="media">
                            <a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
                            <div class="media-body">
                                <span class="media-heading text-semibold">Victoria Baker</span>
                                <div class="text-size-mini text-muted">
                                    <i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
                                </div>
                            </div>

                            <div class="media-right media-middle">
                                <ul class="icons-list">
                                    <li>
                                        <a href="#"><i class="icon-cog3"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /user menu -->


                <!-- Main navigation -->
                <div class="sidebar-category sidebar-category-visible">
                    <div class="category-content no-padding">
                        <ul class="navigation navigation-main navigation-accordion">

                            <!-- Main -->
                            <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                            <li class="active"><a href="{{url('/')}}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                            <!-- /main -->

                            <!-- Forms -->
                            <li class="navigation-header"><span>Forms</span> <i class="icon-menu" title="Forms"></i></li>
                            <li>
                                <a href="#"><i class="icon-pencil3"></i> <span>Contribution</span></a>
                                <ul>
                                    <li ><a class="icon-add" href="{{url('contribute')}}">Send Contribution</a></li>
                                    <li><a class="icon-add-to-list" href="{{url('contribute')}}">Pending Approval</a></li>
                                    <li><a class="icon-stack-cancel" href="{{url('contribute')}}">Rejected Contributions</a></li>
                                    <li><a class="icon-apple2" href="{{url('contribute')}}">Approved Contributions</a></li>

                                </ul>
                            </li>

                            <!-- /forms -->

                            <!-- Appearance -->
                            <li class="navigation-header"><span>Statements</span> <i class="icon-menu" title="Appearance"></i></li>
                            <li>
                                <a href="#"><i class="icon-grid"></i> <span>Statements</span></a>
                                <ul>
                                    <li><a class="icon-statistics" href="components_modals.html">Mini-Statements</a></li>
                                    <li><a class="icon-graph" href="components_modals.html">Full Statements</a></li>

                                </ul>
                            </li>

                            <!-- /appearance -->

                        </ul>
                    </div>
                </div>
                <!-- /main navigation -->

            </div>
        </div>
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">


            <!-- Content area -->
            <div class="content">

             @yield('content')

                <!-- Footer -->
                <div class="footer text-muted">
                    &copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
                </div>
                <!-- /footer -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->

</div>