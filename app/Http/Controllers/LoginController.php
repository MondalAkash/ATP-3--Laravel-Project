<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login.index');
    }
    public function verify(LoginRequest $request)
    {
        $uid = '';
        $types = 'abc';
        $result = DB::table('info')
                ->where('userid', $request->userid)
                ->where('password', $request->password)
                ->get();
        
            foreach ($result as $user) 
            {
                $types =  $user->type;
                $uid = $user->userid;
                $username = $user->username;
            }
            if($types == 'admin')
            {
                //Redirected to AdminController
                //echo "Admin";
                $request->session()->put('admin', $result);
                return redirect('/admin');
                //return view('adminhome.index');
            }
            else if($types == 'user')
            {
                //Redirected to User Controller
                //echo "User";
                $request->session()->put('user', $uid);
                $request->session()->put('username', $username);
                //dd($request->session());
                return redirect('/usermain');
                //return view('userhome.index');
            }
            else if($types == 'abc')
            {
                return view('errorlogin.index');
            }
        
        
        
        
    }

    
}
