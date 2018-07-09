@extends('nav.main')
@section('content')
    <div class="content">
        <div class="panel panel-flat">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-8">
                        <form class="" action="{{url('/')}}">
                            {{csrf_field()}}
                            <legend class="text-semibold"><i class="icon-reading position-left"></i> Contribute</legend>


                            <div class="row">
                                <label class="col-lg-3 control-label">Total Amount Deposited:</label>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="form-group">
                                            <input type="number" name="Total Amount" placeholder="50000" maxlength="6"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <label class="col-lg-3 control-label">Bank Slip Date:</label>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="form-group">
                                            <input type="date" name="date" placeholder="mm/dd/yyyy"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <label class="col-lg-3 control-label">Bank:</label>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="form-group">
                                            <input disabled type="text" name="Total Amount" value="Cooperative Bank"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=" row text-semibold text-center">
                                Contribution Sub-Division
                            </div>
                            <div class="row"></div>


                            <div class="row">
                                <label class="col-lg-3 control-label">Shares:</label>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="form-group">
                                            <input type="number" name="shares" placeholder="25000" maxlength="6"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <label class="col-lg-3 control-label">Loan(Monthly Installments):</label>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="form-group">
                                            <input type="number" name="shares" placeholder="25000" maxlength="6"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <label class="col-lg-3 control-label">Others:</label>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="form-group">
                                            <input type="number" name="others" placeholder="25000" maxlength="6"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <label class="col-lg-3 control-label">Upload Bank Slip (Pdf) format:</label>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="form-group">
                                            <input type="file" name="receipt"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Send Contribution <i
                                            class="icon-arrow-right14 position-right"></i></button>
                            </div>

                        </form>
                    </div>


                </div>


            </div>
        </div>
    </div>

@endsection