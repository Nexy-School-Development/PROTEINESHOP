@extends('components.layout')

@section('content')
    <div class="container mx-auto p-4">
        <div class="grid grid-cols-3 gap-4">
            @foreach ($products as $product)
                <div class="border p-4">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                        class="w-full h-48">
                    <h2 class="text-xl font-bold">{{ $product->name }}</h2>
                    <p>{{ $product->description }}</p>
                    <p class="text-lg font-semibold">${{ $product->price }}</p>
                    <div class="Products">
                        <div class="flex items-center mt-2">
                            <button type="button" class="bg-gray-300 text-gray-700 px-2 py-1"
                                onclick="decrementAmount({{ $product->id }})">-</button>
                            <input type="number" id="amount-{{ $product->id }}" name="amount"
                                class="mx-2 border text-center w-16" value="1" min="1"
                                onchange="updateHiddenAmount({{ $product->id }})">
                            <button type="button" class="bg-gray-300 text-gray-700 px-2 py-1"
                                onclick="incrementAmount({{ $product->id }})">+</button>
                        </div>
                        <form action="{{ route('cart.add', ['id' => $product->id]) }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="hidden" id="amount-input-{{ $product->id }}" name="amount" value="1">
                            <button type="submit" class="mt-2">
                                <img src="{{ asset('media/images/shop.svg') }}" alt="Add to Cart" class="w-8 h-8">
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

<script>
    function decrementAmount(productId) {
        var amountInput = document.getElementById('amount-' + productId);
        var currentValue = parseInt(amountInput.value);
        if (currentValue > 1) {
            amountInput.value = currentValue - 1;
            document.getElementById('amount-input-' + productId).value = amountInput.value;
        }
    }

    function incrementAmount(productId) {
        var amountInput = document.getElementById('amount-' + productId);
        var currentValue = parseInt(amountInput.value);
        amountInput.value = currentValue + 1;
        document.getElementById('amount-input-' + productId).value = amountInput.value;
    }

    function updateHiddenAmount(productId) {
        var amountInput = document.getElementById('amount-' + productId);
        document.getElementById('amount-input-' + productId).value = amountInput.value;
    }
</script>