@extends('layouts.app')

@section('title', 'Nieuwe categorie')

@section('content')
<div class="bg-white p-6 rounded border border-gray-200 max-w-xl">
    <h1 class="text-xl font-bold mb-4">Nieuwe categorie</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        @include('categories._form')

        <div class="flex gap-3">
            <button type="submit" class="bg-blue-600 text-white text-sm px-4 py-2 rounded hover:bg-blue-700">Opslaan</button>
            <a href="{{ route('categories.index') }}" class="text-sm px-4 py-2 rounded border border-gray-300 hover:bg-gray-50">Annuleren</a>
        </div>
    </form>
</div>
@endsection
