@extends('nav.main')
@section('content')
    @include('partials.flash')
    <div class="content">


        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Loan Repayments <a class="heading-elements-toggle"><i
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
                                aria-label="Name: activate to sort column descending">Amount
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" aria-label="Position: activate to sort column ascending">Balance Before
                            </th>

                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" aria-label="Start date: activate to sort column ascending">Balance After
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" aria-label="Salary: activate to sort column ascending">Date
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($repayments as $repayment)

                            <tr role="row" class="odd">
                                <td class="sorting_1">{{number_format($repayment->amount)}}</td>
                                <td>{{number_format($repayment->balance_before)}}</td>
                                <td>{{number_format($repayment->balance_after)}}</td>
                                <td>{{$repayment->created}}</td>

                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>


    </div>

@endsection