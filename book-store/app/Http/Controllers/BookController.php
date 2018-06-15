<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Book;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    //- index  - returns view to list all books

    public function index()
    {
        $books = DB::table('books')->get();
        $view = view('list');
        $view->books = $books;
        return $view;
    }


//- create - returns view to create new Category
    public function create()
    {
        $categories = \App\Category::all();
        
        $view = view('create');
        $view->categories  = $categories;
        return $view;
        
    }
    //- store  - creates new category and redirects to edit
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'year' => 'required'
        ]);
        
        $book = new Book();
        $book->fill([
            'title' => $request->input('title'),
            'year' => $request->input('year')
        ]);

        $book->save();
        $book->categories()->sync($request->categories);

    return redirect()->action('BookController@edit', ['id' => $book->id]);
        
    }
    //- edit   - returns edit view for category with given id
    public function edit($id = null)
    {
            $book = Book::findOrFail($id);
     
            $view = view('edit');
            $view->book = $book;
            
            return $view;
        
    }
    public function update(Request $request, $id)
    {
        
        $this->validate($request, [
            'title' => 'required',
            'year' => 'required'
        ]);

        $book = Book::findOrFail($id);

        $book->fill([
            'title' => $request->input('title'),
            'year' => $request->input('year')
        ]);


        $book->save();
        return redirect()->action('BookController@edit', ['id' => $book->id]);
    }

    public function show($id = null)
    {
      $view= view('show');
      $book = Book::findOrFail($id);
      $view->book = $book;
      return $view  ;
    }
 
   //return redirect()->action('BookController@index')
}
