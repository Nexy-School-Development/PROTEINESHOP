<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" sm:rounded-lg">
                <div class="p-6 font-antonio text-text">

                    <div
                        class="uppercase text-subtitle p-4 text-xl font-bold flex justify-between items-center">
                        <a href="products/create">Create a new product</a>
                        <a href="/">Back to the home page</a>
                    </div>


                    <div class="container mx-auto p-4">
                        <div class="grid grid-cols-3 gap-4">
                            @foreach ($products as $product)
                                <div class="border border-black p-4 group">
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                        class="w-full h-48 object-cover">
                                    <h2 class="text-xl font-bold">{{ $product->name }}</h2>
                                    <p>{{ $product->description }}</p>
                                    <p class="text-lg font-semibold">${{ $product->price }}</p>
                                    <div
                                        class="Products text-xl text-center border-2 uppercase font-bold p-2 hidden group-hover:block">
                                        <a href="{{ route('products.edit', $product->id) }}">Edit product</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
