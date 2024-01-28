@extends('layout.headfoot')

@section('title', 'Alexandria')
<link href="{{ asset('css/bookdetails.css') }}" rel="stylesheet">
@section('content')
<div class="container">
    <div class="book-details-container">
        <div class="image-section">
            <img src="http://147.182.252.99/{{ $book['Url'] }}" alt="{{ $book['BookName'] }}">
        </div>
        <div class="details-section">
            <h2>{{ $book['BookName'] }}</h2>
            <p><strong>Author:</strong> {{ $book['Author'] }}</p>
            <p><strong>Price:</strong> ${{ $book['Price'] }}</p>
            <p><strong>Total Books:</strong> {{ $book['TotalBook'] }}</p>
            <p><strong>Genre:</strong> {{ $book['BookType'] }}</p>
            <p><strong>Book ID:</strong> {{ $book['Id'] }}</p>
        </div>
    </div>
    <button class="order-button">Order Now</button>
</div>
@endsection
