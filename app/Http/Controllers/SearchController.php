<?php

namespace Author\Http\Controllers;

use Author\Models\Book;
use Author\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getBook(Request $request)
    {
        $query = $request->input('queryBook');

        if (!$query) {
            return redirect()->route('home');
        }

        $books = Book::where(DB::raw("CONCAT(name, ' ', company)"), 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->get();

        /**dd($users);*/

        return view('search.result')->with('books', $books);
    }
    public function getAuthor(Request $request)
    {
        $query = $request->input('queryAuthor');

        if (!$query) {
            return redirect()->route('home')->with('info',"Sem Resultados para essa Pesquisa!");
        }

        $authors = User::where(DB::raw("CONCAT(name, ' ',email)"), 'LIKE', "%{$query}%")
            ->orWhere('number', 'LIKE', "%{$query}%")
            ->get();

        return view('search.result2', compact('authors'));
    }
}
