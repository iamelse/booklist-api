<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Symfony\Component\HttpFoundation\Response;

class BookController extends Controller
{
    public function index()
    {
        $response = [
            'message'   => 'HTTP ' . Response::HTTP_OK . ' OK',
            'total'     => Book::latest()->filter(request(['search']))->count(),
            'books'     => Book::latest()->filter(request(['search']))->get(),
        ];

        return response()->json($response, Response::HTTP_OK);
    }

    
    public function show($id)
    {
        
        $response = [
            'message'   => 'HTTP ' . Response::HTTP_OK,
            'books'     => Book::findOrFail($id),
            'authors'   => Book::findOrFail($id)->writers
            
        ];

        return response()->json($response, Response::HTTP_OK);
    }
}
