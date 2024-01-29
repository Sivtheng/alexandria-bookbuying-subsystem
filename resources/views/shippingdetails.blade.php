@extends('layout.headfoot')

@section('title', 'Alexandria')
@section('content')
<link href="{{ asset('css/formpage.css') }}" rel="stylesheet">
<div class="container">
    <div class="book-details-container">
        <div class="image-section">
            <img src="http://147.182.252.99/{{ $book['Url'] }}" alt="{{ $book['BookName'] }}">
        </div>
        <div class="form-section">
            <form action="{{ route('make.order') }}" method="POST">
            {{-- <form action="http://147.182.206.240:8083/api/makeOrder" method="POST"> --}}
                @csrf <!-- CSRF protection -->
                @method('POST') <!-- Use POST method -->
        
                <label for="book_id">Book ID:</label><br>
                <input type="text" id="book_id" name="book_id" value="{{ $book['Id'] }}" readonly><br>
                
                <label for="phone_number">Phone Number:</label><br>
                <input type="text" id="phone_number" name="phone_number"><br>
            
                <label for="address">Address:</label><br>
                <input type="text" id="address" name="address"><br>
            
                <label for="total_book">Total Books:</label><br>
                <input type="text" id="total_book" name="total_book"><br>
                
                <button type="submit">Submit</button>
            </form>
        </div>

</div>
@endsection
