<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('auth.login');
});*/



Route::get('/', 'AuthController@index');
Route::get('/login', 'AuthController@index','login');

Route::get('/signin', 'AuthController@index');
Route::post('/signin', 'AuthController@postSignIn');


Route::get('/activate-account', 'AuthController@signup');

Route::post('/activate-account', 'AuthController@postSignup');

Route::get('/activate-with-code', 'AuthController@activateWithCode');

Route::post('/activate-with-code', 'AuthController@activateWithCodePost');

Route::get('/send-sms', 'SmsController@try');

Auth::routes();


Route::group(['middleware'=>'auth'], function () {

    Route::get('/home', 'HomeController@index');

    Route::get('/contribute', 'ContributionController@index');


    Route::post('/contribute', 'ContributionController@addContribution');


    Route::get('/contributions', 'ContributionController@contributions');

    /*approved contributions*/
    Route::get('/approved-contributions', 'ContributionController@approvedContribution');


    Route::get('/ministatements', 'ContributionController@contributions');


    Route::get('/pending', 'ContributionController@pending');

/*rejecet contributions*/
    Route::get('/rejected', 'ContributionController@rejected');


    /*Loans*/
    Route::get('/apply-loan', 'LoanController@index');


    Route::get('/apply-loan-step2', 'LoanController@step2');

    Route::post('/apply-loan-eligibility', 'LoanController@checkForEligibility');


    Route::post('/apply-loan-without-guarantors', 'LoanController@applyWithoutGuarantor');

    Route::post('/apply-loan-with-guarantors', 'LoanController@applyWithGuarantorcontributions');


    /*Route::post('/apply-loan', 'LoanController@applyLoan');*/


    Route::get('/applied-loans', 'LoanController@appliedLoans');

    /*rejected loans*/
    Route::get('/rejected-loans', 'LoanController@rejectedLoan');


    Route::get('/loans-repayment', 'LoanController@loanRepayment');

});
