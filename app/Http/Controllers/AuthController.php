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

   public function index(){
       if (Auth::user()){
           return redirect('home');
       }
       return view('auth1.login');
   }

    public function postSignIn(Request $request)
    {
        try{

            $data = $request->all();


            /*check if member is active*/
            $user=User::where('email',$request->username)->first();

            if (empty($user)){
                return redirect()->back()->with('error','invalid user');
            }else{
                $member_status=Member::where('id',$user->member_id)->first();
                if($member_status->active==0){
                    return redirect()->back()->with('error','member is inactive');
                }
            }

            $userdata = array(
                'email' => $request->get('username'),
                'password' => $request->get('password')
            );


            if(Auth::attempt($userdata))
            {
                return redirect('home');
            }else{
                return redirect()->back()->with('error','invalid credentials');
            }



        } catch ( Exception $e) {
            return redirect()->back()->with('error1','Some thing went wrong!');

        }

    }
}
