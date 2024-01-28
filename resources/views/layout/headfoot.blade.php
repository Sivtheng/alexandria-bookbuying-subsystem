<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- css in public folder --}}
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bookdisplay.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pagination.css') }}" rel="stylesheet">
    <link href="{{ asset('css/genrefilter.css') }}" rel="stylesheet">
    {{-- Inter font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    {{-- navbar --}}
    <header>
        <div class="header-container">
            {{-- logo of alexandria --}}
            <div class="logo">
                <img src="{{ asset('images/alexandrialogo.png') }}" alt="Logo">
                <p>Alexandria</p>
            </div>
            {{-- the search bar in the middle --}}
            <div class="search-container">
                <div class="search-container">
                    <input type="text" placeholder="Search by title, author or ISBN here...">
                    <button type="submit">
                        <img src="{{ asset('images/search.png') }}" alt="searchsymbol">
                    </button>
                </div>
            </div>
            {{-- login register and cart --}}
            <div class="user-actions">
                <a href="#">Cart</a>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    {{-- footer --}}
    <footer class="footer">
        <div class="container-footer">
            <div class="footer-section">
                <img src="{{ asset('images/delivery-car.png') }}" alt="Image 1">
                <div class="text">
                    <p class="bold-footer-text">Free Delivery</p>
                    <p>For all orders over $99</p>
                </div>
            </div>
            <div class="footer-section">
                <img src="{{ asset('images/customer-service.png') }}" alt="Image 2">
                <div class="text">
                    <p class="bold-footer-text">Expert customer Service</p>
                    <p>For a shopping experience </p>
                </div>
            </div>
            <div class="footer-section">
                <img src="{{ asset('images/STAT-ICON.png') }}" alt="Image 3">
                <div class="text">
                    <p class="bold-footer-text">Amazing Value</p>
                    <p>We offer competitive prices</p>
                </div>
            </div>
            <div class="footer-section">
                <img src="{{ asset('images/secure-pay.png') }}" alt="Image 4">
                <div class="text">
                    <p class="bold-footer-text">Safe Payment</p>
                    <p>100% secure payment</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
