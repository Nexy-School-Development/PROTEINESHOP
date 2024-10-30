@extends('components.layout')

    <x-header/>
    @section('content')
    <div class="container mx-auto p-4">
        <div class="grid grid-cols-3 gap-4">
            @foreach($products as $product)
                <div class="border p-4">
                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
                    <h2 class="text-xl font-bold">{{ $product->name }}</h2>
                    <p>{{ $product->description }}</p>
                    <p class="text-lg font-semibold">${{ $product->price }}</p>
                </div>
            @endforeach
        </div>
    </div>
    @endsection