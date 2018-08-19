<?php

namespace App\Http\Controllers;

use App\InterestRate;
use Illuminate\Http\Request;

class ConstantController extends Controller
{
    public function calculateInstallments($loan, $duration){

        $rate=InterestRate::where('rate','!=',null)->first();

        $monthlyInstallment=(($loan*$rate->rate/100)+$loan)/$duration;

        return $monthlyInstallment;
    }
}
