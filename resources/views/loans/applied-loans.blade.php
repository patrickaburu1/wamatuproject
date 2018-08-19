@extends('nav.main')
@section('content')
    @include('partials.flash')
    <div class="content">


        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Applied Loans <a class="heading-elements-toggle"><i
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
                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending">Status
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending">Amount
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" aria-label="Position: activate to sort column ascending">Repayment Period
                            </th>

                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" aria-label="Start date: activate to sort column ascending">Monthly Installment
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" aria-label="Start date: activate to sort column ascending">Interest (PA)
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="2" aria-label="Salary: activate to sort column ascending">Repayment Status
                            </th>
                           {{-- <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="2" aria-label="Salary: activate to sort column ascending">Date
                            </th>--}}

                        </tr>
                        </thead>
                        <tbody>


                        @foreach($loans as $loan)

                            <tr role="row" class="odd">
                                <?php
                                if($loan->approval_status==0){
                                    echo '<td class=""><span class="label label-info">PENDING</span></td>';
                                }elseif($loan->approval_status==1){
                                    echo '<td class=""><span class="label label-success">APPROVED</span></td>';
                                }else{
                                    echo '<th class=" "><span class="label label-danger">REJECTED</span></th>';
                                }
                                ?>
                                <td class="sorting_1">{{number_format($loan->loan_amount)}}</td>
                                <td>{{$loan->repayments_period}} (Months)</td>
                                <td>{{number_format($loan->monthly_installment)}}</td>
                                <td>{{$loan->interest_rate}}%</td>

                                <?php
                                if($loan->repayment_status==0){
                                    echo '<td class=""><span class="label label-info">UNPAID</span></td>';
                                }elseif($loan->repayment_status==1){
                                    echo '<td class=""><span class="label label-success">PAID</span></td>';
                                }
                                ?>
                               {{-- <td>{{$loan->created}}</td>--}}

                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>



    </div>

@endsection