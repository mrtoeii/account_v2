<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        // $password = Hash::make('@Admin1234');
        // echo $password,'<br>';
        return view('login.index');
    }

    public function checklogin(Request $request)
    {
        // echo Hash::make('@Admin');
        // dd($request->all());
        // echo 'username : ',$request->input('username');
        // die;
        $username = $request->input('username');
        $password = $request->input('password');

        $user = DB::table('users')->where([
                ['user_username',$username],
                // ['user_remove_status',0]
        ])->first();
        if($user){
            if (Hash::check($password, $user->user_password)) {
               
                $user_status = $user->user_status;
                $url = null;
                // if($user_status==9){
                //     $url = 'admin-dashboard';
                //     $adminArr = array(
                //         'username'=>$user->user_username,
                //         'status' => $user->user_status
                //     );
                //     session()->put('admin',$adminArr);

                // }else if($user_status==0){
                //     $url = 'dashboard';
                //     $userArr = array(
                //         'username'=>$user->user_username,
                //         'fname'=>$user->user_firstname,
                //         'lname'=>$user->user_lastname,
                //         'status' => $user->user_status
                //     );
                //     session()->put('user',$userArr);
                // }
                $url = 'dashboard';
                $userArr = array(
                    'username'=>$user->user_username,
                    'fname'=>$user->user_firstname,
                    'lname'=>$user->user_lastname,
                    'status' => $user->user_status
                );
                session()->put('user',$userArr);

               
                return response()->json([
                    'status'=> 200,
                    'url'=> $url,
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
                'msg'=>"Username or password incorrect",
            ]);
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        if(session()->get('user')==null || session()->get('admin')==null){
            return redirect('/');
        }
    }
}
