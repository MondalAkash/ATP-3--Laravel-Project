<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function borrowStore($id1, $id2)
    {
        $bookid=0;
        $bookname='';
        $userid='';
        $username='';
        $reqdate=Carbon::now();
        $limit = 0;
        $bookcp = 0;
        $status = 0;
        $BookDetails = DB::table('book')
            ->where('bookid', $id1)
            ->get();
        $UserDetails = DB::table('info')
            ->where('userid', $id2)
            ->get();
        $borrow = DB::table('bor')
            ->where('bookid', $id1)
            ->where('userid', $id2)
            ->where('status', 0)
            ->first();
        foreach($BookDetails as $bd)
        {
            $bookid = $bd->bookid;
            $bookname = $bd->bookname;
            $bookcp = $bd->bookcopy;
        }
        foreach ($UserDetails as $ud) {
            $userid = $ud->userid;
            $username = $ud->username;
            $limit = $ud->borrowlimit;
        }
        if(!$borrow)
        {
            if($limit != 0)
            {
                $params = [
                'bookid' => $bookid,
                'bookname'=> $bookname,
                'userid'=>$userid,
                'username'=>$username,
                'reqdate'=>$reqdate,
                'status' => $status
                ];
                $par = [
                    'borrowlimit' => $limit-1
                ];
                $parm = [
                    'bookcopy' => $bookcp-1
                ];
                DB::table('bor')
                    ->insert($params);
                DB::table('info')
                    ->where('userid', $id2)
                    ->update($par);
                DB::table('book')
                    ->where('bookid', $bookid)
                    ->update($parm);
                return redirect('/userbook');
            }
            else
            {
                echo "You Have Reached Limit";
            }
        }
        else
        {
            return view('borrowwarning.index');
        }
        /*return view('borrowlist.index')
            ->with('BookDetails', $BookDetails)
            ->with('UserDetails', $UserDetails);*/

    }
    public function get($id)
    {
        $borrow = DB::table('bor')
            ->where('userid', $id)
            ->get();
        return view('borrowlist.index')
            ->with('borrow',$borrow);
    }
    public function destroy($borrowid, $userid, $bookid)
    {
        DB::table('bor')
            ->where('id', $borrowid)
            ->delete();
        DB::table('info')
            ->where('userid', $userid)
            ->increment('borrowlimit', 1);
        DB::table('book')
            ->where('bookid', $bookid)
            ->increment('bookcopy', 1);
        $borrow = DB::table('bor')
            ->where('userid', $userid)
            ->get();
        return redirect("/borrow/$userid")
            ->with('borrow',$borrow);
    }
     public function destroy1($borrowid, $userid, $bookid)
    {
        DB::table('bor')
            ->where('id', $borrowid)
            ->delete();
        DB::table('info')
            ->where('userid', $userid)
            ->increment('borrowlimit', 1);
        DB::table('book')
            ->where('bookid', $bookid)
            ->increment('bookcopy', 1);
         $ureq = DB::table('bor')
                ->get();
            //dd($ureq);
        return redirect('/borrowreq')
                ->with('ureq', $ureq);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function searchborrowreq(Request $request)
    {
        $ureq = DB::table('bor')
                ->where('userid','LIKE' ,'%'.$request->searchuser.'%')
                ->where('status', 0)
                ->get();
        return view('borrowrequests.index')
                    ->with('ureq', $ureq);
    }
    public function show()
    {
        $ureq = DB::table('bor')
                ->where('status', 0)
                ->orderby('reqdate', 'desc')
                ->get();
            //dd($ureq);
        return view('borrowrequests.index')
                ->with('ureq', $ureq);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function borrowRequestAccept($id)
    {
        $userid = '';
        $username = '';
        $bookid = 0;
        $bookname = '';
        $issuedate = Carbon::now();
        $returndate = $issuedate->addDays(3);
        $status = 'issued'; 
        $reqdate = '';  
        
        $bordata = DB::table('bor')
                ->where('id', $id)
                ->get();
        foreach($bordata as $bord)
        {
            $userid = $bord->userid;
            $username = $bord->username;
            $bookid = $bord->bookid;
            $bookname = $bord->bookname;
            $reqdate = $bord->reqdate;
        }
        $params=[
            'userid' => $userid,
            'username' => $username,
            'bookid' => $bookid,
            'bookname' => $bookname,
            'borrowdate'=> Carbon::now(),
            'returndate'=> $returndate,
            'status' => $status,
            'reqdate' => $reqdate
        ];
        DB::table('borrow')
            ->insert($params);
        DB::table('bor')
            ->where('id', $id)
            ->increment('status');
        return redirect('/borrowreq');
        
    }
    /*public function borrowRequestStatusUser($id)
    {
        $borreq = DB::table('bor')
                ->where('userid', $id)
                ->get();
        return view('borrowrequeststatus.index')
            ->with('borreq', $borreq);
    }*/
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function acceptedBooklistToUser($id)
    {
        $accept = DB::table('borrow')
                ->where('userid', $id)
                ->get();
        return view('borrowacceptuser.index')
                ->with('accept',$accept);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    public function finalb()
    {
        $fb = DB::table('borrow')
            ->get();
        return view('finalborrow.index')
            ->with('fb', $fb);
    }
    public function returnBook($borrowtableid, $userid, $bookid, $reqdate)
    {
        $par = [
            'status' => 'returned'
        ];
        DB::table('borrow')
            ->where('id', $borrowtableid)
            ->update($par);
        DB::table('info')
            ->where('userid', $userid)
            ->increment('borrowlimit');
        DB::table('book')
            ->where('bookid', $bookid)
            ->increment('bookcopy');
        DB::table('bor')
            ->where('userid', $userid)
            ->where('bookid', $bookid)
            ->where('reqdate', $reqdate)
            ->increment('status');
        return redirect('/finalborrow');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    
}
