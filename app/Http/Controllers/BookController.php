<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BookController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $title = "All Books";
        $books = Book::paginate(3);

    // Pass the paginated books to the view
        return view('books.index', compact(['books', "title"]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Create Books";
        return view('books.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $validated = $request->validate([
            //validation
            'title' => 'required|string|min:5|max:255|unique:books',
            'author' => 'required|string|min:10',
            'isbn' => 'required|string|min:2',
            'description' => 'required|string|min:10',

        ]);

        //create books
        $request->user()->books()->create($validated);
        return redirect()->route('books.index')->with('success', 'Create Successfully.');



    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        // dd($book);
        $title = "Show Book";
        return view('books.show', compact(['book', 'title']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $title = 'Edit Book';
        return view('books.edit', compact(['book', 'title']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $book->update($request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',

        ]));
        return redirect()->route(route: 'books.index')->with('success', 'Update Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Delete Successfully.');
    }
}
