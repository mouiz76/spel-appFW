@extends('layouts.app')

@section('title', 'Bestellingen')

@section('content')
<div class="bg-white p-6 rounded border border-gray-200">
    <h1 class="text-xl font-bold mb-4">Bestellingen</h1>

    @if (count($orders) === 0)
        <p class="text-gray-500">Geen bestellingen gevonden.</p>
    @else
        <table class="w-full border-collapse border border-gray-200 text-left text-sm">
            <thead class="bg-gray-50">
                <tr>
                    <th class="border border-gray-200 p-2 w-20">ID</th>
                    <th class="border border-gray-200 p-2">Status</th>
                    <th class="border border-gray-200 p-2">Besteld op</th>
                    <th class="border border-gray-200 p-2">Gebruiker</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-200 p-2 font-medium">#{{ $order->id }}</td>
                        <td class="border border-gray-200 p-2">{{ $order->status }}</td>
                        <td class="border border-gray-200 p-2">{{ $order->ordered_at ? $order->ordered_at->format('d-m-Y H:i') : '-' }}</td>
                        <td class="border border-gray-200 p-2">{{ $order->user->name ?? $order->user_id }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
