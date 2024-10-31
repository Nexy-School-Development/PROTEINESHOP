<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

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
                            class="uppercase text-subtitle p-4 text-5xl font-antonio font-bold flex justify-between items-center">
                            <a href="/product/create">Create a new product</a>
                            <a href="/">Back to the home page</a>
                        </div>


                        <div class="container mx-auto p-4">
                            <div class="grid grid-cols-3 gap-4">
                                @foreach ($products as $product)
                                    <div class="border p-4">
                                        <img src="{{ $product->image }}" alt="{{ $product->name }}"
                                            class="w-full h-48 object-cover">
                                        <h2 class="text-xl font-bold">{{ $product->name }}</h2>
                                        <p>{{ $product->description }}</p>
                                        <p class="text-lg font-semibold">${{ $product->price }}</p>
                                        <div class="Products">
                                            <div class="flex items-center mt-2">
                                                <button class="bg-gray-300 text-gray-700 px-2 py-1"
                                                    onclick="decrementAmount({{ $product->id }})">-</button>
                                                <input type="number" id="amount-{{ $product->id }}" name="amount"
                                                    class="mx-2 border text-center w-16" value="1" min="1">
                                                <button class="bg-gray-300 text-gray-700 px-2 py-1"
                                                    onclick="incrementAmount({{ $product->id }})">+</button>
                                            </div>
                                            <form action="{{ route('cart.add', ['id' => $product->id]) }}"
                                                method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <input type="hidden" id="amount-input-{{ $product->id }}"
                                                    name="amount" value="1">
                                                <a href="{{ route('products.edit', $product->id) }}"
                                                    class="text-xl text-center border-2 uppercase font-bold p-2 hidden group-hover:inline-block">Edit
                                                    product</a>
                                            </form>
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

</x-app-layout>
