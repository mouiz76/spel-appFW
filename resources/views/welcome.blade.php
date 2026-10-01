@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="bg-white p-6 rounded border border-gray-200">
    <h1 class="text-2xl font-bold mb-2">Welkom bij Spel App</h1>
    <p class="text-gray-600 mb-6">Kies een onderdeel uit het menu of hieronder:</p>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
        <a href="{{ route('products.index') }}" class="p-4 border border-gray-200 rounded hover:bg-gray-50">
            <h2 class="font-bold text-blue-600">Producten</h2>
            <p class="text-sm text-gray-500">Overzicht van producten</p>
        </a>

        <a href="{{ route('categories.index') }}" class="p-4 border border-gray-200 rounded hover:bg-gray-50">
            <h2 class="font-bold text-blue-600">Categorieën</h2>
            <p class="text-sm text-gray-500">Overzicht van categorieën</p>
        </a>

        <a href="{{ route('orders.index') }}" class="p-4 border border-gray-200 rounded hover:bg-gray-50">
            <h2 class="font-bold text-blue-600">Bestellingen</h2>
            <p class="text-sm text-gray-500">Overzicht van orders</p>
        </a>

        <a href="{{ route('prices.index') }}" class="p-4 border border-gray-200 rounded hover:bg-gray-50">
            <h2 class="font-bold text-blue-600">Prijzen</h2>
            <p class="text-sm text-gray-500">Overzicht van prijzen</p>
        </a>

        <a href="{{ route('order-rows.index') }}" class="p-4 border border-gray-200 rounded hover:bg-gray-50">
            <h2 class="font-bold text-blue-600">Orderregels</h2>
            <p class="text-sm text-gray-500">Overzicht van orderregels</p>
        </a>

        <a href="{{ route('reviews.index') }}" class="p-4 border border-gray-200 rounded hover:bg-gray-50">
            <h2 class="font-bold text-blue-600">Reviews</h2>
            <p class="text-sm text-gray-500">Overzicht van reviews</p>
        </a>

        <a href="{{ route('users.index') }}" class="p-4 border border-gray-200 rounded hover:bg-gray-50">
            <h2 class="font-bold text-blue-600">Gebruikers</h2>
            <p class="text-sm text-gray-500">Overzicht van gebruikers</p>
        </a>

        <a href="{{ route('examples.index') }}" class="p-4 border border-gray-200 rounded hover:bg-gray-50">
            <h2 class="font-bold text-blue-600">Voorbeelden</h2>
            <p class="text-sm text-gray-500">Voorbeeld pagina</p>
        </a>
    </div>
</div>
@endsection
