@extends('nav.main')
@section('content')
    <div class="content">
        <div class="panel panel-flat">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-8">
                        <form class="" method="post" action="{{url('/apply-loan')}}">
                            {{csrf_field()}}
                            <legend class="text-semibold"><i class="icon-reading position-left"></i> Apply Loan</legend>


                            <div class="row">
                                <label class="col-lg-3 control-label">Loan Amount:</label>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="form-group">
                                            <input type="number" name="total" placeholder="50000" maxlength="6"
                                                   class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-lg-3 control-label">Repayment Period (months):</label>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="form-group">
                                           <select name="period">
                                               <option value="12">12 Months</option>
                                               <option value="24">24 Months</option>
                                               <option value="36">36 Months</option>
                                               <option value="48">48 Months</option>
                                               <option value="60">60 Months</option>
                                               <option value="72">72 Months</option>
                                           </select>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <label class="col-lg-3 control-label">Loan(Monthly Installments):</label>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="form-group">
                                            <input type="number" name="loan" placeholder="25000" maxlength="6"
                                                   class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <label class="col-lg-3 control-label">Upload Loan Document Signed By all Members (Pdf) format:</label>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="form-group">
                                            <input type="file" name="loan-doc" class="form-control1" >
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Apply Loan <i
                                            class="icon-arrow-right14 position-right"></i></button>
                            </div>

                        </form>
                    </div>


                </div>


            </div>
        </div>
    </div>


@endsection
