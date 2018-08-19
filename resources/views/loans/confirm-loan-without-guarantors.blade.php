@extends('nav.main')
@section('content')
    @include('partials.flash')



    <div class="content">

        <div class="panel panel-flat">
            <div class="panel-body">

                <div class="row">
                    <div class="col-lg-12">
                        <!-- 2 columns form -->

                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Congratulations {{\Illuminate\Support\Facades\Auth::user()->name}}<a class="heading-elements-toggle"><i class="icon-more"></i></a></h4>
                                    <h5 class="panel-title"> You qualify For loan Of <span  class="alert-danger"> KES:: {{number_format($loan_amount)}}</span> <a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
                                    <h5 class="panel-title"> Repayment Monthly Installment <span  class="alert-danger"> KES:: {{number_format($monthlyInstallment)}}</span> </h5>
                                    <h5 class="panel-title"> Duration <span  class="alert-danger"> {{$duration}}</span> Months</h5>

                                    <div style="text-align: left; width: 90%">
                                        For this amount of loan you don't need guarantors.
                                    </div>

                                    <div class="heading-elements">
                                        <ul class="icons-list">
                                            <li><a data-action="collapse"></a></li>
                                            <li><a data-action="reload"></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <form  method="POST" class="form-horizontal" action="{{url('/apply-loan-without-guarantors')}}"
                                      enctype="multipart/form-data">
                                    {{csrf_field()}}
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12" style="padding-left: 80px; padding-right: 80px">
                                            <fieldset>
                                                <legend class="text-semibold"><i class="glyphicon glyphicon-bitcoin position-left"></i>

                                                </legend>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                       {{-- <label class="col-lg-1 control-label">Amount:</label>--}}
                                                        <div class="col-lg-3">
                                                            <input type="text" name="loan_amount" value="{{$loan_amount}}" hidden>
                                                            <input type="text" name="duration" value="{{$duration}}" hidden>
                                                        </div>

                                                        <div class="col-lg-2 text-right">
                                                            <button type="submit" class="btn btn-primary">Click here to Confirm <i
                                                                        class="icon-arrow-right14 position-right"></i>
                                                            </button>
                                                        </div>
                                                    </div>

                                                </div>

                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>

                        <!-- /2 columns form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection