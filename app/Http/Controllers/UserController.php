<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RegistrationRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userlist = DB::table('info')
            ->where('userid','<>', 'A000-1') //admin id will not visible
            ->get();
        return view('userlist.index')
            ->with('userlist', $userlist);
    }

    public function mainpage()
    {
        return view('userhome.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result = DB::table('info')
                ->orderBy('id', 'desc')
                ->limit(1)
                ->get();
                //dd($result);
        return view('registration.index')
                ->with('result', $result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistrationRequest $request)
    {
        $params = [
            'userid' => $request->userid,
            'username' => $request->username,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'contact' => $request->contact,
            'address' => $request->address,
            'password' => $request->password,
            'type' => 'user',
            'borrowlimit'=> 3
        ];
        DB::table('info')
            ->insert($params);

        return redirect('/user/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //specific user details will be shown
        $users = DB::table('info')
            ->where('userid', $id)
            ->get();
        return view('userdetails.index')
            ->with('users', $users);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = DB::table('info')
            ->where('userid', $id)
            ->get()
            ->first();
        return view('edituserdetails.index')
            ->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RegistrationRequest $request)
    {
        $param = [
            'userid' => $request->userid,
            'username' => $request->username,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'contact' => $request->contact,
            'address' => $request->address,
            'password' => $request->password,
            'type' => $request->type,
            'borrowlimit'=> $request->borrowlimit
        ];
        DB::table('info')
            ->where('userid', $request->userid)
            ->update($param);

        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('info')
            ->where('userid', $id)
            ->delete();
        return redirect('/user');
    }
    public function delete($id)
    {
        $user = DB::table('info')
            ->where('userid', $id)
            ->first();
        return view('deleteuserdetails.index')
            ->with('user', $user);
    }
    public function userSearch(Request $request)
    {
        $userlist = DB::table('info')
            ->where('userid', 'LIKE' ,'%'.$request->searchuser.'%')
            ->get();
         return view('userlist.index')
            ->with('userlist', $userlist);

    }
    public function showBookList()
    {
        $booklist = DB::table('book')
            ->get();
        return view('booklistuser.index')
            ->with('booklist', $booklist);
    }
    public function bookSearch(Request $request)
    {
         $booklist = DB::table('book')
            ->where('bookname', 'LIKE' ,'%'.$request->searchbook.'%')
            ->get();
         return view('booklistuser.index')
            ->with('booklist', $booklist);
    }
    
}
