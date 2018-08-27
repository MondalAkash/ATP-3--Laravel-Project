<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ReportingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reporting.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function highestBorrowedBook()
    {
        $sql = 'select bookname, count(*) as ct from borrow group by bookname order by ct desc';
        $borrow = DB::select($sql);
        //dd($borrow);
        return view('highestBorrowedBook.index')
            ->with('borrow', $borrow);
    }
}
