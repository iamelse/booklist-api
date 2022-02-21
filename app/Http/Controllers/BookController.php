<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookWriter;
use App\Models\Writer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{

    public function index()
    {
        return view('books.index', [
            'title'         => 'Dashboard - All Books',
            'books'         =>  Book::with('writers')->latest()->paginate(8)
        ]);
    }

    public function create()
    {
        return view('books.create', [
            'title'         => 'Dashboard - Create Book Page',
            'writers'       => Writer::all()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'         => 'required|max:255',
            'writer'        => 'required|max:255',
            'descriptions'  => 'required',
            'image'         => 'required|file',
            'page'          => 'required',
            'year'          => 'required'
        ]);    

        if($request->file('image')) {
            $validated['image'] = $request->file('image')->store('cover_images');
        }

        $book = Book::create([
            'title'         => $validated['title'],
            'descriptions'  => $validated['descriptions'],
            'image'         => $validated['image'],
            'page'          => $validated['page'],
            'year'          => $validated['year']
        ]);

        $book_writer = BookWriter::create([
            'book_id'       => $book->id,
            'writer_id'     => $validated['writer']
        ]);

        return redirect('/tools/books')->with('success', 'New book successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('books.show', [
            'title'         => $book->title,
            'book'          => Book::where('id', $book->id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
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
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $rules = [
            'title'         => 'required|max:255',
            'category_id'   => 'required',
            'image'         => 'image|file|max:10000',
            'body'          => 'required' 
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('cover-images');
        }

        Book::where('id', $book->id)->update($validatedData);

        return redirect('/dashboard/posts')->with('success', 'Post has been changed!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
