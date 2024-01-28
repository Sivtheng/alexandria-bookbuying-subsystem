<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{

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
            return view('shippingdetails', compact('book'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to fetch book details: ' . $e->getMessage());
        }
    }
    

        public function makeOrder(Request $request)
        {
            try {
                // Extract form data
                $bookId = $request->input('book_id');
                $phoneNumber = $request->input('phone_number');
                $address = $request->input('address');
                $totalBook = $request->input('total_book');

                // Make the request to the API
                $response = Http::post('http://147.182.206.240:8083/api/makeOrder', [
                    'book_id' => $bookId,
                    'phone_number' => $phoneNumber,
                    'address' => $address,
                    'total_book' => $totalBook,
                ]);

                dd($response);

                // Check the response and handle accordingly
                if ($response->successful()) {
                    // Order successful
                    return response()->json(['message' => 'Order placed successfully'], 200);
                } else {
                    // Order failed
                    return response()->json(['message' => 'Failed to place order'], 500);
                }
            } catch (\Exception $e) {
                // Handle exceptions
                return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
            }
        }



}
