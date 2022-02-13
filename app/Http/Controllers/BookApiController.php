<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Symfony\Component\HttpFoundation\Response;

class BookApiController extends Controller
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
            'books'     => Book::find($id),
            'authors'   => Book::find($id)->writers
            
        ];

        return response()->json($response, Response::HTTP_OK);
    }

    
}
