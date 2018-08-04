@extends('nav.main')
@section('content')
    <div class="content">
        <div class="panel panel-flat">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-8">
                        <form class="" method="post" action="{{url('/contribute')}}">
                            {{csrf_field()}}
                            <legend class="text-semibold"><i class="icon-reading position-left"></i> Contribute</legend>


                            <div class="row">
                                <label class="col-lg-3 control-label">Total Amount Deposited:</label>
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
                                <label class="col-lg-3 control-label">Shares:</label>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="form-group">
                                            <input type="number" name="shares" placeholder="25000" maxlength="6"
                                                   class="form-control" required>
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
                                <label class="col-lg-3 control-label">Miscellaneous</label>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="form-group">
                                            <input type="number" name="mis" placeholder="25000" maxlength="6"
                                                   class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-lg-3 control-label">Merry Go Round</label>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="form-group">
                                            <input type="number" name="merry" placeholder="25000" maxlength="6"
                                                   class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-lg-3 control-label">benevolent</label>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="form-group">
                                            <input type="number" name="ben" placeholder="25000" maxlength="6"
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
                                                   class="form-contro">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Send Contribution <i
                                            class="icon-arrow-right14 position-right"></i></button>
                            </div>

                        </form>
                        <script>
                            $('.form-control').keyup(function () {
                                alert("yesy");
                            })
                        </script>
                    </div>


                </div>


            </div>
        </div>
    </div>


@endsection
