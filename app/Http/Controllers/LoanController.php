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

        $member_id = Auth::user()->member_reg_number;

        $member_status = Member::where('member_reg_number', $member_id)->first();

        $maximum_loan = $member_status->available_amount * 3;

        $loan_amount = $request->loan_amount;

        /*check monthly exceeds max of 36 months*/

        $maxduration=36;
        $duration=$request->duration;

        if ($duration > $maxduration) {

            return redirect()->back()->with('error', 'Sorry, your repayaments duration exceeds maximum duration of '.$maxduration.' months');

        }

        /*first check if s/he have an existing loan*/

        if ($member_status->loan_balance > 0) {

            return redirect()->back()->with('error', 'Sorry, you dont qualify for a loan at the moment since u have an existing');

        }

        /*check if ge has meet loan * 3 shares*/
        if ($loan_amount > $maximum_loan) {

            return redirect()->back()->with('error', 'Sorry, you are not eligible for that amount, maximum loan you can get is KES:: ' . $maximum_loan);

        }
        /*calculate */

        $installment=new ConstantController();
        $monthlyInstallment=$installment->calculateInstallments($loan_amount,$duration);

        /*Finally check if u have an need guarantors if yes give guarantors form else confirm loan*/
        if ($loan_amount <= $member_status->available_amount) {

            /* return view('loans.apply_loan');*/
            return view('loans.confirm-loan-without-guarantors', compact('loan_amount','monthlyInstallment','duration'));

        }

        /*require guarantors enter detail to provide guarators */

        return view('loans.confirm-loan-with-guarantors', compact('loan_amount','monthlyInstallment','duration'));


        /* return redirect('/apply-loan-step2')->with('info', 'Congratulations, you qualify for amount, please confirm by providing the necessary details');*/


    }

    public function applyWithoutGuarantor(Request $request)
    {

        $member_id = Auth::user()->member_reg_number;



        $guarantor2 = Member::where('member_reg_number', $member_id)->first();

        $guarantor2_data = new Member();
        $guarantor2_data->id = $member_id;
        $guarantor2_data->member_reg_number = $guarantor2->member_reg_number;
        $guarantor2_data->full_name = $guarantor2->full_name;
        $guarantor2_data->id_number = $guarantor2->id_number;
        $guarantor2_data->email_address = $guarantor2->email_address;
        $guarantor2_data->phone_number = $guarantor2->phone_number;
        $guarantor2_data->available_amount = $guarantor2->available_amount;
        $guarantor2_data->status = $guarantor2->active;
        $guarantor2_data->loan_balance = $guarantor2->loan_balance;
        $guarantor2_data->amount_guaranteed = $request->loan_amount;



        $loan = new Loan();
        $loan->loan_amount = $request->loan_amount;
        $loan->member_id = $request->loan_amount;
        $loan->member_id = $member_id;
        $loan->loan_type = 0; /*long term 0 , 1 top up, 3 emergency*/
        $loan->gurantors = "[" .$guarantor2_data."]";
        $loan->repayments_period = $request->duration;
        $loan->save();

        return redirect('/home')->with('success', 'Successfully Applied Loan, Please wait as it is reviewed');

    }

    public function applyWithGuarantor(Request $request)
    {

        $member_id = Auth::user()->member_reg_number;

        /*own member json*/
        $member = Member::where('member_reg_number', $member_id)->first();

        $owner = new Member();
        $owner->id = $member_id;
        $owner->member_reg_number = $member->member_reg_number;
        $owner->full_name = $member->full_name;
        $owner->id_number = $member->id_number;
        $owner->email_address = $member->email_address;
        $owner->phone_number = $member->phone_number;
        $owner->available_amount = $member->available_amount;
        $owner->status = $member->active;
        $owner->loan_balance = $member->loan_balance;
        $owner->amount_guaranteed = $request->loan_amount;

        /*find guarantor details guarantor 1 must exist*/
        $guarantor1 = Member::where('member_reg_number', $request->guarantor1)->first();

        if (empty($guarantor1)) {
            return redirect('apply-loan')->with('error', 'Member number for guarantor 1 doesnt exist');
        }


        /*prepare json data for guarantor*/
        $guarantor1_data = new Member();
        $guarantor1_data->id = $guarantor1->id;
        $guarantor1_data->member_reg_number = $guarantor1->member_reg_number;
        $guarantor1_data->full_name = $guarantor1->full_name;
        $guarantor1_data->id_number = $guarantor1->id_number;
        $guarantor1_data->email_address = $guarantor1->email_address;
        $guarantor1_data->phone_number = $guarantor1->phone_number;
        $guarantor1_data->available_amount = $guarantor1->available_amount;
        $guarantor1_data->status = $guarantor1->active;
        $guarantor1_data->loan_balance = $guarantor1->loan_balance;
        $guarantor1_data->amount_guaranteed = $request->guarantor1amount;

        $guarantor2_data = "";
        $guarantor3_data = "";

        /*check if other guarantor*/
        if ($request->guarantor2 != null) {
            $guarantor2 = Member::where('member_reg_number', $request->guarantor2)->first();

            if (empty($guarantor2)) {
                return redirect('apply-loan')->with('error', 'Member number for guarantor 2 doesnt exist');
            }

            /*prepare json data for guarantor 2*/
            $guarantor2_data = new Member();
            $guarantor2_data->id = $guarantor2->id;
            $guarantor2_data->member_reg_number = $guarantor2->member_reg_number;
            $guarantor2_data->full_name = $guarantor2->full_name;
            $guarantor2_data->id_number = $guarantor2->id_number;
            $guarantor2_data->email_address = $guarantor2->email_address;
            $guarantor2_data->phone_number = $guarantor2->phone_number;
            $guarantor2_data->available_amount = $guarantor2->available_amount;
            $guarantor2_data->status = $guarantor2->active;
            $guarantor2_data->loan_balance = $guarantor2->loan_balance;
            $guarantor2_data->amount_guaranteed = $request->guarantor2amount;

        }

        if ($request->guarantor3 != null) {
            $guarantor3 = Member::where('member_reg_number', $request->guarantor3)->first();

            if (empty($guarantor3)) {
                return redirect('apply-loan')->with('error', 'Member number for guarantor 3 doesnt exist');
            }

            /*prepare json data for guarantor 2*/
            $guarantor3_data = new Member();
            $guarantor3_data->id = $guarantor3->id;
            $guarantor3_data->member_reg_number = $guarantor3->member_reg_number;
            $guarantor3_data->full_name = $guarantor3->full_name;
            $guarantor3_data->id_number = $guarantor3->id_number;
            $guarantor3_data->email_address = $guarantor3->email_address;
            $guarantor3_data->phone_number = $guarantor3->phone_number;
            $guarantor3_data->available_amount = $guarantor3->available_amount;
            $guarantor3_data->status = $guarantor3->active;
            $guarantor3_data->loan_balance = $guarantor3->loan_balance;
            $guarantor3_data->amount_guaranteed = $request->guarantor3amount;


        }

        $loan = new Loan();
        $loan->loan_amount = $request->loan_amount;
        $loan->member_id = $member_id;
        $loan->repayments_period = $request->duration;
        $loan->loan_type = 0; /*long term 0 , 1 top up, 3 emergency*/
        // $loan->gurantors = $request->guarantor1."amount".$request->guarantor1amount.",". $request->guarantor2."amount".$request->guarantor2amount.",". $request->guarantor3."amount".$request->guarantor3amount;
        $loan->gurantors = "[" .$owner.",". $guarantor1_data . "," . $guarantor2_data . "," . $guarantor3_data . "]";
        $loan->save();

        return redirect('home')->with('success', 'Successfully Applied Loan, Please wait as it is reviewed');

    }


    /*Step2 confirm loan and if guarantors are needed provide*/
    public
    function applyLoan(Request $request)
    {


        $member_id = Auth::user()->member_reg_number;
        $loan_status = Member::where('member_reg_number', $member_id)->first();

        if ($loan_status->loan_balance > 0) {

            return redirect()->back()->with('error', 'Sorry U dont qualify for a loan at the moment since u have an existing');

        }

        $loan = new Loan();
        $loan->loan_amount = $request->loan_amount;
        $loan->member_id = $member_id;
        $loan->loan_type = 0; /*long term 0 , 1 top up, 3 emergency*/
        $loan->repayments_period = $request->period;
       /* $loan->pay_date = "2019/07/23";*/
        $loan->monthly_installment = $request->installments;
        $loan->gurantors = $request->guarantor1;
        $loan->save();

        return redirect()->back()->with('success', 'Successfully Applied Loan, Please wait as it is reviewed');


    }

    public function appliedLoans()
    {
        $member_id = Auth::user()->member_reg_number;


        $loans = Loan::where('member_id', $member_id)->get();

        return view('loans.applied-loans', compact('loans'));
    }

    /*rejected loans*/
    public function rejectedLoan()
    {
        $member_id = Auth::user()->member_reg_number;


        $loans = Loan::where([['member_id', $member_id],['approval_status',2]])->get();

        return view('loans.rejected-loans', compact('loans'));
    }

    public function loanRepayment()
    {

        $member_id = Auth::user()->member_reg_number;

        $repayments = LoanRepayment::where('member_id', $member_id)->get();

        return view('loans.monthly-loan-repayment', compact('repayments'));
    }
}
