<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoanController extends Controller
{
  public function index(){
      return view('loans.apply_loan');
  }
}
