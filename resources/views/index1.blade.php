@extends('nav.main')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <!-- 2 columns form -->

                <!-- Content area -->
                <div class="content">

                    <div class="col-lg-6">
                        <!-- 2 columns form -->
                        <!-- Deposits -->
                        <div class="row">
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h5 class="panel-title">Deposits</h5>
                                    <div class="heading-elements">
                                        <ul class="icons-list">
                                            <li><a data-action="collapse"></a></li>
                                            <li><a data-action="reload"></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="panel-body">
                                    <div class="col-lg-4">

                                        <!-- Members online -->
                                        <div class="panel bg-teal-800">
                                            <div class="panel-body">
                                                <div class="heading-elements">
                                                    <span class="heading-text badge bg-teal-300">+53,6%</span>
                                                </div>

                                                <h3 class="no-margin">Today</h3>
                                                KES: 1,560.00
                                                <div class="text-muted text-size-small">1 Member(s)</div>
                                            </div>

                                            <div class="container-fluid">
                                                <div id="members-online"></div>
                                            </div>
                                        </div>
                                        <!-- /members online -->

                                    </div>


                                    <div class="col-lg-4">

                                        <!-- Current server load -->
                                        <div class="panel bg-teal-600">
                                            <div class="panel-body">
                                                <div class="heading-elements">
                                                    <span class="heading-text badge bg-teal-800">+53,6%</span>
                                                </div>

                                                <h3 class="no-margin">Month</h3>
                                                KES: 13000.00
                                                <div class="text-muted text-size-small">23 Member(s)</div>
                                            </div>

                                            <div id="server-load"></div>
                                        </div>
                                        <!-- /current server load -->

                                    </div>

                                    <div class="col-lg-4">

                                        <!-- Today's revenue -->
                                        <div class="panel bg-teal-300">
                                            <div class="panel-body">
                                                <div class="heading-elements">
                                                    <span class="heading-text badge bg-teal-600">+53,6%</span>
                                                </div>

                                                <h3 class="no-margin">Year</h3>
                                                KES: 13000.00
                                                <div class="text-muted text-size-small">23 Member(s)</div>
                                            </div>

                                            <div id="today-revenue"></div>
                                        </div>
                                        <!-- /today's revenue -->

                                    </div>

                                </div>
                            </div>
                            <!-- / Deposits -->

                        </div>
                        <div class="row">
                            <!-- Loans -->
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h5 class="panel-title">Loans</h5>
                                    <div class="heading-elements">
                                        <ul class="icons-list">
                                            <li><a data-action="collapse"></a></li>
                                            <li><a data-action="reload"></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="panel-body">
                                    <div class="col-lg-4">

                                        <!-- Members online -->
                                        <div class="panel bg-blue-800">
                                            <div class="panel-body">
                                                <div class="heading-elements">
                                                    <span class="heading-text badge bg-blue-300">+53,6%</span>
                                                </div>

                                                <h3 class="no-margin">Pending </h3>
                                                KES: 13000.00
                                                <div class="text-muted text-size-small">23 Member(s)</div>
                                            </div>

                                            <div class="container-fluid">
                                                <div id="members-online"></div>
                                            </div>
                                        </div>
                                        <!-- /members online -->

                                    </div>


                                    <div class="col-lg-4">

                                        <!-- Current server load -->
                                        <div class="panel bg-blue-600">
                                            <div class="panel-body">
                                                <div class="heading-elements">
                                                    <span class="heading-text badge bg-blue-800">+53,6%</span>
                                                </div>

                                                <h3 class="no-margin">Approved</h3>
                                                KES: 13000.00
                                                <div class="text-muted text-size-small">23 Member(s)</div>
                                            </div>

                                            <div id="server-load"></div>
                                        </div>
                                        <!-- /current server load -->

                                    </div>

                                    <div class="col-lg-4">

                                        <!-- Today's revenue -->
                                        <div class="panel bg-blue-300">
                                            <div class="panel-body">
                                                <div class="heading-elements">
                                                    <span class="heading-text badge bg-blue-600">+53,6%</span>
                                                </div>

                                                <h3 class="no-margin">Year</h3>
                                                KES: 1303000.00
                                                <div class="text-muted text-size-small">23 Member(s)</div>
                                            </div>

                                            <div id="today-revenue"></div>
                                        </div>
                                        <!-- /today's revenue -->

                                    </div>

                                </div>
                            </div>
                            <!-- / Loans -->
                        </div>

                    </div>

                    <!--                    Graph of both deposits and loans-->
                    <div class="col-lg-6">
                        <!-- Daily sales -->
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">Deposit / Loans Trend Graph</h6>
                                <div class="heading-elements">
                                <span class="heading-text">Balance: <span
                                            class="text-bold text-danger-600 position-right">$4,378</span></span>
                                    <ul class="icons-list">
                                        <li class="dropdown text-muted">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                                        class="icon-cog3"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-sync"></i> Update data</a></li>
                                                <li><a href="#"><i class="icon-list-unordered"></i> Detailed log</a>
                                                </li>
                                                <li><a href="#"><i class="icon-pie5"></i> Statistics</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-cross3"></i> Clear list</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">
                                <div id="sales-heatmap"></div>
                            </div>

                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>Application</th>
                                        <th>Time</th>
                                        <th>Price</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="media-left media-middle">
                                                <a href="#" class="btn bg-primary-400 btn-rounded btn-icon btn-xs">
                                                    <span class="letter-icon"></span>
                                                </a>
                                            </div>

                                            <div class="media-body">
                                                <div class="media-heading">
                                                    <a href="#" class="letter-icon-title">Sigma application</a>
                                                </div>

                                                <div class="text-muted text-size-small"><i
                                                            class="icon-checkmark3 text-size-mini position-left"></i>
                                                    New
                                                    order
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-muted text-size-small">06:28 pm</span>
                                        </td>
                                        <td>
                                            <h6 class="text-semibold no-margin">$49.90</h6>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="media-left media-middle">
                                                <a href="#" class="btn bg-danger-400 btn-rounded btn-icon btn-xs">
                                                    <span class="letter-icon"></span>
                                                </a>
                                            </div>

                                            <div class="media-body">
                                                <div class="media-heading">
                                                    <a href="#" class="letter-icon-title">Alpha application</a>
                                                </div>

                                                <div class="text-muted text-size-small"><i
                                                            class="icon-spinner11 text-size-mini position-left"></i>
                                                    Renewal
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-muted text-size-small">04:52 pm</span>
                                        </td>
                                        <td>
                                            <h6 class="text-semibold no-margin">$90.50</h6>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="media-left media-middle">
                                                <a href="#" class="btn bg-indigo-400 btn-rounded btn-icon btn-xs">
                                                    <span class="letter-icon"></span>
                                                </a>
                                            </div>

                                            <div class="media-body">
                                                <div class="media-heading">
                                                    <a href="#" class="letter-icon-title">Delta application</a>
                                                </div>

                                                <div class="text-muted text-size-small"><i
                                                            class="icon-lifebuoy text-size-mini position-left"></i>
                                                    Support
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-muted text-size-small">01:26 pm</span>
                                        </td>
                                        <td>
                                            <h6 class="text-semibold no-margin">$60.00</h6>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="media-left media-middle">
                                                <a href="#" class="btn bg-success-400 btn-rounded btn-icon btn-xs">
                                                    <span class="letter-icon"></span>
                                                </a>
                                            </div>

                                            <div class="media-body">
                                                <div class="media-heading">
                                                    <a href="#" class="letter-icon-title">Omega application</a>
                                                </div>

                                                <div class="text-muted text-size-small"><i
                                                            class="icon-lifebuoy text-size-mini position-left"></i>
                                                    Support
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-muted text-size-small">11:46 am</span>
                                        </td>
                                        <td>
                                            <h6 class="text-semibold no-margin">$55.00</h6>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="media-left media-middle">
                                                <a href="#" class="btn bg-danger-400 btn-rounded btn-icon btn-xs">
                                                    <span class="letter-icon"></span>
                                                </a>
                                            </div>

                                            <div class="media-body">
                                                <div class="media-heading">
                                                    <a href="#" class="letter-icon-title">Alpha application</a>
                                                </div>

                                                <div class="text-muted text-size-small"><i
                                                            class="icon-spinner11 text-size-mini position-left"></i>
                                                    Renewal
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-muted text-size-small">10:29 am</span>
                                        </td>
                                        <td>
                                            <h6 class="text-semibold no-margin">$90.50</h6>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /daily sales -->
                    </div>


                    <!--  end of code                  -->

                    <div class="col-lg-12">


                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">Support tickets</h6>
                                <div class="heading-elements">
                                    <button type="button"
                                            class="btn btn-link daterange-ranges heading-btn text-semibold">
                                        <i class="icon-calendar3 position-left"></i> <span></span> <b class="caret"></b>
                                    </button>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-xlg text-nowrap">
                                    <tbody>
                                    <tr>
                                        <td class="col-md-4">
                                            <div class="media-left media-middle">
                                                <div id="tickets-status"></div>
                                            </div>

                                            <div class="media-left">
                                                <h5 class="text-semibold no-margin">14,327
                                                    <small class="text-success text-size-base"><i
                                                                class="icon-arrow-up12"></i> (+2.9%)
                                                    </small>
                                                </h5>
                                                <span class="text-muted"><span
                                                            class="status-mark border-success position-left"></span> Jun 16, 10:00 am</span>
                                            </div>
                                        </td>

                                        <td class="col-md-3">
                                            <div class="media-left media-middle">
                                                <a href="#"
                                                   class="btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-xs btn-icon"><i
                                                            class="icon-alarm-add"></i></a>
                                            </div>

                                            <div class="media-left">
                                                <h5 class="text-semibold no-margin">
                                                    1,132
                                                    <small class="display-block no-margin">total tickets</small>
                                                </h5>
                                            </div>
                                        </td>

                                        <td class="col-md-3">
                                            <div class="media-left media-middle">
                                                <a href="#"
                                                   class="btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-xs btn-icon"><i
                                                            class="icon-spinner11"></i></a>
                                            </div>

                                            <div class="media-left">
                                                <h5 class="text-semibold no-margin">
                                                    06:25:00
                                                    <small class="display-block no-margin">response time</small>
                                                </h5>
                                            </div>
                                        </td>

                                        <td class="text-right col-md-2">
                                            <a href="#" class="btn bg-teal-400"><i
                                                        class="icon-statistics position-left"></i> Report</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                    <tr>
                                        <th style="width: 50px">Due</th>
                                        <th style="width: 300px;">User</th>
                                        <th>Description</th>
                                        <th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
@endsection