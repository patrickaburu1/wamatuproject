<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wamatu Sacco</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="assets/css/colors.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->


</head>

<body class="login-container  pace-done"><div class="pace  pace-inactive"><div class="pace-progress" style="transform: translate3d(100%, 0px, 0px);" data-progress-text="100%" data-progress="99">
        <div class="pace-progress-inner"></div>
    </div>
    <div class="pace-activity"></div></div>



<!-- Page container -->
<div class="page-container" style="min-height:333.1666717529297px">


    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content">


                <!-- Simple login form -->
                <form method="post" action="{{url('/activate-with-code')}}">
                    {{csrf_field()}}
                    <div class="panel panel-body login-form">
                        @include('partials.flash')

                        <div class="text-center">
                            <div class=""></div>
                            <img class="size-full wp-image-935  aligncenter" src="assets/images/wamutulogo.png" alt="wamatu" width="128" height="128">

                            <h5 class="content-group">Activate Account <small class="display-block">Enter your Nation Id Number Plus password Of your choice to activate Account</small></h5>
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <input name="id_number" class="form-control" placeholder="National Id Number" type="text">
                            <div class="form-control-feedback">
                                <i class="icon-user text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <input name="code" class="form-control" placeholder="4 digit code " type="number">
                            <div class="form-control-feedback">
                                <i class="icon-code text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Activate  Account With Code <i class="icon-circle-right2 position-right"></i></button>
                        </div>

                        <div class="text-center">
                            <a href="{{url('signin')}}"> Activated? signin</a>
                        </div>
                    </div>
                </form>
                <!-- /simple login form -->


                <!-- Footer -->
                <div class="footer text-muted text-center">
                    © 2018. <a href="#">Wamatu</a> by <a href="#" target="_blank">E-nested Solution</a>
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



</body>


<!-- Core JS files -->
<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script type="text/javascript" src="assets/js/plugins/tables/datatables/datatables.min.js"></script>
{{--
<script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>
--}}

<script type="text/javascript" src="assets/js/core/app.js"></script>
<script type="text/javascript" src="assets/js/pages/datatables_data_sources.js"></script>
<!-- /theme JS files -->
</body>

</html>


