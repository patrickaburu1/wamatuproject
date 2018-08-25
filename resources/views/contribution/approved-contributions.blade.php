@extends('nav.main')
@section('content')
    @include('partials.flash')
    <div class="content">


        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Approved Contributions <a class="heading-elements-toggle"><i
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
                                aria-label="Name: activate to sort column descending">Benevolent
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
                                <td>{{number_format($contribution->shares_contribution_type)}}</td>
                                <td>{{number_format($contribution->loan_payment_contribution_type)}}</td>
                                <td class="sorting_1">{{number_format($contribution->benevolent_contribution_type)}}</td>
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

@endsection