@extends('layouts.app')

@section('title', $category->name)

@section('content')
<div class="bg-white p-6 rounded border border-gray-200">
    <div class="flex items-center justify-between mb-4">
        <h1 class="text-xl font-bold">{{ $category->name }}</h1>
        <div class="flex gap-3 text-sm">
            <a href="{{ route('categories.edit', $category) }}" class="text-blue-600 hover:underline">Bewerken</a>
            <a href="{{ route('categories.index') }}" class="text-gray-700 hover:underline">Terug naar overzicht</a>
        </div>
    </div>

    <h2 class="font-semibold mb-2">Producten in deze categorie</h2>
    @if ($category->products->isEmpty())
        <p class="text-gray-500 text-sm">Nog geen producten in deze categorie.</p>
    @else
        <ul class="list-disc list-inside text-sm">
            @foreach ($category->products as $product)
                <li><a href="{{ route('products.show', $product) }}" class="text-blue-600 hover:underline">{{ $product->name }}</a></li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
