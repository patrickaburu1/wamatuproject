<?php

namespace App\Http\Controllers;

use App\Contribution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContributionController extends Controller
{
  public  function index(){
      return view('contribution.contribute');
  }

  /*add controller*/

    public function addContribution(Request $request){

        if (Auth::user()){

            $member_id=Auth::user()->member_id;

            $contribute=new Contribution();
            $contribute->tranaction_id="1";
            $contribute->member_id=$member_id;
            $contribute->shares_contribution_type=$request->shares;
            $contribute->loan_payment_contribution_type=$request->loan;
            $contribute->Miscellaneous_contribution_type=$request->mis;
            $contribute->merry_go_round_contribution_type=$request->merry;
            $contribute->benevolent_contribution_type=$request->ben;
            $contribute->recept_number="test";
            $contribute->amount=$request->total;
            $contribute->recept_meme="test";

            $contribute->save();

            return redirect('/');
        }

        return redirect('/contribute');

    }


    public function contributions(){

        $contributions=Contribution::all();

        return view('contribution.lastContribution', compact('contributions'));
    }


    public function pending(){

        $contributions=Contribution::where('status',0)->get();

        return view('contribution.pendingApproval', compact('contributions'));
    }

    public function rejected(){

        $contributions=Contribution::where('status',2)->get();

        return view('contribution.rejected', compact('contributions'));
    }
}
