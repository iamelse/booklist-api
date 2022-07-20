<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Writer;
use Symfony\Component\HttpFoundation\Response;

class WriterController extends Controller
{
    public function index()
    {
        $response = [
            'message'   => 'HTTP ' . Response::HTTP_OK . ' OK',
            'total'     => Writer::all()->count(),
            'authors'     => Writer::with('books')->get(),
        ];

        return response()->json($response, Response::HTTP_OK);
    }

    public function show($writer_id)
    {
        $response = [
            'message'   => 'HTTP ' . Response::HTTP_OK . ' OK',
            'author'     => Writer::with('books')->where('id', $writer_id)->get(),
        ];

        return response()->json($response, Response::HTTP_OK);
    }
}
