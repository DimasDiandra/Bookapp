<?php

namespace App\Http\Controllers;

use Illuminate\http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use Laravel\Lumen\Routing\Controller as BaseController;

class BooksController extends BaseController
{
    public function index()
    {
        return Book::all();
    }

    public function Id($id)
    {
        $book = Book::where('id', $id)->first();
        if ($book) {
            return $book;
        } else {
            return response()->json([
                'message' => 'Book Not Found',
            ], 404);
        }
    }

    //
}
