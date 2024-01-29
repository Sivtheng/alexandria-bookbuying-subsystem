<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;


class BookController extends Controller
{
    // public function index()
    //     {
    //         $response = Http::get('http://147.182.206.240:8083/api/listbook'); 
    //         $books = $response->json()['data']; 

    //         return view('welcome', ['books' => $books]);
    //     }
    
    public function index()
    {
    // Fetch data from the external API
    $response = Http::get('http://147.182.206.240:8083/api/listbook'); 
    $books = $response->json()['data']; 

    // Paginate the data manually
    $perPage = 10; // Number of items per page
    $totalPages = ceil(count($books) / $perPage); // Calculate total pages
    $currentPage = request()->get('page') ?? 1; // Get current page or default to 1

    // Calculate the starting index for the slice
    $startIndex = ($currentPage - 1) * $perPage;

    // Slice the array to get the current page's data
    $paginatedBooks = array_slice($books, $startIndex, $perPage);

    // Pass the paginated data to the view
    return view('welcome', [
        'books' => $paginatedBooks,
        'totalPages' => $totalPages,
        'currentPage' => $currentPage,
        'perPage' => $perPage
    ]);
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