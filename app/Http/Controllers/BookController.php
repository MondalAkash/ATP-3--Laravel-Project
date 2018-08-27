<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreateBookRequest;
use App\Http\Requests\AddBookCopyRequest;
use App\Http\Requests\EditBookDetailsRequest;



class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booklist = DB::table('book')
            ->get();
            //dd($booklist);
        return view('booklist.index')
            ->with('booklist', $booklist);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createbook.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBookRequest $request)
    {
        $params = [
            'bookname' => $request->bookname,
            'authorname' => $request->authorname,
            'bookcopy' => $request->bookcopy
        ];
        DB::table('book')
            ->insert($params);
        return redirect('/book');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //specific book details will be shown
        $books = DB::table('book')
            ->where('bookid', $id)
            ->get();
        return view('bookdetails.index')
            ->with('books', $books);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = DB::table('book')
            ->where('bookid', $id)
            ->get()
            ->first();
        return view('editbookdetails.index')
            ->with('book', $book);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditBookDetailsRequest $request)
    {
        $param = [
            'bookname' => $request->bookname,
            'authorname' => $request->authorname,
            'bookcopy' => $request->bookcopy
        ];
        DB::table('book')
            ->where('bookid', $request->bookid)
            ->update($param);

        return redirect('/book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('book')
            ->where('bookid', $id)
            ->delete();
        return redirect('/book');
    }
    public function delete($id)
    {
        $book = DB::table('book')
            ->where('bookid', $id)
            ->first();
        return view('deletebookdetails.index')
            ->with('book', $book);
    }
    public function add($id)
    {
        $book = DB::table('book')
            ->where('bookid', $id)
            ->get()
            ->first();
        return view('addbookcopydetails.index')
            ->with('book', $book);
    }
    public function addCopy(AddBookCopyRequest $request)
    {
        /*$bookcopy = (int)$request->bookcopy;
        $newbookcp = (int)$request->nbookcp;*/
        //$final = $bookcopy + $newbookcp; 
        //$final = $request->bookcopy + $request->nbookcp;
         $param = [
            'bookname' => $request->bookname,
            'authorname' => $request->authorname,
            'bookcopy' => $request->bookcopy + $request->nbookcp
        ];
        //dd($final);
        DB::table('book')
            ->where('bookid', $request->bookid)
            ->update($param);

        return redirect('/book');
    }
    public function bookSearch(Request $request)
    {
        $booklist = DB::table('book')
            ->where('bookname', 'LIKE' ,'%'.$request->searchbook.'%')
            ->get();
         return view('booklist.index')
            ->with('booklist', $booklist);

    }
}
