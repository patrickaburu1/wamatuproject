<?php

namespace App\Http\Controllers;

use App\Member;
use App\User;
use http\Exception;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    public function index()
    {
        if (Auth::user()) {
            return redirect('home');
        }
        return view('auth1.login');
    }

    public function postSignIn(Request $request)
    {
        try {

            $data = $request->all();


            /*check if member is active*/
            $user = User::where('email', $request->username)->first();

            if (empty($user)) {
                return redirect()->back()->with('error', 'invalid user');
            } else {
                $member_status = Member::where('id', $user->member_id)->first();

                /*first check user activated with code*/
                if ($user->active == 0) {
                    return redirect()->back()->with('error', 'Sorry, please use the code sent to u to activate your account');
                }

                if ($member_status->active == 0) {
                    return redirect()->back()->with('error', 'member is inactive');
                }
            }

            $userdata = array(
                'email' => $request->get('username'),
                'password' => $request->get('password')
            );


            if (Auth::attempt($userdata)) {
                return redirect('home');
            } else {
                return redirect()->back()->with('error', 'invalid credentials');
            }


        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Some thing went wrong!');

        }

    }

    public function signup()
    {

        return view('auth1.activate-account');
    }

    public function activateWithCode()
    {

        return view('auth1.already-with-code');
    }

    public function postSignup(Request $request)
    {

        $member = Member::where('id_number', $request->id_number)->first();


        if (empty($member)) {
            return redirect()->back()->with('error', 'Sorry, your id number info doent match any of our data. Visit our offices for assistance');
        }

        /*check if member have already activated account*/

        $user = User::where('email', $request->id_number)->first();

        if (!empty($user)) {
            return redirect('signin')->with('info', 'You already have an account with us, Login to access portal');
        }

        /*got to the next view to enter code for activation*/
        $phone = $member->phone_number;
        $id_number = $member->id_number;
        $name = $member->full_name;

        $code = rand(1000, 10000);

        /*send code to registered phone number*/

        $message="Dear ".$name."  ".$code." is your wamatu muharata sacco activation code ";

        $sendsms1 = new SmsController();
        $sendsms = $sendsms1->sendSms($phone, $message);

        if ($sendsms == "Success") {
            $user = new User();
            $user->email = $id_number;
            $user->name = $name;
            $user->member_id = $member->id;
            $user->password = bcrypt($request->password);
            $user->activation_code = $code;
            $user->save();

            return view('auth1.enter_code', compact('phone', 'id_number'));
        } elseif ($sendsms == "InsufficientBalance") {
            return redirect()->back()->with('error', 'something went wrong, try again later');
        } else {
            return redirect()->back()->with('error', 'Error occurred, please confirm whether the  phone number provided is valid');
        }


        /* return redirect()->back()->with('success','verification code was sent to '.$member->phone_number);*/
    }

    public function activateWithCodePost(Request $request)
    {

        $username = $request->id_number;
        $code = $request->code;

        $user = User::where('email', $username)->first();

        if (empty($user)) {
            return redirect('activate-with-code')->with('error', 'invalid id number');
        }

        $user = User::where([['email', $username], ['activation_code', $code]])->first();

        if (empty($user)) {
            return redirect('activate-with-code')->with('error', 'Invalid code');
        }

        if ($user->activation_code_status == 1) {
            return redirect('signin')->with('error', 'Code Already Used, if forgot password reset password');
        }

        $update = User::find($user->id);
        $update->activation_code_status = 1;
        $update->active = 1;
        $update->save();

        return redirect('signin')->with('success', 'Success, account activated please login');


    }
}
