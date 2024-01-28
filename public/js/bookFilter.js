function filterBooks(genre) {
    const books = document.querySelectorAll('.book');
    books.forEach(book => {
        const bookGenre = book.getAttribute('data-genre');
        if (genre === 'all' || genre === bookGenre) {
            book.style.display = 'block';
        } else {
            book.style.display = 'none';
        }
    });
}
