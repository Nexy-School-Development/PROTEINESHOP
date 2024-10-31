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
    
    
                        <div>
                            @foreach ($product as $index => $product)
                                <div
                                    class="flex {{ $index % 2 == 0 ? 'flex-row' : 'flex-row-reverse' }} items-center justify-center group gap-72">
                                    <div>
                                        <img src="{{ asset('storage/' . $product->image_path) }}"
                                            alt="{{ $product->name }}">
                                    </div>
                                    <div class="w-96">
                                        <h1 class="uppercase text-6xl font-antonio font-bold text-title">
                                            {{ $product->name }}</h1>
                                        <p class="text-xl font-antonio text-text">{{ $product->description }}</p>
                                        <a href="{{ route('product.edit', $product->id) }}"
                                                class="text-xl text-center font-antonio text-subtitle border-2 uppercase font-bold p-2 hidden group-hover:inline-block">Edit
                                                product</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
    
</x-app-layout>
