<?php

namespace Author\Http\Controllers;

use Author\Models\Author;
use Author\Models\Book;
use Author\Models\Category;
use Author\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::findOrFail(Auth::user()->id);
        $book = Book::leftJoin('authors','books.id','=','authors.book_id')->where('authors.user_id',Auth::user()->id)->get();
        return view('books.index',compact('book','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caty = Category::pluck('name','id');
        return view('books.create',compact('caty'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput = $request->except('cover','user_id');
        $user = Auth::user()->id;
        $image = $request->cover;

        if(!empty($image))
        {
            $imageName = $image->getClientOriginalName();
            $image->move('images/books', $imageName);
        }
        $formInput['cover'] = $imageName;

        $book = Book::create($formInput);

        Author::create([
            'user_id' => $user,
            'book_id' => $book->id
        ]);

        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Author\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);
        $author = User::leftJoin('authors','users.id','=','authors.user_id')->where('authors.book_id',$book->id)->get();
        return view('books.show',compact('book','author'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Author\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Author\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Author\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
