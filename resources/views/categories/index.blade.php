@extends('layouts.app')

@section('title', 'Categorieën')

@section('content')
<div class="bg-white p-6 rounded border border-gray-200">
    <div class="flex items-center justify-between mb-4">
        <h1 class="text-xl font-bold">Categorieën</h1>
        <a href="{{ route('categories.create') }}" class="bg-blue-600 text-white text-sm px-4 py-2 rounded hover:bg-blue-700">+ Nieuwe categorie</a>
    </div>

    @if (session('success'))
        <div class="mb-4 p-3 rounded bg-green-50 border border-green-200 text-green-800 text-sm">{{ session('success') }}</div>
    @endif

    @if (count($categories) === 0)
        <p class="text-gray-500">Geen categorieën gevonden.</p>
    @else
        <table class="w-full border-collapse border border-gray-200 text-left text-sm">
            <thead class="bg-gray-50">
                <tr>
                    <th class="border border-gray-200 p-2 w-20">ID</th>
                    <th class="border border-gray-200 p-2">Naam</th>
                    <th class="border border-gray-200 p-2 w-28">Producten</th>
                    <th class="border border-gray-200 p-2 w-64">Acties</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-200 p-2">{{ $category->id }}</td>
                        <td class="border border-gray-200 p-2 font-medium">{{ $category->name }}</td>
                        <td class="border border-gray-200 p-2">{{ $category->products_count }}</td>
                        <td class="border border-gray-200 p-2">
                            <div class="flex gap-3 items-center">
                                <a href="{{ route('categories.show', $category) }}" class="text-gray-700 hover:underline">Bekijken</a>
                                <a href="{{ route('categories.edit', $category) }}" class="text-blue-600 hover:underline">Bewerken</a>
                                <form action="{{ route('categories.destroy', $category) }}" method="POST"
                                      onsubmit="return confirm('Weet je zeker dat je deze categorie wilt verwijderen? Alle producten in deze categorie worden ook verwijderd.')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Verwijderen</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
