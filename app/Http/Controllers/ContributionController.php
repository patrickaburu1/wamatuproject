<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContributionController extends Controller
{
  public  function index(){
      return view('contribution.contribute');
  }
}
