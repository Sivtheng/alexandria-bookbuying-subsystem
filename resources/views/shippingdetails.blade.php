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
            <form action="{{ route('books.order', ['id' => $book['Id']]) }}" method="POST">
                @csrf <!-- CSRF protection -->
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name"><br>
        
                <label for="address">Address:</label><br>
                <input type="text" id="address" name="address"><br>
        
                <label for="phone">Phone Number:</label><br>
                <input type="text" id="phone" name="phone"><br>
        
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email"><br>
        
                <button type="submit">Confirm Order</button>
            </form>
        </div>
</div>
@endsection
