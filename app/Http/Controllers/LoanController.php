<?php

namespace App\Http\Controllers;

use App\Loan;
use App\LoanRepayment;
use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoanController extends Controller
{
  public function index(){
      return view('loans.apply_loan');
  }

  public function applyLoan(Request $request){


      $member_id=Auth::user()->member_id;
      $loan_status=Member::where('id',$member_id)->first();

      if($loan_status->loan_balance >0){

          return redirect()->back()->with('error','Sorry U dont qualify for a loan at the moment since u have an existing');

      }

      $loan=new Loan();
      $loan->loan_amount=$request->loan_amount;
      $loan->member_id=$member_id;
      $loan->loan_type="loan";
      $loan->repayments_period=$request->period;
      $loan->pay_date="2019/07/23";
      $loan->monthly_installment=$request->installments;
      $loan->gurantors=$request->guarantor1;
      $loan->save();

      return redirect()->back()->with('success','Successfully Applied Loan, Please wait as it is reviewed');




  }

  public function appliedLoans(){
      $member_id=Auth::user()->member_id;


      $loans=Loan::where('member_id',$member_id)->get();

      return view('loans.applied-loans', compact('loans'));
  }

  public function loanRepayment(){

      $member_id=Auth::user()->member_id;

      $repayments=LoanRepayment::where('member_id',$member_id)->get();

      return view('loans.monthly-loan-repayment', compact('repayments'));
  }
}
