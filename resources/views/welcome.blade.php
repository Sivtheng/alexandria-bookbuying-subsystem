@extends('layout.headfoot')

@section('title', 'Alexandria')

@section('content')
    @include('layout.hero')
    <div class="container">
        <h1>New Arrivals</h1>
        <div class="books-container">
            @foreach ($books as $book)
            <div class="book">
                <div class="image-container">
                    <img src="http://147.182.252.99/{{ $book['Url'] }}" alt="{{ $book['BookName'] }}">
                </div>
                <div class="book-details">
                    <h2>{{ $book['BookName'] }}</h2>
                    <p class="author">Author: {{ $book['Author'] }}</p>
                    <p class="price">Price: ${{ $book['Price'] }}</p>
                    <p class="genre">Genre: {{ $book['BookType'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
    </div>    
        {{-- <div class="pagination">
            {{ $books->links() }}
        </div> --}}
    </div>

@endsection