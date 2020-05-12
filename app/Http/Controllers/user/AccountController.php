<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        $year = date('Y');
        $month = date('m');
        echo $year,$month;
        return view('user.account.index');
    }

    public function account_form()
    {
        return view('user.account.form');
    }

    public function account_save(Request $request)
    {
        dd($request->all());
    }
}
