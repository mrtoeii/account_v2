<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class LoginController extends Controller
{
    public function checklogin(Request $request)
    {
        // echo Hash::make('@Admin');
        // dd($request->all());
        $username = $request->input('username');
        $password = $request->input('password');

        $user = DB::table('users')->where([
                ['user_username',$username],
                // ['user_remove_status',0]
            ])->first();
        if($user){
            if (Hash::check($password, $user->user_password)) {
                $userArr = array(
                    'username'=>$user->user_username,
                    'fname'=>$user->user_firstname,
                    'lname'=>$user->user_lastname,
                    'status' => $user->user_status
                );
                session()->put('user',$userArr);
                return response()->json([
                    'status'=> 200,
                    'url'=>"dashboard",
                ]);
            }else{
                return response()->json([
                    'status'=> 500,
                    'msg'=>"Username or password incorrect",
                ]);
            }
        }else{
            return response()->json([
                'status'=> 404,
                'msg'=>"Username not found!",
            ]);
        }
    }
}
