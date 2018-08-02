@extends('nav.main')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <!-- 2 columns form -->

                <!-- Content area -->
                <div class="content">

                    <div class="col-lg-12">
                        <!-- 2 columns form -->
                        <!-- Deposits -->
                        <div class="row">
                            <div class="panel1 panel-flat1">
                                {{--<div class="panel-heading">
                                    <h5 class="panel-title">Menu</h5>
                                    <div class="heading-elements">
                                        <ul class="icons-list">
                                            <li><a data-action="collapse"></a></li>
                                            <li><a data-action="reload"></a></li>
                                        </ul>
                                    </div>
                                </div>
--}}
                                <div class="panel-body">

                                    <a href="{{url("/contribute")}}" >   <div class="col-lg-4 panel panel-flat">

                                        <!-- Members online -->
                                        <div class="panel1  bg-blue-800">
                                            <div class="panel-body">
                                                {{--<div class="heading-elements">--}}
                                                    {{--<span class="heading-text badge bg-teal-300">+53,6%</span>--}}
                                                {{--</div>--}}

                                                <h3 class=""><i class="icon-statistics"></i>Contribute</h3>
                                              {{--  KES: 1,560.00
                                                <div class="text-muted text-size-small">1 Member(s)</div>--}}
                                            </div>

                                            <div class="container-fluid">
                                                <div id="members-online"></div>
                                            </div>
                                        </div>
                                        <!-- /members online -->

                                        </div></a>

                                    <div class="col-lg-4 panel panel-flat">

                                        <!-- Members online -->
                                        <div class="panel1 panel-success">
                                            <div class="panel-body  bg-blue-600">
                                                {{--<div class="heading-elements">--}}
                                                {{--<span class="heading-text badge bg-teal-300">+53,6%</span>--}}
                                                {{--</div>--}}

                                                <h3 class=""><i class="icon-statistics"></i>Apply Loan</h3>
                                                {{--  KES: 1,560.00
                                                  <div class="text-muted text-size-small">1 Member(s)</div>--}}
                                            </div>

                                            <div class="container-fluid">
                                                <div id="members-online"></div>
                                            </div>
                                        </div>
                                        <!-- /members online -->

                                    </div>

                                <a href="{{url("/ministatements")}}" >   <div class="col-lg-4 panel panel-flat">
                                        <!-- Members online -->
                                        <div class="panel1 bg-teal-8001">
                                            <div class="panel-body  bg-blue-400">
                                                {{--<div class="heading-elements">--}}
                                                {{--<span class="heading-text badge bg-teal-300">+53,6%</span>--}}
                                                {{--</div>--}}

                                                <h3 class=""><i class="icon-statistics"></i>Statement</h3>
                                                {{--  KES: 1,560.00
                                                  <div class="text-muted text-size-small">1 Member(s)</div>--}}
                                            </div>

                                            <div class="container-fluid">
                                                <div id="members-online"></div>
                                            </div>
                                        </div>
                                        <!-- /members online -->

                                    </div></a>





                                </div>
                            </div>
                            <!-- / Deposits -->

                        </div>
                        <div class="row">
                            <!-- Loans -->
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h5 class="panel-title">Info</h5>
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

                                                <h3 class="no-margin">Last Contribution </h3>
                                                <div class="text-muted text-size-large text-white"> Date :: <span class="text-size-large text-white">{{$lastcontribution->date}}</span>
                                                Amount ::  <span class="heading-text badge bg-danger-600">KES: {{number_format($lastcontribution->amount)}}</span></div>
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
                                                <h3 class="no-margin">Shares</h3>
                                                <div class="text-muted text-size-large text-white">Total Shares:: <span class="heading-btn badge bg-danger-600 right">KES: {{number_format($shares)}}.00</span></div>
                                            </div>

                                            <div id="server-load"></div>
                                        </div>
                                        <!-- /current server load -->

                                    </div>

                                    <div class="col-lg-4">

                                        <!-- Today's revenue -->
                                        <div class="panel bg-blue-400">
                                            <div class="panel-body">
                                                <div class="heading-elements">
                                                    <span class="heading-text badge bg-danger-600">KES 000.00</span>
                                                </div>

                                                <h3 class="no-margin">Loan</h3>
                                               Loan Balance
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