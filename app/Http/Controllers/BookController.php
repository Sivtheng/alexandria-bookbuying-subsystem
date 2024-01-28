<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\Paginator;


class BookController extends Controller
{
    public function index()
        {
            $response = Http::get('http://147.182.206.240:8083/api/listbook'); 
            $books = $response->json()['data']; 

            return view('welcome', ['books' => $books]);
        }


    public function show($id)
        {
            try {
                // Retrieve all book details from the API
                $response = Http::get('http://147.182.206.240:8083/api/listbook');
                $books = $response->json()['data'];
        
                // Find the book with the given ID
                $book = collect($books)->firstWhere('Id', $id);
        
                // Check if $book is null (not found)
                if (!$book) {
                    return redirect()->back()->with('error', 'Book details not found.');
                }
        
                // Pass the book details to the view
                return view('bookdetails', compact('book'));
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Failed to fetch book details: ' . $e->getMessage());
            }
        }
        
        
}