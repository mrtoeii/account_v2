<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        //  $password = Hash::make('@Admin1234');
        // echo $password,'<br>';
        // echo 'api/index';
    }
    public function checklogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $user = DB::table('users')->where([
            ['user_username',$username],
            // ['user_remove_status',0]
        ])->first();

        if($user){
            if (Hash::check($password, $user->user_password)) {
                // if($user->user_status==9){

                // }else if($user->user_status==0){
                    
                // }
                return response()->json([
                    'status'=>200,
                    'username'=>$user->user_username,
                    'firstname'=>$user->user_firstname,
                    'lastname'=>$user->user_lastname,
                    'user_status'=>$user->user_status,
                ]);
            }else{
                return response()->json([
                    'status'=>500,
                    'msg'=>"Username or Password incorrect"
                ]);
            }
        }else{
            return response()->json([
                'status'=>500,
                'msg'=>"Username or Password incorrect"
            ]);
        }
        
    }
}
