@extends('layouts.app')

@section('title', 'Prijzen')

@section('content')
<div class="bg-white p-6 rounded border border-gray-200">
    <h1 class="text-xl font-bold mb-4">Prijzen</h1>

    @if (count($prices) === 0)
        <p class="text-gray-500">Geen prijzen gevonden.</p>
    @else
        <table class="w-full border-collapse border border-gray-200 text-left text-sm">
            <thead class="bg-gray-50">
                <tr>
                    <th class="border border-gray-200 p-2 w-20">ID</th>
                    <th class="border border-gray-200 p-2">Product</th>
                    <th class="border border-gray-200 p-2">Prijs</th>
                    <th class="border border-gray-200 p-2">Ingangsdatum</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prices as $price)
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-200 p-2">{{ $price->id }}</td>
                        <td class="border border-gray-200 p-2">{{ $price->product->name ?? $price->product_id }}</td>
                        <td class="border border-gray-200 p-2 font-medium">€{{ $price->price }}</td>
                        <td class="border border-gray-200 p-2">{{ $price->effective_date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
