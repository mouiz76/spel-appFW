@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="bg-white p-6 rounded border border-gray-200">
    <div class="flex items-center justify-between mb-4">
        <h1 class="text-xl font-bold">{{ $product->name }}</h1>
        <div class="flex gap-3 text-sm">
            <a href="{{ route('products.edit', $product) }}" class="text-blue-600 hover:underline">Bewerken</a>
            <a href="{{ route('products.index') }}" class="text-gray-700 hover:underline">Terug naar overzicht</a>
        </div>
    </div>

    <dl class="text-sm space-y-3">
        <div>
            <dt class="font-semibold">Categorie</dt>
            <dd>
                @if ($product->category)
                    <a href="{{ route('categories.show', $product->category) }}" class="text-blue-600 hover:underline">{{ $product->category->name }}</a>
                @else
                    -
                @endif
            </dd>
        </div>
        <div>
            <dt class="font-semibold">Beschrijving</dt>
            <dd class="whitespace-pre-line">{{ $product->description ?: '-' }}</dd>
        </div>
    </dl>
</div>
@endsection
