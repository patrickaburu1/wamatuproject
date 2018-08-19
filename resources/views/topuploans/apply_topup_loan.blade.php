@extends('nav.main')
@section('content')
    @include('partials.flash')



    <div class="content">

        <div class="panel panel-flat">
            <div class="panel-body">

                <div class="row">
                    <div class="col-lg-12">
                        <!-- 2 columns form -->
                        <form name="add_contribution" method="POST" class="form-horizontal" action="{{url('/apply-loan-eligibility')}}"
                              enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h5 class="panel-title">Enter Loan Amount<a class="heading-elements-toggle"><i
                                                    class="icon-more"></i></a></h5>

                                    <div style="text-align: center; width: 90%">
                                    </div>

                                    <div class="heading-elements">
                                        <ul class="icons-list">
                                            <li><a data-action="collapse"></a></li>
                                            <li><a data-action="reload"></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12" style="padding-left: 80px; padding-right: 80px">
                                            <fieldset>
                                                <legend class="text-semibold"><i
                                                            class="glyphicon glyphicon-bitcoin position-left"></i>

                                                </legend>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="col-lg-1 control-label">Amount:</label>
                                                        <div class="col-lg-3">
                                                            <input name="loan_amount" id="loan_amount" value=""
                                                                   placeholder="enter loan amount"
                                                                   class="form-control" required="" type="text">
                                                        </div>

                                                        <div class="col-lg-2 text-right">
                                                            <button type="submit" class="btn btn-primary"> Submit <i
                                                                        class="icon-arrow-right14 position-right"></i>
                                                            </button>
                                                        </div>
                                                    </div>

                                                </div>

                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- /2 columns form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection