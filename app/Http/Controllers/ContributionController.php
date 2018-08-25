<?php

namespace App\Http\Controllers;

use App\Contribution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContributionController extends Controller
{
    public function index()
    {
        return view('contribution.contribute');
    }

    /*add controller*/

    public function addContribution(Request $request)
    {

        if (Auth::user()) {


            $expected_total = $request->shares + $request->loan + $request->mis + $request->merry + $request->ben;
            /*check if distribution match total*/
            if ($expected_total != $request->total) {
                return redirect()->back()->with('error', 'Sorry, Amount distribution doesnt match TOTAL amount of ' . $request->total);
            }
            $member_id = Auth::user()->member_id;
            $member_reg_number = Auth::user()->member_reg_number;

            request()->validate([

                'image' => 'required|file|mimes:pdf|max:8048',

            ]);

            $url = url('/');

            $imageName = time() . '.' . request()->image->getClientOriginalExtension();

            request()->image->move(public_path('images'), $imageName);


            $receipt = $url . "/public/images/" . $imageName;


            $contribute = new Contribution();
            //$contribute->tranaction_code = "1";
            $contribute->member_id = $member_reg_number;
            $contribute->shares_contribution_type = $request->shares;
            $contribute->loan_payment_contribution_type = $request->loan;
            $contribute->Miscellaneous_contribution_type = $request->mis;
            $contribute->merry_go_round_contribution_type = $request->merry;
            $contribute->benevolent_contribution_type = $request->ben;
            $contribute->recept_number = $request->receipt_number;
            $contribute->amount = $request->total;
            $contribute->recept_meme = $receipt;
            $contribute->transaction_by = $member_reg_number;

            $contribute->save();

            return redirect('/home')->with('success', 'Successfully sent contribution please wait for the approval');

        }


        return redirect('/contribute')->with('error', 'Sorry something went wrong, please try again later ');

    }


    /*contributions*/
    public function contributions()
    {
        $member_id = Auth::user()->member_reg_number;


        $contributions = Contribution::where([['member_id', $member_id], ['status', 1]])->get();

        return view('contribution.statement', compact('contributions'));
    }

    /*check for approved contributions*/
    public function approvedContribution()
    {
        $member_id = Auth::user()->member_reg_number;


        $contributions = Contribution::where([['member_id', $member_id], ['status', 1]])->get();

        return view('contribution.approved-contributions', compact('contributions'));
    }

    /*pending approval contribution*/
    public function pending()
    {


        $member_id = Auth::user()->member_reg_number;

        $contributions = Contribution::where([['status', 0], ['member_id', $member_id]])->get();

        return view('contribution.pendingApproval', compact('contributions'));
    }

    /*rejected contributions*/
    public function rejected()
    {

        $member_id = Auth::user()->member_reg_number;


        $contributions = Contribution::where([['status', 2], ['member_id', $member_id]])->get();

        return view('contribution.rejected', compact('contributions'));
    }
}
