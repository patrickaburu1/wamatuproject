<?php

namespace App\Http\Controllers;

use App\Contribution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member_id=Auth::user()->member_id;

        $shares=Contribution::where([['member_id',$member_id],['status',1]])->sum('shares_contribution_type');

        $lastcontribution=Contribution::where([['member_id',$member_id],['status',1]])->orderby('id','desc')->first();


        $contributions=Contribution::where('member_id',$member_id)->orderby('id','desc')->limit(5)->get();
        //return view('home');
        return view('index',compact('shares','lastcontribution','contributions'));
    }


}
