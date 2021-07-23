<?php

namespace Author\Http\Controllers;

use Author\Models\Author;
use Author\Models\Book;
use Author\Models\Sharing;
use Author\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SharingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Sharing::leftJoin('books','books.id','=','sharings.book_id')
        ->where('sharings.user_id',Auth::user()->id)
        ->get();
        return view('sharing.index',compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::pluck('name','id')->except(Auth::user()->id);
        $book = Book::pluck('name','id');
        return view('sharing.create',compact('user','book'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput = $request->except('user_id');
        $formInput['user_id'] = Auth::user()->id;
        Sharing::create($formInput);
        return redirect()->route('sharing.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Author\Models\Sharing  $sharing
     * @return \Illuminate\Http\Response
     */
    public function show(Sharing $sharing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Author\Models\Sharing  $sharing
     * @return \Illuminate\Http\Response
     */
    public function edit(Sharing $sharing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Author\Models\Sharing  $sharing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $formInput = $request->except('user_id');
        $formInput['user_id'] = Auth::user()->id;
        Author::create($formInput);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Author\Models\Sharing  $sharing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sharing $sharing)
    {
        //
    }
}
