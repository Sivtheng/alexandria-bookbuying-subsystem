<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BookController extends Controller
{
    // public function index()
    // {
    //     $response = Http::get('http://147.182.206.240:8083/api/listbook');
    //     $books = $response->json()['data'];
    
    //     return view('welcome', compact('books'));
    // }

    public function index()
        {
            $response = Http::get('http://147.182.206.240:8083/api/listbook'); 
            $books = $response->json()['data']; 

            $perPage = 5;
            $currentPage = request()->query('page', 1);
            $pagedData = array_slice($books, ($currentPage - 1) * $perPage, $perPage);

            $paginatedBooks = new \Illuminate\Pagination\LengthAwarePaginator(
                $pagedData, count($books), $perPage, $currentPage
            );

            return view('welcome', ['books' => $paginatedBooks]);
        }
}