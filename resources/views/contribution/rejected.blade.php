@extends('nav.main')
@section('content')
    @include('partials.flash')
    <div class="content">


        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Rejected Contribution(s)<a class="heading-elements-toggle"><i
                                class="icon-more"></i></a></h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="reload"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body"></div>

            <div id="id" class="dataTables_wrapper no-footer">
                <div class="datatable-scroll">
                    <table class="table datatable-html dataTable no-footer" id="DataTables_Table_0" role="grid"
                           aria-describedby="DataTables_Table_0_info">
                        <thead>
                        <tr role="row">
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" aria-label="Position: activate to sort column ascending">Shares
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" aria-label="Age: activate to sort column ascending">Loan
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending">benevolent
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" aria-label="Start date: activate to sort column ascending">Miscellaneous
                                date
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
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" aria-label="Salary: activate to sort column ascending">Action
                            </th>

                        </tr>
                        </thead>
                        <tbody>


                        @foreach($contributions as $contribution)

                            <tr role="row" class="">
                                <td>{{number_format($contribution->shares_contribution_type)}}</td>
                                <td>{{number_format($contribution->loan_payment_contribution_type)}}</td>
                                <td class="sorting_1">{{number_format($contribution->benevolent_contribution_type)}}</td>
                                <td>{{number_format($contribution->Miscellaneous_contribution_type)}}</td>
                                <td><span >{{number_format($contribution->merry_go_round_contribution_type)}}</span></td>
                                <td><span >{{number_format($contribution->amount)}}</span></td>
                                <td class="">{{$contribution->created_at}}</td>
                                <td class=""><button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModal">
                                        View Reason
                                    </button></td>
                            </tr>

                            <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="mediumModalLabel">Reason Of Rejection</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                               {{$contribution->reason_rejected}}
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>



    </div>

@endsection