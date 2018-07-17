@extends('nav.main')
@section('content')
    <div class="content">


                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title">Statement<a class="heading-elements-toggle"><i
                                        class="icon-more"></i></a></h5>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
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
                                    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending">benevolent
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="Position: activate to sort column ascending">Shares
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
                                    <th class="text-center sorting_disabled" rowspan="1" colspan="1"
                                        aria-label="Actions" style="width: 100px;">Actions
                                    </th>
                                </tr>
                                </thead>
                                <tbody>


                                @foreach($contributions as $contribution)

                                <tr role="row" class="odd">
                                    <td class="sorting_1">{{number_format($contribution->benevolent_contribution_type)}}</td>
                                    <td>{{number_format($contribution->shares_contribution_type)}}</td>
                                    <td>{{number_format($contribution->loan_payment_contribution_type)}}</td>
                                    <td>{{number_format($contribution->Miscellaneous_contribution_type)}}</td>
                                    <td><span >{{number_format($contribution->merry_go_round_contribution_type)}}</span></td>
                                    <td><span >{{number_format($contribution->amount)}}</span></td>
                                    <td>{{$contribution->date}}</td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                   aria-expanded="false">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a>
                                                    </li>
                                                    <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>



    </div>

@endsection