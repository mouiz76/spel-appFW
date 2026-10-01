@extends('layouts.app')

@section('title', 'Orderregels')

@section('content')
<div class="bg-white p-6 rounded border border-gray-200">
    <h1 class="text-xl font-bold mb-4">Orderregels</h1>

    @if (count($orderRows) === 0)
        <p class="text-gray-500">Geen orderregels gevonden.</p>
    @else
        <table class="w-full border-collapse border border-gray-200 text-left text-sm">
            <thead class="bg-gray-50">
                <tr>
                    <th class="border border-gray-200 p-2 w-20">ID</th>
                    <th class="border border-gray-200 p-2">Order ID</th>
                    <th class="border border-gray-200 p-2">Product</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orderRows as $orderRow)
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-200 p-2">{{ $orderRow->id ?? $loop->iteration }}</td>
                        <td class="border border-gray-200 p-2">Order #{{ $orderRow->order_id }}</td>
                        <td class="border border-gray-200 p-2">{{ $orderRow->product->name ?? $orderRow->product_id }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
