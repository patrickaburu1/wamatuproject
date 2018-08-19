@extends('nav.main')
@section('content')
    @include('partials.flash')
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

                                                <h3 class=""><i class="icon-pencil7"></i>Contribute</h3>
                                              {{--  KES: 1,560.00
                                                <div class="text-muted text-size-small">1 Member(s)</div>--}}
                                            </div>

                                            <div class="container-fluid">
                                                <div id="members-online"></div>
                                            </div>
                                        </div>
                                        <!-- /members online -->

                                        </div></a>

                                    <a href="{{url("/apply-loan")}}" >
                                    <div class="col-lg-4 panel panel-flat">

                                        <!-- Members online -->
                                        <div class="panel1 panel-success">
                                            <div class="panel-body  bg-blue-600">
                                                {{--<div class="heading-elements">--}}
                                                {{--<span class="heading-text badge bg-teal-300">+53,6%</span>--}}
                                                {{--</div>--}}

                                                <h3 class=""><i class="icon-stack2"></i>Apply Loan</h3>
                                                {{--  KES: 1,560.00
                                                  <div class="text-muted text-size-small">1 Member(s)</div>--}}
                                            </div>

                                            <div class="container-fluid">
                                                <div id="members-online"></div>
                                            </div>
                                        </div>
                                        <!-- /members online -->

                                    </div></a>

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
                                                <div class="text-muted text-size-large text-white">Total Shares:: <span class="heading-btn badge bg-danger-600 right">KES: {{number_format($shares->available_amount)}}.00</span></div>
                                            </div>

                                            <div id="server-load"></div>
                                        </div>
                                        <!-- /current server load -->

                                    </div>

                                    <div class="col-lg-4">

                                        <!-- Today's revenue -->
                                        <div class="panel bg-blue-400">
                                            <div class="panel-body">
                                              {{--  <div class="heading-elements">
                                                    <span class="heading-text badge bg-danger-600">KES 000.00</span>
                                                </div>--}}

                                                <h3 class="no-margin">Loan</h3>
                                                <div class="text-muted text-size-large text-white">  Loan Balance:: <span class="heading-btn badge bg-danger-600 right">KES: {{number_format($shares->loan_balance)}}.00</span></div>

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
                                <h6 class="panel-title">Last 5 Contributions </h6>
                                <div class="heading-elements">
                                    <button type="button"
                                            class="btn btn-link daterange-ranges heading-btn text-semibold">
                                        <i class="icon-calendar3 position-left"></i> <span></span> <b class="caret"></b>
                                    </button>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-xlg text-nowrap">
                                    <thead>
                                    <tr role="row">
                                        <th class="text-center sorting_disabled" rowspan="1" colspan="1"
                                            aria-label="Actions" style="width: 100px;">Status
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending">Shares
                                        </th>
                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending">benevolent
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="Age: activate to sort column ascending">Loan
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="Start date: activate to sort column ascending">Miscellaneous
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="Salary: activate to sort column ascending">merry_go_round
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="Salary: activate to sort column ascending">Total
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="Salary: activate to sort column ascending">Date
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($contributions as $contribution)

                                        <tr role="row" class="odd">
                                            <?php
                                            if($contribution->status==0){
                                                echo '<td class="text-center"><span class="label label-info">PENDING</span></td>';
                                            }elseif($contribution->status==1){
                                                echo '<td class="text-center"><span class="label label-success">APPROVED</span></td>';
                                            }else{
                                                echo '<th class="text-center "><span class="label label-danger">REJECTED</span></th>';
                                            }
                                            ?>
                                            <td class="sorting_1">{{number_format($contribution->shares_contribution_type)}}</td>
                                            <td >{{number_format($contribution->benevolent_contribution_type)}}</td>
                                            <td>{{number_format($contribution->loan_payment_contribution_type)}}</td>
                                            <td>{{number_format($contribution->Miscellaneous_contribution_type)}}</td>
                                            <td><span >{{number_format($contribution->merry_go_round_contribution_type)}}</span></td>
                                            <td><span >{{number_format($contribution->amount)}}</span></td>
                                            <td>{{$contribution->created_at}}</td>


                                        </tr>

                                    @endforeach
                                    </tbody>
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