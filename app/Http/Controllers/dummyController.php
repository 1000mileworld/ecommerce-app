<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }
}
