
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
                                    <li><a href="{{url('contribute')}}">Contribute</a></li>

                                    <li>
                                        <a href="#">Selects</a>
                                        <ul>
                                            <li><a href="form_select2.html">Select2 selects</a></li>
                                            <li><a href="form_multiselect.html">Bootstrap multiselect</a></li>
                                            <li><a href="form_select_box_it.html">SelectBoxIt selects</a></li>
                                            <li><a href="form_bootstrap_select.html">Bootstrap selects</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>

                            <!-- /forms -->

                            <!-- Appearance -->
                            <li class="navigation-header"><span>Appearance</span> <i class="icon-menu" title="Appearance"></i></li>
                            <li>
                                <a href="#"><i class="icon-grid"></i> <span>Components</span></a>
                                <ul>
                                    <li><a href="components_modals.html">Modals</a></li>
                                    <li><a href="components_dropdowns.html">Dropdown menus</a></li>
                                    <li><a href="components_tabs.html">Tabs component</a></li>
                                    <li><a href="components_pills.html">Pills component</a></li>
                                    <li><a href="components_navs.html">Accordion and navs</a></li>
                                    <li><a href="components_buttons.html">Buttons</a></li>
                                    <li><a href="components_notifications_pnotify.html">PNotify notifications</a></li>
                                    <li><a href="components_notifications_others.html">Other notifications</a></li>
                                    <li><a href="components_popups.html">Tooltips and popovers</a></li>
                                    <li><a href="components_alerts.html">Alerts</a></li>
                                    <li><a href="components_pagination.html">Pagination</a></li>
                                    <li><a href="components_labels.html">Labels and badges</a></li>
                                    <li><a href="components_loaders.html">Loaders and bars</a></li>
                                    <li><a href="components_thumbnails.html">Thumbnails</a></li>
                                    <li><a href="components_page_header.html">Page header</a></li>
                                    <li><a href="components_breadcrumbs.html">Breadcrumbs</a></li>
                                    <li><a href="components_media.html">Media objects</a></li>
                                    <li><a href="components_affix.html">Affix and Scrollspy</a></li>
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