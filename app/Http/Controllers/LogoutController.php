<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function adminLogout(Request $request)
    {
    	$request->session()->forget('admin');
    	return redirect('/login');
    }
    public function userLogout(Request $request)
    {
    	$request->session()->forget('user');
    	return redirect('/login');
    }
}
