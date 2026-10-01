<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Spel App')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col">

    <!-- Navigatie -->
    <nav class="bg-white border-b border-gray-200">
        <div class="max-w-6xl mx-auto px-4 py-3 flex items-center justify-between">
            <a href="{{ url('/') }}" class="text-lg font-bold text-gray-900">
                Spel App
            </a>

            <div class="flex flex-wrap gap-4 text-sm font-medium">
                <a href="{{ url('/') }}" class="hover:text-blue-600">Home</a>
                <a href="{{ route('categories.index') }}" class="hover:text-blue-600">Categorieën</a>
                <a href="{{ route('products.index') }}" class="hover:text-blue-600">Producten</a>
                <a href="{{ route('prices.index') }}" class="hover:text-blue-600">Prijzen</a>
                <a href="{{ route('orders.index') }}" class="hover:text-blue-600">Bestellingen</a>
                <a href="{{ route('order-rows.index') }}" class="hover:text-blue-600">Orderregels</a>
                <a href="{{ route('reviews.index') }}" class="hover:text-blue-600">Reviews</a>
                <a href="{{ route('users.index') }}" class="hover:text-blue-600">Gebruikers</a>
                <a href="{{ route('examples.index') }}" class="hover:text-blue-600">Voorbeelden</a>
            </div>
        </div>
    </nav>

    <!-- Inhoud -->
    <main class="max-w-6xl w-full mx-auto px-4 py-6 flex-1">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 py-4 text-center text-sm text-gray-500">
        &copy; {{ date('Y') }} Spel App
    </footer>

</body>
</html>
