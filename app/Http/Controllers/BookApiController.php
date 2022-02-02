<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Symfony\Component\HttpFoundation\Response;

class BookApiController extends Controller
{

    public function index()
    {
        $response = [
            'message' => 'Semua daftar buku yang tersedia',
            'data'      => Book::orderBy('created_at', 'DESC')->get(),
        ];

        return response()->json($response, Response::HTTP_OK);
    }

    
    public function show(Book $book, $id)
    {
        $response = [
            'message' => 'Sukses menampilkan sebuah buku',
            'data'      =>  Book::find($id)
        ];

        return response()->json($response, Response::HTTP_OK);
    }

    
}
