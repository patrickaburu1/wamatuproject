@extends('nav.main')
@section('content')
    @include('partials.flash')

    <div class="content">

        <div class="panel panel-flat">
            <div class="panel-body">

                <div class="row">
                    <div class="col-lg-12">
                        <!-- 2 columns form -->
                        <form name="add_contribution" method="POST" class="form-horizontal"
                              action="{{url('/apply-loan-with-guarantors')}}"
                              enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        Congratulations {{\Illuminate\Support\Facades\Auth::user()->name}}</h4>
                                    <h5 class="panel-title"> You qualify For loan Of <span
                                                class="alert-danger"> KES:: {{number_format($loan_amount)}}</h5>

                                    <div style="text-align: left; width: 90%">
                                        <h6 class="panel-title"> For this amount of loan you need guarantors.</h6>
                                    </div>
                                    <div style="text-align: left; width: 90%">
                                        <h6 class="panel-title"> Please confirm by providing the necessary details,
                                            guarantors you have with the
                                            number of amount they have guaranteed,</h6>
                                    </div>

                                    <div class="heading-elements">
                                        {{-- <ul class="icons-list">
                                             <li><a data-action="collapse"></a></li>
                                             <li><a data-action="reload"></a></li>
                                         </ul>--}}
                                    </div>
                                </div>
                            </div>

                            <div class="panel-body">
                                <div class="row">
                                    <label class="col-lg-3 control-label">Guarantor 1</label>
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="form-group">
                                                <input type="number" name="guarantor1"
                                                       placeholder="member number" maxlength="5"
                                                       class="col-lg-5">

                                                <input type="number" name="guarantor1amount"
                                                       placeholder="Amount Guaranteed" maxlength="9"
                                                       class="col-lg-4">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="loan_amount" value="{{$loan_amount}}" disabled>

                                <div class="row">
                                    <label class="col-lg-3 control-label">Guarantor 2</label>
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="form-group">
                                                <input type="number" name="guarantor2"
                                                       placeholder="Guarantor 2 member number" maxlength="4"
                                                       class="col-lg-5">

                                                <input type="number" name="guarantor2amount"
                                                       placeholder="Amount Guaranteed" maxlength="9"
                                                       class="col-lg-4">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <label class="col-lg-3 control-label">Guarantor 3</label>
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="form-group">
                                                <input type="number" name="guarantor3"
                                                       placeholder="Guarantor 3 member number" maxlength="4"
                                                       class="col-lg-5">

                                                <input type="number" name="guarantor3amount"
                                                       placeholder="Amount Guaranteed" maxlength="9"
                                                       class="col-lg-4">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-2 text-right">
                                        <button type="submit" class="btn btn-primary">Click here to Confirm <i
                                                    class="icon-arrow-right14 position-right"></i>
                                        </button>
                                    </div>
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