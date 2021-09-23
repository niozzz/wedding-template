<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardC extends Controller
{
    public function index()
    {
        return view('user/dashboard/index1');
    }
}
