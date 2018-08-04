
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
                                <span class="media-heading text-semibold">{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                                <div class="text-size-mini text-muted">
                                    <i class="icon-pin text-size-small"></i> &nbsp;Kenya, Nrb
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
                            <li class="active"><a href="{{url('/home')}}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                            <!-- /main -->

                            <!-- Forms -->
                            <li class="navigation-header"><span>Contribution</span> <i class="icon-menu" title="Contributions"></i></li>
                            <li>
                                <a href="#"><i class="icon-pencil3"></i> <span>Contribution</span></a>
                                <ul>
                                    <li ><a class="-add" href="{{url('contribute')}}">Send Contribution</a></li>
                                    <li><a class="-add-to-list" href="{{url('pending')}}">Pending Approval</a></li>
                                    <li><a class="-stack-cancel" href="{{url('rejected')}}">Rejected Contributions</a></li>
                                </ul>
                            </li>

                            <li class="navigation-header"><span>Loan</span> <i class="icon-menu" title="Loan"></i></li>
                            <li>
                                <a href="#"><i class="icon-pencil3"></i> <span>Loan</span></a>
                                <ul>
                                    <li ><a class="-add" href="{{url('apply-loan')}}">Apply Loan</a></li>
                                    <li><a class="-add-to-list" href="{{url('applied-loans')}}">Applied Loan</a></li>
                                    <li><a class="-stack-cancel" href="{{url('rejected')}}"> Payment Installments</a></li>
                                </ul>
                            </li>

                            <!-- /forms -->

                            <!-- Appearance -->
                            <li class="navigation-header"><span>Statements</span> <i class="icon-menu" title="Appearance"></i></li>
                            <li>
                                <a href="#"><i class="icon-grid"></i> <span>Statements</span></a>
                                <ul>
                                    <li><a class="icon-statistics" href="{{url("ministatements")}}">Mini-Statements</a></li>
                                    <li><a class="icon-graph" href="{{url("ministatements")}}">Full Statements</a></li>

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
                    &copy; 2018. <a href="#">Wamatu</a> by <a href="http://known.com" target="_blank">E-better</a>
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