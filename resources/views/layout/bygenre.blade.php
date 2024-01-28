<div class="container">
    <h1>Shop by Genre</h1>
    <div class="genre-filters">
        <button onclick="filterBooks('all')">All</button>
        <button onclick="filterBooks('ghost')">Ghost</button>
        <button onclick="filterBooks('SuperHero marto')">SuperHero Marto</button>
        <!-- Add more genre buttons as needed -->
    </div>
    <div class="books-container">
        @foreach ($books as $book)
        <div class="book" data-genre="{{ $book['BookType'] }}">
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

