<div class="container">
    {{-- <h1>Browse all our books</h1>
    <div class="books-container">
        @foreach ($books as $book)
        <div class="book">
            <div class="image-container">
                <a href="{{ route('books.show', ['id' => $book['Id']]) }}">
                    <img src="http://147.182.252.99/{{ $book['Url'] }}" alt="{{ $book['BookName'] }}">
                </a>
            </div>
            <div class="book-details">
                <h2>{{ $book['BookName'] }}</h2>
                <p class="author">Author: {{ $book['Author'] }}</p>
                <p class="price">Price: ${{ $book['Price'] }}</p>
                <p class="genre">Genre: {{ $book['BookType'] }}</p>
            </div>
        </div>
        @endforeach
    </div> --}}
    <div class="container">
        <h1>Browse all our books</h1>
        <div class="books-container">
            @foreach ($books as $book)
            <div class="book">
                <div class="image-container">
                    <a href="{{ route('books.show', ['id' => $book['Id']]) }}">
                        <img src="http://147.182.252.99/{{ $book['Url'] }}" alt="{{ $book['BookName'] }}">
                    </a>
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
    <!-- Pagination Links -->
    {{-- <div class="pagination-links">
        @for ($i = 1; $i <= $totalPages; $i++)
            <a href="{{ url()->current() }}?page={{ $i }}" @if ($currentPage == $i) class="active" @endif>{{ $i }}</a>
        @endfor
    </div> --}}
    <div class="pagination-links">
        @if ($currentPage > 1)
            <a href="{{ url()->current() }}?page={{ $currentPage - 1 }}" class="pagination-arrow">&laquo; Previous</a>
        @endif
    
        @for ($i = 1; $i <= $totalPages; $i++)
            <a href="{{ url()->current() }}?page={{ $i }}" class="@if ($currentPage == $i) active @endif">{{ $i }}</a>
        @endfor
    
        @if ($currentPage < $totalPages)
            <a href="{{ url()->current() }}?page={{ $currentPage + 1 }}" class="pagination-arrow">Next &raquo;</a>
        @endif
    </div>
    
    
    </div>
    
</div>
