<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Shopping Cart</h1>
        @if(session('success'))
            <div class="bg-green-500 text-white p-2 mb-4">
                {{ session('success') }}
            </div>
        @endif
        @if(count($cart) > 0)
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2">Image</th>
                        <th class="py-2">Name</th>
                        <th class="py-2">Price</th>
                        <th class="py-2">Amount</th>
                        <th class="py-2">Total</th>
                        <th class="py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart as $id => $item)
                        <tr>
                            <td class="py-2"><img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="w-16 h-16 object-cover"></td>
                            <td class="py-2">{{ $item['name'] }}</td>
                            <td class="py-2">${{ $item['price'] }}</td>
                            <td class="py-2">{{ $item['quantity'] }}</td>
                            <td class="py-2">${{ $item['price'] * $item['quantity'] }}</td>
                            <td class="py-2">
                                <form action="{{ route('cart.remove', $id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="bg-red-500 text-white px-2 py-1">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                <tr>
                    <td colspan="3"></td>
                    <td class="py-2 font-bold">Total Price:</td>
                    <td class="py-2 font-bold">${{ array_sum(array_map(function($item) { return $item['price'] * $item['quantity']; }, $cart)) }}</td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="6" class="text-right">
                        <form action="{{ route('checkout') }}" method="POST">
                            @csrf
                            <input type="hidden" name="total" value="{{ array_sum(array_map(function($item) { return $item['price'] * $item['quantity']; }, $cart)) }}">
                            <button type="submit" class="bg-green-500 text-white px-4 py-2">Pays</button>
                        </form>
                    </td>
                </tr>
                </tbody>
            </table>
        @else
            <p>Your cart is empty.</p>
        @endif
        <div class="mt-4">
            <a href="{{ route('products') }}" class="bg-gray-500 text-white px-4 py-2">Back to Products</a>
        </div>
    </div>
</body>
</html>