<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // dd(session()->get('user'));
        return view('user.index');
    }
}
