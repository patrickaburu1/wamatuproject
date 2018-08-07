<?php

namespace App\Http\Controllers;

use App\Loan;
use App\LoanRepayment;
use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoanController extends Controller
{
    /*step one of application view */
    public function index()
    {
        return view('loans.apply-loan-step1');
    }

    /*Step 2 show qualification*/
    public function step2()
    {
        return view('loans.apply_loan');
    }

    /*step one check if he is eligible all conditions */
    public function checkForEligibility(Request $request)
    {

        $member_id = Auth::user()->member_id;
        $member_status = Member::where('id', $member_id)->first();

        $maximum_loan=$member_status->available_amount*3;

        $loan_amount=$request->loan_amount;

        /*first check if s/he have an existing loan*/

        if ($member_status->loan_balance > 0) {

            return redirect()->back()->with('error', 'Sorry, you dont qualify for a loan at the moment since u have an existing');

        }

        /*check if ge has meet loan * 3 shares*/
        if ($loan_amount > $maximum_loan){

            return redirect()->back()->with('error', 'Sorry, you are not eligible for that amount, maximum loan you can get is KES:: '.$maximum_loan);

        }

        /*Finally check if u have an need guarantors if yes give guarantors form else confirm loan*/
        if ($loan_amount <= $member_status->available_amount){

           /* return view('loans.apply_loan');*/
            return view('loans.confirm-loan-without-guarantors',compact('loan_amount'));

        }

        /*require guarantors enter detail to provide guarators */

        return view('loans.confirm-loan-with-guarantors',compact('loan_amount'));


        /* return redirect('/apply-loan-step2')->with('info', 'Congratulations, you qualify for amount, please confirm by providing the necessary details');*/



    }

    public function applyWithoutGuarantor(Request $request){

        $member_id = Auth::user()->member_id;

        $loan = new Loan();
        $loan->loan_amount = $request->loan_amount;
        $loan->member_id = $request->loan_amount;
        $loan->member_id = $member_id;
        $loan->loan_type = "loan";
        $loan->save();

        return redirect('/home')->with('success', 'Successfully Applied Loan, Please wait as it is reviewed');

    }

    public function applyWithGuarantor(Request $request){

        $member_id = Auth::user()->member_id;

        $loan = new Loan();
        $loan->loan_amount = $request->loan_amount;
        $loan->member_id = $member_id;
        $loan->loan_type = "loan";
        $loan->gurantors = $request->guarantor1."amount".$request->guarantor1amount.",". $request->guarantor2."amount".$request->guarantor2amount.",". $request->guarantor3."amount".$request->guarantor3amount;
        $loan->save();

        return redirect('home')->with('success', 'Successfully Applied Loan, Please wait as it is reviewed');

    }


    /*Step2 confirm loan and if guarantors are needed provide*/
    public function applyLoan(Request $request)
    {


        $member_id = Auth::user()->member_id;
        $loan_status = Member::where('id', $member_id)->first();

        if ($loan_status->loan_balance > 0) {

            return redirect()->back()->with('error', 'Sorry U dont qualify for a loan at the moment since u have an existing');

        }

        $loan = new Loan();
        $loan->loan_amount = $request->loan_amount;
        $loan->member_id = $member_id;
        $loan->loan_type = "loan";
        $loan->repayments_period = $request->period;
        $loan->pay_date = "2019/07/23";
        $loan->monthly_installment = $request->installments;
        $loan->gurantors = $request->guarantor1;
        $loan->save();

        return redirect()->back()->with('success', 'Successfully Applied Loan, Please wait as it is reviewed');


    }

    public function appliedLoans()
    {
        $member_id = Auth::user()->member_id;


        $loans = Loan::where('member_id', $member_id)->get();

        return view('loans.applied-loans', compact('loans'));
    }

    public function loanRepayment()
    {

        $member_id = Auth::user()->member_id;

        $repayments = LoanRepayment::where('member_id', $member_id)->get();

        return view('loans.monthly-loan-repayment', compact('repayments'));
    }
}
